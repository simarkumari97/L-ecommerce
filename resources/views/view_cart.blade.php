<?php
use App\Http\Controllers\ProductController;
$totalitems=0;
if(Session::has('user')){
$totalitems=ProductController::cartItem();
}
?>
@extends('layout')
@section('content')
<p class="text-2xl text-center p-3 inline-block">Your Shopping Cart - {{ $totalitems }} items  (${{ $total }})</p>


<div class="container">
    <div class="row mb-4">
        <table class="cart_table" class="mt-2">
            <tr>
                <th>Product</th>
                <th>Name</th>
                <th>Price</th>
                <th>Option</th>
            </tr>
            @foreach ($product as $item)
                <tr>
                    <td style="width: 150px;">
                        <img src="{{ $item->gallery}}" alt="image" style="width: 80px;height:70px;">
                    </td>  
                    <td><b>{{ $item->name }}</b></td>
                    <td>${{ $item->price }}</td>
                    <td style="width: 80px">
                        <a href="/removecart/{{ $item->cart_id }}">
                            <button class="btn btn-danger">Remove</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2">Total Amount</td>
                <td><i>${{ $total }}</i></td>
                <td>
                <a href="/ordernow">
                    <button class="btn btn-success">OrderNow</button>
                </a>
            </td>
            </tr>
        </table>

    </div>
</div>    
       

@endsection
{{-- {{ $product }} --}}