<?php

namespace App\Presenters;

class EmployeePresenter
{
    public function tagStatus(int $type)
    {
        if ($type === 1) {
            return 'Pendente';
        } else {
            return 'Concluído';
        }
    }

    public function colorStatus(int $type)
    {
        if ($type === 1) {
            return 'warning';
        } else {
            return 'success';
        }
    }
}
