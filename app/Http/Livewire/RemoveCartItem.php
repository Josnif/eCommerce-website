<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RemoveCartItem extends Component
{
    public $item = [];

    public function mount($item)
    {
        $this->item = $item;
    }
    
    public function removeFromCart() {
        \Cart::session(auth()->id())->remove($this->item['id']);

        $this->emit('itemRemoved');
    }

    public function render()
    {
        return view('livewire.remove-cart-item');
    }
}
