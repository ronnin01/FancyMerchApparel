<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminDashboard extends Component
{

    use WithFileUploads;

    public $product_name;
    public $product_quantity;
    public $product_price;
    public $image;
    public $product_category;

    public function product_submit(){

        $this->validate([
            'product_name'=>'required',
            'product_quantity'=>'required|numeric|min:1',
            'product_price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'image'=>'required|max:2048|image',
            'product_category'=>'required'
        ]);

        $rand_num = rand();

        $this->image->storeAs('uploads', $rand_num.$this->image->getClientOriginalName(), 'public');

        $product = new Products();

        $product->product_name = $this->product_name;
        $product->product_quantity = $this->product_quantity;
        $product->product_price = $this->product_price;
        $product->product_image = $rand_num.$this->image->getClientOriginalName();
        $product->product_category = $this->product_category;
        $product->product_status = 25;
        $product->save();

        Session::flash('message', 'Product has been Added.');

        return Redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}
