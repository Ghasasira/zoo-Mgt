<?php

namespace App\Http\Livewire\Gallerys;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateGallery extends Component
{
    use WithFileUploads;

    public Gallery $gallery;

    public $gallery_photo;

    protected $rules = [
        'gallery.photo_name' => 'required|string|min:6',
        'gallery_photo' => 'required|file|mimes:png,jpg|max:5000'
    ];

    public function mount()
    {
        $this->gallery = new Gallery();
    }

    public function save()
    {
        if(!is_null($this->gallery_photo))
        {
             $path =  \Storage::disk('local')->put('public', $this->gallery_photo);
             $this->gallery->photo_path = $path;
        }

        $this->gallery->save();

        return redirect()->to('/gallerys');
    }

   
    public function render()
    {
        return view('livewire.gallerys.create-gallery');
    }
}
