@extends('seller.master.app')

@section('title', 'Lista de casas')

@section('content')
<div class="site-section site-section-sm">
    <div class="container">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de casa</h1>
            <a href="{{ route('seller.house.create') }}" class="btn btn-success" data-toggle="tooltip"
                title="Cadastrar uma casa" data-placement="left">
                <span class="fa fa-plus"></span>
            </a>
        </div>

            <div class="row">
                @foreach ($houses as $house)

                    <div class="col-lg-6">

                        <div class="bg-white property-body border-bottom border-left border-right">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <strong class="text-success h1 mb-3">{{ $house->price_sale }} KZ</strong>
                                </div>
                                <div class="col-md-6">
                                    <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                        <li>
                                            <span class="property-specs">Preço negociavel</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text">Tipo de casa</span>
                                    <strong class="d-block">{{ $house->type }}</strong>
                                </div>
                                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text">Estado da casa</span>
                                    <strong class="d-block">{{ $house->status }}</strong>
                                </div>

                                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text">Preço de alugel</span>
                                    <strong class="d-block">{{ $house->price_rent }} KZ</strong>
                                </div>
                            </div>
                            <h2 class="h4 text-black">Descrição da casa</h2>
                            <p>
                                {{ $house->description }}
                            </p>
                            <div class="row no-gutters mt-2">
                                <div class="col-12">
                                    <h2 class="h4 text-black mb-3">Galeria</h2>
                                </div>
                                @forelse ($house->images as $image)
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a href="{{ env('APP_URL') }}/storage/{{ $image->path }}"
                                            class="image-popup gal-item"><img
                                                src="{{ env('APP_URL') }}/storage/{{ $image->path }}" alt=""
                                                class="img-fluid"></a>
                                    </div>
                                    @empty
                                        <p class="text-bold">
                                            Nenhuma imagem disponivel!
                                        </p>
                                @endforelse
                            </div>
                            <form class="mt-4 text-right" action="{{ route('seller.house.destroy', $house->id) }}"
                                method="post">
                                @csrf

                                @METHOD('delete')

                                <a href="{{ route('seller.house.edit', $house->id) }}" class="btn btn-dark btn-sm"
                                    data-toggle="tooltip" title="Actualizar casa">
                                    <span class="fa fa-edit"></span>
                                </a>

                                @if (is_null($house->deleted_at))
                                    <button type="submit" class="btn btn-success btn-sm" data-toggle="tooltip"
                                        title="Remover a casa">
                                        <span class="fa fa-trash-alt"></span>
                                    </button>
                                @endif

                                @if (!is_null($house->deleted_at))
                                    <a href="{{ route('house.recontract', $house->id) }}" class="btn btn-success btn-lg"
                                        data-toggle="tooltip" title="Recontratar funcionário">
                                        <span class="fa fa-file-alt"></span>
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
