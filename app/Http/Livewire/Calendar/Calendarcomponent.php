<?php

namespace App\Http\Livewire\Calendar;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use App\Http\Controllers\RequestController;
use App\Models\Moviment;
use Illuminate\Support\Facades\Auth;

class Calendarcomponent extends Component
{
    use WithPagination;

    public $employee_id, $employee, $search, $from, $to, $type, $datExe, $msgRet, $minutos, $status;

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

    public function status($id)
    {
        $this->default();
        $this->employee = Employee::findOrFail($id);
        $this->emit('employeeStatus');
    }

    public function closeStatus()
    {
        $this->emit('CloseEmployeeStatus');
    }

    public function recordStatus(RequestController $request)
    {
        $status = Moviment::create([
            'user_id' => Auth::user()->id,
            'employee_id' => $this->employee->id,
            'datSta' => date('d/m/Y'),
            'horSta' => $this->hourMinutes(),
            'msgRet' => $this->msgRet,
        ]);

        $request->updateStatus($this->employee, $status);

        $this->default();
        $this->closeStatus();
    }

    public function default()
    {
        $this->employee = '';
        $this->msgRet = '';
    }

    function hourMinutes(){
        $partes = explode(":", date("H:i"));
        $minutos = $partes[0]*60+$partes[1];
        return ($minutos);
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
