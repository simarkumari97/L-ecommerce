@extends('layout')
@section('content')
    <div class="container">
    <p class="text-2xl mt-4">Search Result...</p>
        <div class="row mb-4    ">
            @foreach ($product as $item)
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <a href="/detail/{{ $item['id']}}">
                    <div class="card card-product" style="width: 18rem;">
                        <img src="{{ $item['gallery'] }}" class="card-img-top" alt="..ww.">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $item['name'] }}</b>
                            <p class="card-text">${{ $item['price'] }}</p>
                            <p class="card-text">{{ $item['description'] }}</p>
                            <button type="submit" class="btn btn-primary">Detail</button>
                            <button type="submit" class="btn btn-primary">Order</button>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
