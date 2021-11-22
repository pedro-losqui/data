<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class KitController extends Controller
{
    public function printKit($id)
    {
        $employee = Employee::findOrFail($id);
        return view ('kit.kit', compact('employee'));
    }
}
