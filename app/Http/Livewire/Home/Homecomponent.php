<?php

namespace App\Http\Livewire\Home;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Employee;

class Homecomponent extends Component
{
    use WithPagination;

    public $employee, $search, $from, $to, $type;

    public function mount()
    {
        $this->from = date('Y-m-d');
        $this->to = date('Y-m-d', strtotime('+5 day'));
    }

    public function render()
    {
        if ($this->type) {
            return view('livewire.home.homecomponent', [
                'employees' => Employee::where('retTipExa', $this->type)
                ->orderBy('id', 'DESC')
                ->where(function ($query) {
                    $query->where('nomColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('cpfColaborador', 'LIKE', "%{$this->search}%");
                })
                ->paginate(15)
            ]);
        } else {
            return view('livewire.home.homecomponent', [
                'employees' => Employee::orderBy('id', 'DESC')
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
}
