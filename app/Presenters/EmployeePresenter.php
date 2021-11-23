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

    public function kindExam(int $value)
    {
        switch ($value) {
            case 1:
                return 'Admissional';
            break;
            case 2:
                return 'Periódico';
            break;
            case 3:
                return 'Mudança de Função';
            break;
            case 4:
                return 'Retorno ao Trabalho';
            break;
            case 5:
                return 'Demissional';
            break;
        }
    }

    public function gender(string $value)
    {
        switch ($value) {
            case 'F':
                return 'Feminino';
            break;
            case 'M':
                return 'Masculino';
            break;
        }
    }

    public function age(string $value)
    {
       return date('Y') - intval(substr($value, 6, 4));
    }
}
