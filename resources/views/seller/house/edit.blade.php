@extends('seller.master.app')

@section('title', 'Editar')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Actualizar casa</h1>
        <a href="{{ route('seller.house') }}" class="btn btn-danger" data-toggle="tooltip" title="Voltar"
            data-placement="left">
            <span class="fa fa-arrow-left"></span>
        </a>
    </div>
    <div class="container py-3">
        @if (session('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
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
        <form action="{{ route('seller.house.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tipo da casa</label>
                    <select class="form-control" name="type_house">
                        <option>Casa normal</option>
                        <option>Apartamento</option>
                        <option>Condominio</option>
                        <option>Outros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Estado de casa</label>
                    <select class="form-control" name="status_house">
                        <option>Venda</option>
                        <option>Alugel</option>
                        <option>Venda e Alugel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Endereço </label>
                    <input type="text" class="form-control" name="location" value="{{ $house->location }}">
                </div>
                <div class="form-group">
                    <label>Preço de Venda </label>
                    <input type="text" class="form-control" name="price_sale" value="{{ $house->price_sale }}">
                </div>
                <div class="form-group">
                    <label>Preço de Aluguel </label>
                    <input type="text" class="form-control" name="price_rent" value="{{ $house->price_rent }}">
                </div>
                <div class="form-group">
                    <label>Descrição da casa</label>
                    <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
