@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>Checkout</h2>

    <h3> Shipping Information </h3>

    <form action=" {{route('orders.store')}} " method="POST">
        @csrf

        <div class="form-group">
          <label for="">Full Name</label>
          <input type="text" name="shipping_fullname" id="" class="form-control" placeholder="">
        </div>

        <div class="form-group">
          <label for="">State</label>
          <input type="text"
            class="form-control" name="shipping_state" id="" placeholder="">
        </div>

        <div class="form-group">
          <label for="">City</label>
          <input type="text" name="shipping_city" id="" class="form-control" placeholder="" >
        </div>

        <div class="form-group">
          <label for="">Zip</label>
          <input type="text" name="shipping_zipcode" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Full Address</label>
          <input type="text" name="shipping_address" id="" class="form-control" placeholder="" aria-describedby="helpId">
       </div>

       <div class="form-group">
         <label for="">Mobile</label>
         <input type="text" name="shipping_phone" id="" class="form-control" placeholder="">
       </div>

       <h4>Payment option</h4>

       <div class="form-check">
           <label class="form-check-label">
           <input type="radio" class="form-check-input" name="payment_method" id="" value="Cash_on_delivery" checked>
           Cash on delivery
         </label>
       </div>

       <div class="form-check">
           <label class="form-check-label">
           <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal" checked>
           Paypal
         </label>
       </div>


       <button type="submit" class="btn btn-primary mt-3">Place Oder</button>

    </form>
  </div>
@endsection
