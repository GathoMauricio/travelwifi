<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductComponent extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.product-component', compact('products'));
    }
}
