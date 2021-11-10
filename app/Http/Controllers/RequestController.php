<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Repository\SoapClient;

class RequestController extends Controller
{
    protected $client;

    public function __construct(SoapClient $client)
    {
        $this->client = $client;
    }

    public function getResults()
    {
        return $this->covertResults($this->client->get()->infoColaborador);
    }

    public function covertResults($data)
    {
        return json_decode(json_encode($data), true);
    }

    public function storeResults()
    {
        $data = $this->getResults();

        if (count($data) == 30) {
            Employee::create($data);
        }else{
            for ($i=0; $i < count($data); $i++) {
                Employee::create($data[$i]);
            }
        }
    }

    public function sendAso($data)
    {
        return $this->client->post($data);
    }
}
