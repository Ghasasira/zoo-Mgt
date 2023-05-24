<?php

namespace App\Http\Livewire\Animals;

use Livewire\Component;
use App\Models\Animal;

class ShowAnimals extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.animals.show-animals', [
            'animals' => Animal::where('name', 'like', "%" . $this->search . "%")->paginate(10), 'header' => 'Animal Management'
        ]);
    }

    public function delete(Animal $animal)
    {
        $animal->delete();
    }
}
