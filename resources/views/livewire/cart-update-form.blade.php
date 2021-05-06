<div>
    {{-- In work, do what you enjoy. --}}

    <input wire:model="quantity" type="number" wire:change="updateCart" >

    <div wire:loading wire:target="quantity">
        Updating...
    </div>
    
</div>
