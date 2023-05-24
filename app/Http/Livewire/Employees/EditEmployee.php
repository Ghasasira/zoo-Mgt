<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;
use App\Models\Employee;

class EditEmployee extends Component
{
    public Employee $employee;

    protected $rules = [
        'employee.name' => 'required|string|min:6',
        'employee.role' => 'required|string',
        'employee.description' => 'required',
    ];

    public function mount(Employee $employee)
    {
       // $this->ticket_no = rand(3000, 130000);
        $this->employee = $employee;
    }

    public function save()
    {
        //$this->employee->ticket_no = $this->ticket_no;
        $this->employee->save();

        return redirect()->to('/employees');
    }

    public function render()
    {
        return view('livewire.employees.edit-employee');
    }
}
