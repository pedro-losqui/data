<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use App\Models\Employee;
use App\Repository\SoapClient;

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
    }

    public function exams()
    {
        $this->exams = $this->covertResults($this->client->getOthers());
    }

    public function covertResults($data)
    {
        return json_decode(json_encode($data), true);
    }

    public function storeResults()
    {
        $this->results();

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

    public function sendAso($data)
    {
        return $this->client->post($data);
    }

    public function updateStatus($data, $status)
    {
        return $this->client->update($data, $status);
    }
}
