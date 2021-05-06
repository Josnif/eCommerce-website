<div class="col-lg-3 col-md-6">
    <div class="product-wrapper mb-30">
        <div class="product-img-3">
            <a href="{{route('products.show', $product->id)}}">
                <img src="assets/img/product/electro/22.jpg" alt="">
            </a>
            <div class="hanicraft-action-position">
                <livewire:product-list-action :id="$product->id">
            </div>
        </div>
        <div class="product-content-electro2 text-center">
            <h3><a href="-{{route('products.show', $product->id)}}"> {{$product->name}} </a></h3>
            {{-- <span>Black</span> --}}
            <h5>$ {{$product->price}} </h5>
        </div>
    </div>
</div>