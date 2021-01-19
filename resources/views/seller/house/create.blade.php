@extends('seller.master.app')

@section('title', 'Cadastrando uma casa')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastrar casa</h1>
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
        <form action="{{ route('seller.house.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="idade">Tipo da casa</label>
                    <select class="form-control" name="type_house">
                        <option>Casa normal</option>
                        <option>Apartamento</option>
                        <option>Condominio</option>
                        <option>Outros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idade">Estado de casa</label>
                    <select class="form-control" name="status_house" id="status_house">
                        <option>Venda</option>
                        <option>Alugel</option>
                        <option>Venda e Alugel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço </label>
                    <input type="text" class="form-control" name="location">
                </div>
                <div class="form-group">
                    <label for="endereco">Preço de Venda </label>
                    <input type="text" class="form-control" name="price_sale">
                </div>
                <div class="form-group">
                    <label for="endereco">Preço de Aluguel </label>
                    <input type="text" class="form-control" name="price_rent">
                </div>
                <div class="form-group">
                    <label>Descrição da casa</label>
                    <textarea class="form-control" name="description" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label>Adicionar Imagens</label>
                    <input type="file" class="form-control" name="images[]" multiple>
                </div>

                <div class="alert alert-info alert-dismissible fade show" role="divrt">
                    <small><strong>OBS:</strong> Pode adicionar no maximo 10 imagens</small>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cadastrar a casa</button>
                </div>
            </div>
        </form>
    </div>
@endsection
