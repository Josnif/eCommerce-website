@extends('layouts.app')

@section('content')
<div class='container'>
    <h2>Submit your shop</h2>

    <form action="{{route('shops.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name of Shop</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="desription">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
