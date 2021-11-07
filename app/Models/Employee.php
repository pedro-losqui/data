<?php

namespace App\Models;

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
        'dataAdm',
        'empSoc',
        'masLocal',
        'nasColaborador',
        'nomCargo',
        'nomColaborador',
        'nomEmpresa',
        'nomFilial',
        'nomPosto',
        'nomRateio',
        'numColab',
        'retTipExa',
        'sexColaborador',
        'status',
    ];

}
