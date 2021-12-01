<?php

namespace App\Http\Controllers;

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
            if (count($this->data['infoColaborador']) === 30) {
                Employee::create($this->data['infoColaborador']);
            }else{
                for ($i=0; $i < count($this->data['infoColaborador']); $i++) {
                    Employee::create($this->data['infoColaborador'][$i]);
                }
            }
        }else{
            return $this->data['msgRet'];
        }
    }

    public function storeExams()
    {
        $this->exams();

        if ($this->exams['totRegistros'] > 0) {
            if (count($this->exams['infoColaborador']) === 30) {
                Employee::create($this->exams['infoColaborador']);
            }else{
                for ($i=0; $i < count($this->exams['infoColaborador']); $i++) {
                    Employee::create($this->exams['infoColaborador'][$i]);
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
}
