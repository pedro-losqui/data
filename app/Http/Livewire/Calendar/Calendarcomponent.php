<?php

namespace App\Http\Livewire\Calendar;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use App\Http\Controllers\RequestController;

class Calendarcomponent extends Component
{
    use WithPagination;

    public $employee_id, $employee, $search, $from, $to, $type;

    public function mount()
    {
        $this->from = date('Y-m-d', strtotime('-4 day'));
        $this->to = date('Y-m-d', strtotime('+1 day'));
    }

    public function render()
    {
        if ($this->type) {
            return view('livewire.calendar.calendarcomponent', [
                'employees' => Employee::whereBetween('created_at', [$this->from, $this->to])
                ->where('status', '2')
                ->where('retTipExa', $this->type)
                ->orderBy('id', 'DESC')
                ->where(function ($query) {
                    $query->where('nomColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('cpfColaborador', 'LIKE', "%{$this->search}%");
                })
                ->paginate(15)
            ]);
        } else {
            return view('livewire.calendar.calendarcomponent', [
                'employees' => Employee::whereBetween('created_at', [$this->from, $this->to])
                ->where('status', '2')
                ->orderBy('id', 'DESC')
                ->where(function ($query) {
                    $query->where('nomColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('cpfColaborador', 'LIKE', "%{$this->search}%");
                })
                ->paginate(15)
            ]);
        }
    }

    public function alert($id)
    {
        $this->employee_id = $id;
        $this->emit('closeModal');
        $this->emit('openAlert');
    }

    public function updateStatus()
    {
        $employee = Employee::findOrFail($this->employee_id);
        $employee->update([
            'status' => 3
        ]);

        return $employee;
    }

    public function dipatchAso(RequestController $request)
    {
        $result = $request->sendAso($this->updateStatus());
        $this->emit('closeAlert');
        $this->emit('message', $result->msgRet);
    }
}
