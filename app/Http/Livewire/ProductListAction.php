<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductListAction extends Component
{
    public $product_id;
    public $added = false;

    public function mount($id) {
        $this->product_id = $id;
    }

    public function addToCart(int $id)
    {
        // add the product to cart

        $product = Product::find($id)->first();
        \Cart::session(auth()->id())->add(array(

            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        $this->added = true;

    }

    public function render()
    {
        return view('livewire.product-list-action');
    }
}
