<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riskiness extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'physicist',
        'chemical',
        'biological',
        'ergonomic',
        'accident',
    ];
}
