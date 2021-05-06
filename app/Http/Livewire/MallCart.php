<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\CartIcon;

class MallCart extends Component
{
    public $cartItems = [];

    protected $listeners = ['cartUpdated' => 'onCartUpdate'];

    public function mount() {
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
    }

    public function onCartUpdate() {
        // $this->mount();
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();

    }

    public function render()
    {
        return view('livewire.mall-cart');
    }
}
