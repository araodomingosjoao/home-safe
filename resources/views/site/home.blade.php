@extends('site.master.layout')

@section('title','Home')

@section('content')
    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12 bg-dark" style="margin-top: -100px;">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Tipo de casa</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                    <option value="">Condominio</option>
                    <option value="">Apartamento</option>
                    <option value="">Casa normal</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Opções de venda</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                    <option value="">Casa a venda</option>
                    <option value="">Aluger</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Selecione a cidade</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                    <option value="">Luanda</option>
                    <option value="">Benguela</option>
                    <option value="">Malanje</option>
                    <option value="">Huila</option>
                    <option value="">Namibia</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <input type="submit" class="btn btn-danger text-white btn-block rounded-0" value="Buscar">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">

        <div class="row mb-5">
          @foreach ($houses as $house)

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="{{ route('site.description')}}" class="property-thumbnail">
                <div class="offer-type-wrap">
                    <span class="offer-type bg-black text-center">{{ $house->type}}</span>
                    <span class="offer-type bg-danger text-center">{{ $house->status}}</span>

                </div>
                <img src="{{ env('APP_STORAGE').$house->images->first()->path }}" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
              <h2 class="property-title"><a href="{{ route('site.description')}}">{{ $house->location}}</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>{{ $house->location}}</span>
              <strong class="property-price text-primary mb-3 d-block text-black">{{ $house->price_sale}} KZ</strong>
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
