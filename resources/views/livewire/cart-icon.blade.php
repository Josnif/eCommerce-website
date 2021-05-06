<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="header-cart-3">
        <a href="javascipt:void(0)">
            <i class="ti-shopping-cart"></i>My Cart
            <span>
                @auth
                    {{count($cartItems)}}</span>
                @else
                    0
                @endauth
            </span>
        </a>
        <ul class="cart-dropdown">
            @auth
                @if (count($cartItems) > 0)
                    @foreach ($cartItems as $item)
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h5><a href="#"> {{$item['name']}}</a></h5>
                                {{-- <h6><a href="#">Black</a></h6> --}} {{-- For item variation or types --}}
                                <span>${{\Cart::session(auth()->id())->get($item['id'])->getPriceSum()}} x {{$item['quantity']}}</span>
                            </div>
                            <div class="cart-delete">
                                <a wire:click="removeFromCart($item['id'])" style="cursor: pointer">
                                    <i class="ti-trash"></i>
                                </a>
                            </div>
                        </li>
                    @endforeach
                @else
                    <li class="single-product-cart">
                        <div class="cart-title">
                            <h5> No item </h5>
                        </div>
                    </li>
                @endif
            @else
                <li class="single-product-cart">
                    <div class="cart-title">
                        <h5> No item </h5>
                    </div>
                </li>
            @endauth
            <li class="cart-btn-wrapper">
                <a class="cart-btn btn-hover" href="{{ route('cart.index') }}">view cart</a>
                <a class="cart-btn btn-hover" href="#">checkout</a>
            </li>
        </ul>
    </div>
</div>
