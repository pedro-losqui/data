<?php

namespace App\Http\Livewire\Archive;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class Archivecomponent extends Component
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
            return view('livewire.archive.archivecomponent', [
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
            return view('livewire.archive.archivecomponent', [
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

}
