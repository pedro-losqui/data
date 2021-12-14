<?php

namespace App\Http\Livewire\Home;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Exams;
use App\Models\Riskiness;

class Homecomponent extends Component
{
    use WithPagination;

    public $physicist, $chemical, $biological, $ergonomic, $accident, $other, $exam, $exams = [];

    public $count, $employee_id, $employee, $search, $type, $department, $post, $exaSol;

    public $loca, $results;

    public function mount()
    {
        $this->count = count(Employee::where('status', '1')->get());
    }

    public function render()
    {
        if ($this->type) {
            return view('livewire.home.homecomponent', [
                'employees' => Employee::where('status', '1')
                ->where('retTipExa', $this->type)
                ->orderBy('id', 'ASC')
                ->where(function ($query) {
                    $query->where('nomColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('cpfColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('nomLaboratorio', 'LIKE', "%{$this->search}%");
                })
                ->paginate(15)
            ]);
        } else {
            return view('livewire.home.homecomponent', [
                'employees' => Employee::where('status', '1')
                ->orderBy('id', 'ASC')
                ->where(function ($query) {
                    $query->where('nomColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('cpfColaborador', 'LIKE', "%{$this->search}%");
                    $query->orWhere('nomLaboratorio', 'LIKE', "%{$this->search}%");
                })
                ->paginate(15)
            ]);
        }
    }

    public function putExams()
    {
        array_push($this->exams,  ucfirst(strtolower($this->exam)));
        $this->exam = '';
    }

    public function create($id)
    {
        $this->employee = Employee::findOrFail($id);
        $this->emit('createModal');
    }

    public function salve()
    {
        Riskiness::create([
            'employee_id' => $this->employee->id,
            'physicist' => $this->physicist,
            'chemical' => $this->chemical,
            'biological' => $this->biological,
            'ergonomic' => $this->ergonomic,
            'accident' => $this->accident,
            'other' => $this->other,
        ]);

        if ($this->exams) {
            foreach ($this->exams as $key => $value) {
                Exams::create([
                    'employee_id' => $this->employee->id,
                    'description' => $this->exams[$key]
                ]);
            }
        }

        if ($this->department && $this->post) {
            $this->employee->nomPosto = $this->department;
            $this->employee->nomCargo = $this->post;
        }

        $this->employee->print = 1;
        $this->employee->save();

        $this->clearFields();

        $this->emit('closeCreate');

        return redirect()->to('/home');

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
        $employee->update([
            'status' => 2
        ]);

        $this->emit('closeAlert');
    }

    public function localize()
    {
        $this->results = Employee::where('nomColaborador', 'LIKE', "%{$this->loca}%")->get();
    }

    public function reload()
    {
        $this->loca = '';
        $this->results = '';
        $this->render();
    }

    public function clearFields()
    {
        $this->exams = [];
        $this->employee->id = '';
        $this->physicist = '';
        $this->chemical = '';
        $this->biological = '';
        $this->ergonomic = '';
        $this->accident = '';
    }
}
