<?php

namespace App\Repository;

use Artisaninweb\SoapWrapper\SoapWrapper;

class SoapClient
{
    protected $soapWrapper;

    protected $from, $to;

    public function __construct(SoapWrapper $soapWrapper)
    {

      $this->from = date('15/11/2021');
      $this->to = date('d/m/Y', strtotime('+10 day'));

      $this->soapWrapper = $soapWrapper;

      $this->soapWrapper->add('call', function ($service) {
        $service
          ->wsdl('http://187.191.118.30:8080/g5-senior-services/rubi_Synccom_avs_PrecadastroAso?wsdl')
          ->trace(true);
        });
    }

    public function get()
    {
        return $this->soapWrapper->call('call.BuscaCadastro', [
            'user' => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption' => 1,
                'parameters'=> [
                    'dataFinal'         => $this->to,
                    'dataInicio'        => $this->from,
                    'empSoc'            => "",
                    'flowInstanceID'    => null,
                    'flowName'          => null,
                    'tipExame'          => 1
                ]
        ]);
    }

    public function post($data)
    {
        return $this->soapWrapper->call('call.RetornaCadastro', [
            'user' => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption' => 1,
                'parameters'=> [
                    'codEmpresa'        => $data->codEmpresa,
                    'codFilial'         => $data->codFilial,
                    'dataRet'           => $data->dataRet,
                    'empSoc'            => $data->empSoc,
                    'nomColaborador'    => $data->nomColaborador,
                    'numColab'          => $data->numColab
                ]
        ]);
    }
}
