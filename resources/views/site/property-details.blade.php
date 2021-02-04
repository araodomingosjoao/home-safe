@extends('site.master.layout')

@section('title', 'Descrição')

@section('content')
    <div class="site-section site">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    {{-- <div>
                        <div class="slide-one-item home-slider owl-carousel">
                            @foreach ($house->images as $image)
                                <div><img src="{{ env('APP_STORAGE') . $image->path }}" alt="Image" class="img-fluid" width="100px" height="100px"></div>
                            @endforeach
                        </div>
                    </div> --}}
                    <div class="bg-white property-body">
                        <div class="row mb-5">
                            <div class="col-md-12  text-center">
                                @if ($house->status == 'Venda')
                                    <strong class="text-black h1">{{ $house->price_sale }}KZ</strong>
                                @endif

                                @if ($house->status == 'Alugel')
                                    <strong class="text-black h1">{{ $house->price_rent }}KZ</strong>
                                @endif

                                @if ($house->status == 'Venda e Alugel')
                                    <strong class="text-black h1">{{ $house->price_sale }}KZ // {{ $house->price_rent }} KZ</strong>
                                @endif
                            </div>
                            <div class="col-md-6">
                                {{-- <ul
                                    class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
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
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6 col-lg-6 text-center py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Tipo de casa</span>
                                <strong class="d-block">{{ $house->type }}</strong>
                            </div>
                            <div class="col-md-6 col-lg-6 text-center py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Estado da casa</span>
                                <strong class="d-block">{{ $house->status }}</strong>
                            </div>
                        </div>

                        <div class="row no-gutters mt-5 text-center">
                            <div class="col-12">
                                <h2 class="h4 text-black mb-5">Galeria</h2>
                            </div>
                            @foreach ($house->images as $image)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <a href="{{ env('APP_STORAGE') . $image->path }}" class="image-popup gal-item"><img
                                            src="{{ env('APP_STORAGE') . $image->path }}" alt="Image" class="img-fluid"></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="row">

    <div class="col-md-6 col-lg-12 mb-4">
    <div class="property-entry h-100">
      <div class="p-4 property-body">
        <h2 class="property-title text-black mb-4">Informação do Propetario</h2>
        <p><i class="fas fa-user mr-3"></i> {{ $house->user->name }}</p>
        <p><i class="fas fa-envelope mr-3"></i> {{ $house->user->email }}</p>
        <p><i class="fas fa-phone mr-3"></i> {{ $house->user->phone }}</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-12 mb-4">
        <div class="property-entry h-100">
          <div class="p-4 property-body">
              <h2 class="property-title text-black">Contactar o Propetario</h2>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" id="phone" class="btn btn-primary" value="Entrar em contacto">
                </div>
            </form>
          </div>
        </div>
      </div>
</div>
                    {{-- <div class="bg-white widget ">

                        <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                        <form action="" class="form-contact-agent">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                            </div>
                        </form>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    @endsection
