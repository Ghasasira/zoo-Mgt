<?php

namespace App\Http\Livewire\Visitors;

use Livewire\Component;
use App\Models\Visitor;

class EditVisitor extends Component
{
    public Visitor $visitor;

    protected $rules = [
        'visitor.name' => 'required|string|min:6',
        'visitor.arrival_time' => 'required|time|before:visitors.departure_time',
        'visitor.departure_time' => 'required|time|after:visitors.arrival_time',
        'visitor.ticket_no' => 'required|integer',
        'visitor.ticket_id' => 'required|integer',
    ];

    public function mount(Visitor $visitor)
    {
       // $this->ticket_no = rand(3000, 130000);
        $this->visitor = $visitor;
    }

    public function save()
    {
        //$this->visitor->ticket_no = $this->ticket_no;
        $this->visitor->save();

        return redirect()->to('/visitors');
    }

    public function render()
    {
        return view('livewire.visitors.edit-visitor',['tickets' => \DB::table('tickets')->get()]);
    }
}
