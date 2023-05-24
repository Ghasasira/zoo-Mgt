<?php

namespace App\Http\Livewire\Visitors;

use Livewire\Component;
use App\Models\Visitor;

class ShowVisitors extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.visitors.show-visitors', [
            'visitors' => Visitor::where('name', 'like', "%" . $this->search . "%")->paginate(10), 'header' => 'Visitor Management'
        ]);
    }

    public function delete(Visitor $visitor)
    {
        $visitor->delete();
    }
}
