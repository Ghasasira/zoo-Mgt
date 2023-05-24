<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;
use App\Models\Employee;

class CreateEmployee extends Component
{
    public Employee $employee;
    // public $ticket_no;

    protected $rules = [
        'employee.name' => 'required|string|min:6',
        'employee.role' => 'required|string',
        'employee.description' => 'required|string',
    ];

    public function mount()
    {
        // $this->ticket_no = rand(3000, 130000);
        $this->employee = new Employee();
    }

    public function save()
    {
        // $this->employee->ticket_no = $this->ticket_no;
        $this->employee->save();

        return redirect()->to('/employees');
    }

    public function render()
    {
        return view('livewire.employees.create-employee');
    }
}
