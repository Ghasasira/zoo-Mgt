<?php

namespace App\Http\Livewire\Animals;

use Livewire\Component;
use App\Models\Animal;
use Livewire\WithFileUploads;

class CreateAnimal extends Component
{
    use WithFileUploads;

    public Animal $animal;
    // public $ticket_no;
    public $animal_image;

    protected $rules = [
        'animal.name' => 'required|string|min:6',
        'animal.description' => 'required|string',
        'animal_image' => 'required|file|mimes:png,jpg|max:5000'
    ];

    public function mount()
    {
        $this->animal = new Animal();
    }

    public function save()
    {
        if(!is_null($this->animal_image))
        {
          //  $path =   \Storage::disk('local')->put('public', $this->animal_image);
          //  $this->animal->photo = $path;

            $imageName =   time().'.'. $this->animal_image->getClientOriginalExtension();
            
           
           
            $path =  $this->animal_image->store('pictures','public');

            $this->animal->photo = $path;


        }

        $this->animal->save();

        return redirect()->to('/zooanimal');
    }



    public function render()
    {
        return view('livewire.animals.create-animal');
    }
}
