@extends('seller.master.app')

@section('title', 'Cadastrando uma casa')

@section('content')
    <div class="container py-2">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Actualizar casa</h1>
            <a href="{{ route('seller.house') }}" class="btn btn-dark" data-toggle="tooltip" title="Voltar"
                data-placement="left">
                <span class="fa fa-arrow-left"></span>
            </a>
        </div>


        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>

                <strong>{{ session('message') }}!</strong>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <div>
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">
                            {{ $error }}
                        </p>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">

                <form action="{{ route('seller.house.update', [$house->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="idade">Tipo da casa</label>
                            <select class="form-control" name="type_house" value="{{ $house->$house }}">
                                <option>Casa normal</option>
                                <option>Apartamento</option>
                                <option>Condominio</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="idade">Estado de casa</label>
                            <select class="form-control" name="status_house" id="status_house"
                                value="{{ $house->status_house }}">
                                <option>Venda</option>
                                <option>Alugel</option>
                                <option>Venda e Alugel</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="endereco">Endereço </label>
                            <input type="text" class="form-control" name="location" value="{{ $house->location }}">
                        </div>
                        <div class="form-group col-lg-6 col-md-6" id="sale">
                            <label for="endereco">Preço de Venda </label>
                            <input type="text" class="form-control" name="price_sale" value="{{ $house->price_sale }}">
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label>Descrição da casa</label>
                            <textarea class="form-control" name="description" value="{{ $house->description }}" cols="30"
                                rows="5"></textarea>
                        </div>
                        <div class="form-group col-lg-6 col-md-6" id="rent">
                            <label for="endereco">Preço de Aluguel </label>
                            <input type="text" class="form-control" name="price_rent" value="{{ $house->price_rent }}">
                        </div>

                    </div>

                    <div class="row no-gutters mt-2">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Galeria</h2>
                        </div>

                        @forelse ($house->images as $image)
                                <div class="col-lg-3 mb-5">
                                    <a href="{{ env('APP_URL') }}/storage/{{ $image->path }}"
                                        class="image-popup gal-item"><img
                                            src="{{ env('APP_URL') }}/storage/{{ $image->path }}" alt=""
                                            class="img-fluid"></a>
                                    <div class="col-md-16 mt-1 mb-1">
                                    <a href="{{ route('seller.house.destroy.image', $image)}}" id="delete_image" class="btn btn-danger" data-toggle="tooltip"
                                            title="Remover">
                                            <span class="fa fa-trash-alt"></span>
                                        </a>
                                    </div>
                                </div>
                                @empty
                                <p class="text-bold">
                                    Nenhuma imagem
                                </p>
                        @endforelse
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>
                    </div>
                    <div class="form-group col-lg-9 col-md-9">
                        <button type="submit" class="btn btn-dark">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
