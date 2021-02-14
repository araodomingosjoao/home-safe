@extends('site.master.layout')

@section('title','Home')

@section('content')
    <div class="site-section site-section-sm">
      <div class="container">

        <div class="row mb-5">
          @foreach ($houses_search as $house)

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="{{ route('site.description', [$house->id] )}}" class="property-thumbnail">
                <div class="offer-type-wrap">
                    <span class="offer-type bg-black text-center">{{ $house->type}}</span>
                    <span class="offer-type bg-danger text-center">{{ $house->status}}</span>

                </div>
                <img src="{{ env('APP_STORAGE').$house->images->first()->path }}" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
              <h2 class="property-title"><a href="{{ route('site.description', [$house->id] )}}">{{ $house->location}}</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>{{ $house->location}}</span>
                    @if($house->status == 'Venda')
                        <strong class="property-price text-primary d-block text-black">{{ $house->price_sale}} KZ</strong>
                    @endif

                    @if($house->status == 'Aluguel')
                        <strong class="property-price text-primary d-block text-black">{{ $house->price_rent}} KZ</strong>
                    @endif

                    @if($house->status == 'Venda e Aluguel')
                        <strong class="property-price text-primary d-block text-black">{{ $house->price_sale}} KZ // {{ $house->price_rent }} KZ</strong>
                    @endif
                    <span class="property-specs mb-4">Preço negociavel</span>

                {{-- <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>

                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>

                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">7,000</span>

                  </li>
                </ul> --}}
                <p>
                    {{ $house->description }}

                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active bg-dark">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>
        </div>

      </div>
    </div>
@endsection
