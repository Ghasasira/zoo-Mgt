<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;
use App\Models\Employee;

class Employees extends Component
{
    
    public $search = '';

    public function render()
    {
        return view('livewire.employees.employees', [
            'employee' => Employee::where('name', 'like', "%" . $this->search . "%")->paginate(10), 'header' => 'Employee Management'
        ]);
    }

    public function delete(Employee $employee)
    {
        $employee->delete();
    }
}
