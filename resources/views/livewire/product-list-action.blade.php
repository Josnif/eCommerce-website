<div class="hanicraft-action">
    {{-- Care about people's approval and you will be their prisoner. --}}

    <a class="action-cart" style="cursor:pointer" title="Add To Cart" wire:click="addToCart({{$product_id}})">
        <i class="pe-7s-cart"></i>
    </a>

    @if ($added)
        <script>
        console.log('cs');
            
            alertSuccess();
        </script>
    @endif
    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
        <i class="pe-7s-look"></i>
    </a>
    {{-- You can change this to eye icon telling the user to view --}}
    <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
        <i class="pe-7s-repeat"></i>
    </a>
</div>
