<?php

namespace App\Http\Livewire\Gallerys;

use App\Models\Gallery;
use Livewire\Component;

class EditGallery extends Component
{
    public Gallery $gallery;

    protected $rules = [
        'gallery.photo_name' => 'required|string|min:6',
    ];

    public function mount(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    public function save()
    {
        $this->gallery->update(['photo_name' => $this->gallery->photo_name,]);
        return redirect()->to('/gallerys');
    }

    

    public function render()
    {
        return view('livewire.gallerys.edit-gallery');
    }
}
