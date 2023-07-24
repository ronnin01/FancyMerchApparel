<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Livewire\Component;

class ProductDetail extends Component
{

    public $product_id;
    public $product_name;

    public function mount($product_id){
        $this->product_id = $product_id;
    }

    public function product(){
        
    }

    public function render()
    {
        return view('livewire.product-detail')->with('data', Products::where('product_id', $this->product_id)->first());
    }
}
