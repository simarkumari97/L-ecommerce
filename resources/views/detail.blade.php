@extends('layout')
@section('content')
    <div class="container detail">
        <div class="row  m-5">
            <div class="col col-lg-6 ">
                <img src="{{ $product['gallery'] }}" alt="" class="detail-img">
            </div>
            <div class="col col-lg-6">
                <p class="text-2xl">{{ $product['name'] }}</p>
                <p class="text-sm p-2">Category: {{ $product['category'] }}</p>
                <p class="p-2">Price: ${{ $product['price'] }}</p>
                <p class="p-2">Detail: {{ $product['description'] }}</p>
                <button class="btn btn-success m-2">Buy Now</button><br>
                
                <form action="/cart" method="post">
                    @csrf 
                    <input type="hidden" name="product_id" value={{$product['id']}} >
                    <button class="btn btn-primary m-2">Add to Cart </button>
                </form>
                
            </div>
        </div>
    </div>
@endsection
