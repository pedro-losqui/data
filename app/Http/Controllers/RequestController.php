<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Repository\SoapClient;

class RequestController extends Controller
{
    protected $client, $data;

    public function __construct(SoapClient $client)
    {
        $this->client = $client;
    }

    public function getResults()
    {
        $this->data = $this->covertResults($this->client->get());
    }

    public function covertResults($data)
    {
        return json_decode(json_encode($data), true);
    }

    public function storeResults()
    {
        $this->getResults();

        if ($this->data['totRegistros'] > 0) {
            if (count($this->data) == 30) {
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

    public function sendAso($data)
    {
        return $this->client->post($data);
    }
}
