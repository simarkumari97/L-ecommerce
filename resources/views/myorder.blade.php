@extends('layout')
@section('content')
<p class="text-2xl text-center p-3 inline-block">My Ordered  List</p>


<div class="container">
    <div class="row mb-4">

        <table class="cart_table" class="mt-2 " style="width: 60%">
            <tr>
                <th>Product</th>
                <th>Name</th>
                <th>Delivery Status</th>
                <th>Payment Status</th>
                <th>Price</th>
            </tr>
            @foreach ($product as $item)
                <tr>
                    <td style="width: 150px;">
                        <img src="{{ $item->gallery}}" alt="image" style="width: 80px;height:70px;">
                    </td>  
                    <td><b>{{ $item->name }}</b></td>
                    <td><b>{{ $item->status }}</b></td>
                    <td><b>{{ $item->payment_status}}</b></td>

                    <td>${{ $item->price }}</td>
                        
                </tr>
            @endforeach
            
        </table>

    </div>
</div>    
       

@endsection
{{-- {{ $product }} --}}