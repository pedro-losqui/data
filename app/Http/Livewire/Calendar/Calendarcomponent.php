<?php

namespace App\Http\Livewire\Calendar;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use App\Http\Controllers\RequestController;

class Calendarcomponent extends Component
{
    use WithPagination;

    public $employee_id, $employee, $search, $from, $to, $type, $datExe;

    public function mount()
    {
        $this->from = date('Y-m-d', strtotime('-20 day'));
        $this->to = date('Y-m-d', strtotime('+1 day'));
        $this->count = count(Employee::where('status', '2')->get());
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

    public function show($id)
    {
        $this->employee = Employee::findOrFail($id);
        $this->emit('openModal');
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
        $employee->status = 3;
        $employee->datExe = $this->datExe;
        $employee->save();
        return $employee;
    }

    public function dipatchAso(RequestController $request)
    {
        $result = $request->sendAso($this->updateStatus());
        $this->emit('closeAlert');
        $this->emit('message', $result->msgRet);
    }
}
