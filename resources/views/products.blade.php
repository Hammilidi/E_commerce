@extends('home')

    @section('content')
    <div class="row" width="400">
        @foreach ($products as $product)
        
        <div class="col s4">
          <div class="card large hoverable">
            <div class="card-image">
              <img src='image/{{$product->image}}' class="materialboxed hover" width="200" height="300" alt="">
              <span class="card-title"><p class="text-dark"></p></span>
            </div>
            <div class="card-content center-align small">
              <p>{{$product->name}}</p>
              <p></p>
            </div>
            <div class="card-action center-align">
              <p class="mb-3">{{$product->price}} $<p>
                <form action="{{ route('cart.list') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->image }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter</button>    
              </form>
            </div>
          </div>
        </div>
        
        @endforeach
      </div>

    @endsection


        