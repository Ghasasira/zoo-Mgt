<?php

namespace App\Http\Livewire\Animals;

use Livewire\Component;
use App\Models\Animal;

class EditAnimal extends Component
{
    public Animal $animal;

    protected $rules = [
        'animal.name' => 'required|string|min:6',
        'animal.description' => 'required',
    ];

    public function mount(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function save()
    {
        $this->animal->save();
        return redirect()->to('/animals');
    }

    public function render()
    {
        return view('livewire.animals.edit-animal');
    }
}
