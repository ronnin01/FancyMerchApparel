<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.index')->with('data', Products::all());
    }
}
