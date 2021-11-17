<?php

namespace App\Presenters;

class EmployeePresenter
{
    public function tagStatus(int $value)
    {
        switch ($value) {
            case 1:
                return 'Pendente';
            break;
            case 2:
                return 'Agendado';
            break;
            case 3:
                return 'Concluído';
            break;
        }

    }

    public function colorStatus(int $value)
    {
        switch ($value) {
            case 1:
                return 'warning';
            break;
            case 2:
                return 'primary';
            break;
            case 3:
                return 'success';
            break;
        }
    }
}
