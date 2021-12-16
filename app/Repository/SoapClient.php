<?php

namespace App\Repository;

use Artisaninweb\SoapWrapper\SoapWrapper;

class SoapClient
{
    protected $soapWrapper;

    protected $from, $to;

    public function __construct(SoapWrapper $soapWrapper)
    {

      $this->from = date('d/m/Y', strtotime('-10 day'));
      $this->to = date('d/m/Y', strtotime('+15 day'));

      $this->soapWrapper = $soapWrapper;

      $this->soapWrapper->add('call', function ($service) {
        $service
          ->wsdl('http://187.191.118.30:8080/g5-senior-services/rubi_Synccom_avs_PrecadastroAso?wsdl')
          ->trace(true);
        });
    }

    public function get()
    {
        return $this->soapWrapper->call('call.BuscaCadastroN', [
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

    public function getOthers()
    {
        return $this->soapWrapper->call('call.BuscaCadastroN', [
            'user' => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption' => 1,
            'parameters'=> [
                'dataFinal'         => $this->to,
                'dataInicio'        => $this->from,
                'empSoc'            => 0,
                'flowInstanceID'    => null,
                'flowName'          => null,
                'tipExame'          => 0
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
                'datSol'            => $data->datSol,
                'dataRet'           => date('d/m/Y'),
                'empSoc'            => $data->empSoc,
                'nomColaborador'    => $data->nomColaborador,
                'numColab'          => $data->numColab,
                'tipExe'            => $data->retTipExa,
                'datExe'            => $data->datExe
            ]
        ]);
    }
    public function update($data, $status)
    {
        return $this->soapWrapper->call('call.retornaStatusExa', [
            'user' => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption' => 1,
            'parameters'=> [
                'codEmpresa'        => $data->codEmpresa,
                'codFilial'         => $data->codFilial,
                'datSol'            => $data->datSol,
                'dataRet'           => date('d/m/Y'),
                'empSoc'            => $data->empSoc,
                'nomColaborador'    => $data->nomColaborador,
                'numColab'          => $data->numColab,
                'tipExe'            => $data->retTipExa,
                'datSta'            => $status->datSta,
                'horSta'            => $status->horSta,
                'msgRet'            => $status->msgRet,
            ]
        ]);
    }
}
