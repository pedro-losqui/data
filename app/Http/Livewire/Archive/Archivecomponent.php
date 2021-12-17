<?php

namespace App\Http\Livewire\Archive;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use App\Http\Controllers\RequestController;

class Archivecomponent extends Component
{
    use WithPagination;

    public $employee_id, $employee, $search, $from, $to, $type;

    public function mount()
    {
        $this->from = date('Y-m-d', strtotime('-20 day'));
        $this->to = date('Y-m-d', strtotime('+1 day'));
        $this->count = count(Employee::where('status', '3')->get());
    }

    public function render()
    {
        if ($this->type) {
            return view('livewire.archive.archivecomponent', [
                'employees' => Employee::whereBetween('created_at', [$this->from, $this->to])
                ->where('status', '3')
                ->where('retTipExa', $this->type)
                ->orderBy('id', 'DESC')
                ->where(function ($query) {
                    $query->where('nomColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('cpfColaborador', 'LIKE', "%{$this->search}%");
                })
                ->paginate(15)
            ]);
        } else {
            return view('livewire.archive.archivecomponent', [
                'employees' => Employee::whereBetween('created_at', [$this->from, $this->to])
                ->where('status', '3')
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
        $this->employee = '';
        $this->employee = Employee::findOrFail($id);
        $this->emit('openModal');
    }

    public function alert($id)
    {
        $this->employee = '';
        $this->employee = Employee::findOrFail($id);
        $this->emit('alertModal');
    }

    public function dipatchAso(RequestController $request)
    {
        dd($this->employee);

        $result = $request->sendAso($this->employee);
        $this->emit('closeAlert');
        $this->emit('message', $result->msgRet);
    }

}
