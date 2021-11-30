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

    public function calendar(string $value)
    {
       switch (substr($value, 3, -5)) {
           case '1':
               return 'Janeiro';
            break;
           case '2':
               return 'Fevereiro';
            break;
           case '3':
               return 'Março';
            break;
           case '4':
               return 'Abrir';
            break;
           case '5':
               return 'Maio';
            break;
           case '6':
               return 'Junho';
            break;
           case '7':
               return 'Julho';
            break;
           case '8':
               return 'Agusto';
            break;
           case '9':
               return 'Setembro';
            break;
           case '10':
               return 'Outubro';
            break;
           case '11':
               return 'Novembro';
            break;
           case '12':
               return 'Dezembro';
            break;
       }
    }
}
