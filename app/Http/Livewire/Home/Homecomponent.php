<?php

namespace App\Http\Livewire\Home;

use App\Http\Controllers\RequestController;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Employee;

class Homecomponent extends Component
{
    use WithPagination;

    public $employe_id, $employee, $search, $from, $to, $type;

    public function mount()
    {
        $this->from = date('Y-m-d', strtotime('-4 day'));
        $this->to = date('Y-m-d', strtotime('+1 day'));
    }

    public function render()
    {
        if ($this->type) {
            return view('livewire.home.homecomponent', [
                'employees' => Employee::whereBetween('created_at', [$this->from, $this->to])
                ->where('status', '1')
                ->where('retTipExa', $this->type)
                ->orderBy('id', 'DESC')
                ->where(function ($query) {
                    $query->where('nomColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('cpfColaborador', 'LIKE', "%{$this->search}%");
                })
                ->paginate(15)
            ]);
        } else {
            return view('livewire.home.homecomponent', [
                'employees' => Employee::whereBetween('created_at', [$this->from, $this->to])
                ->where('status', '1')
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
        $this->employe_id = $id;
        $this->emit('closeModal');
        $this->emit('openAlert');
    }

    public function dipatchAso(RequestController $request)
    {
        $result = $request->sendAso('teste');
        $this->emit('closeAlert');
        $this->emit('message', $result->msgRet);
    }
}
