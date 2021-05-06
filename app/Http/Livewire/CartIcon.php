<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartIcon extends Component
{
    public $cartItems = [];

    protected $listeners = ['updatedCart' => 'onUpdatedCart', ];

    public function mount() {
        if (Auth::user()) {
            $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
        }
    }

    public function removeFromCart($id) {
        \Cart::session(auth()->id())->remove($id);

        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
        
    }

    public function onUpdatedCart() {
        // $this->mount();
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();

    }
    public function render()
    {
        return view('livewire.cart-icon');
    }
}
