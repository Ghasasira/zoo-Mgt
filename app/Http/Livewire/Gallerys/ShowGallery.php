<?php

namespace App\Http\Livewire\Gallerys;

use App\Models\Gallery;
use Livewire\Component;

class ShowGallery extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.gallerys.show-gallery', [
            'gallerys' => Gallery::where('photo_name', 'like', "%" . $this->search . "%")->paginate(10), 'header' => 'Gallery Management'
        ]);
    }

    public function delete(Gallery $gallery)
    {
        $gallery->delete();
    }

}
