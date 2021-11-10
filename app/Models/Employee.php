<?php

namespace App\Models;

use App\Presenters\EmployeePresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpjFilial',
        'cnpjPosto',
        'codCargo',
        'codEmpresa',
        'codFilial',
        'codLocal',
        'codRateio',
        'cpfColaborador',
        'datSol',
        'dataAdm',
        'emaSolicitante',
        'empSoc',
        'exaSolicitado',
        'fonSolicitante',
        'masLocal',
        'nasColaborador',
        'nomCargo',
        'nomColaborador',
        'nomEmpresa',
        'nomFilial',
        'nomLaboratorio',
        'nomPosto',
        'nomRateio',
        'nomSolicitante',
        'numColab',
        'retTipExa',
        'sexColaborador',
        'status'
    ];

    public function presenter()
    {
        return new EmployeePresenter();
    }

}
