@extends('layout')
@section('content')
    <div class="gallery">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">
                @foreach ($product as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="/detail/{{ $item['id'] }}">
                        <img src="{{ $item['gallery'] }}" class="d-block w-100 slider-gallery" alt="gallery">
                        <div class="carousel-caption d-block d-md-block slider-caption">
                            <h5>{{ $item['name'] }}</h5>
                            <p>{{ $item['description'] }}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row mb-4">
            @foreach ($product as $item)
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <a href="/detail/{{ $item['id']}}">
                    <div class="card card-product" style="width: 18rem;">
                        <img src="{{ $item['gallery'] }}" class="card-img-top" alt="image gallery">
                        <div class="card-body">
                        <h5 class="card-title"><b>{{ $item['name'] }}</b>
                        <p class="card-text">${{ $item['price'] }}</p>
                        <p class="card-text">{{ $item['description'] }}</p>
                        <button type="submit" class="btn btn-primary">Order</button>
                        <button type="submit" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
      </div>
@endsection
