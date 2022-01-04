<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use App\Models\Employee;
use App\Repository\SoapClient;
use Illuminate\Support\Facades\Log;

class RequestController extends Controller
{
    protected $client, $data, $exams;

    public function __construct(SoapClient $client)
    {
        $this->client = $client;
    }

    public function results()
    {
        $this->data = $this->covertResults($this->client->get());
        Log::channel('xml')->info($this->data);
    }

    public function exams()
    {
        $this->exams = $this->covertResults($this->client->getOthers());
        Log::channel('xml')->info($this->exams);
    }

    public function covertResults($data)
    {
        return json_decode(json_encode($data), true);
    }

    public function storeResults()
    {
        $this->results();

        // dd($this->data);

        if ($this->data['totRegistros'] > 0) {
            for ($i=0; $i < $this->data['totRegistros']; $i++) {
                if ($this->data['totRegistros'] > 1) {
                    $employee = Employee::create($this->data['infoColaborador'][$i]);
                    if ($this->data['infoColaborador'][$i]['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $this->data['infoColaborador'][$i]['infoExame']['totExeCol'] ; $k++) {
                            Exams::create([
                                'employee_id' => $employee->id,
                                'description' => $this->data['infoColaborador'][$i]['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                    } else {
                        Exams::create([
                            'employee_id' => $employee->id,
                            'description' => $this->data['infoColaborador'][$i]['infoExame']['exames']['nomExame'],
                        ]);
                    }
                }else{
                    $employee = Employee::create($this->data['infoColaborador']);
                    if ($this->data['infoColaborador']['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $this->data['infoColaborador']['infoExame']['totExeCol'] ; $k++) {
                            Exams::create([
                                'employee_id' => $employee->id,
                                'description' => $this->data['infoColaborador']['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                    }else {
                        Exams::create([
                            'employee_id' => $employee->id,
                            'description' => $this->data['infoColaborador']['infoExame']['exames']['nomExame'],
                        ]);
                    }
                }
            }
        }else{
            return $this->data['msgRet'];
        }
    }

    public function storeExams()
    {
        $this->exams();

        // dd($this->exams);

        if ($this->exams['totRegistros'] > 0) {
            for ($i=0; $i < $this->exams['totRegistros']; $i++) {
                if ($this->exams['totRegistros'] > 1) {
                    $employee = Employee::create($this->exams['infoColaborador'][$i]);
                    if ($this->exams['infoColaborador'][$i]['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $this->exams['infoColaborador'][$i]['infoExame']['totExeCol'] ; $k++) {
                            Exams::create([
                                'employee_id' => $employee->id,
                                'description' => $this->exams['infoColaborador'][$i]['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                    } else {
                        Exams::create([
                            'employee_id' => $employee->id,
                            'description' => $this->exams['infoColaborador'][$i]['infoExame']['exames']['nomExame'],
                        ]);
                    }
                }else{
                    $employee = Employee::create($this->exams['infoColaborador']);
                    if ($this->exams['infoColaborador']['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $this->exams['infoColaborador']['infoExame']['totExeCol'] ; $k++) {
                            Exams::create([
                                'employee_id' => $employee->id,
                                'description' => $this->exams['infoColaborador']['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                    }else {
                        Exams::create([
                            'employee_id' => $employee->id,
                            'description' => $this->exams['infoColaborador']['infoExame']['exames']['nomExame'],
                        ]);
                    }
                }
            }
        }else{
            return $this->exams['msgRet'];
        }
    }

    public function sendAso($data)
    {
        return $this->client->post($data);
    }

    public function updateStatus($data, $status)
    {
        return $this->client->update($data, $status);
    }
}
