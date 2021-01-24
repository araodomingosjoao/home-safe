@extends('seller.master.app')

@section('title', 'Cadastrando uma casa')

@section('content')
    <div class="container py-2">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cadastrar casa</h1>
            <a href="{{ route('seller.house') }}" class="btn btn-success" data-toggle="tooltip" title="Voltar"
                data-placement="left">
                <span class="fa fa-arrow-left"></span>
            </a>
        </div>

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
        <div class="row">
            <div class="col-md-8">

                <form action="{{ route('seller.house.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                            <div class="form-group col-lg-6 col-md-6">
                                <label for="idade">Tipo da casa</label>
                                <select class="form-control" name="type_house">
                                    <option>Casa normal</option>
                                    <option>Apartamento</option>
                                    <option>Condominio</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label for="idade">Estado de casa</label>
                                <select class="form-control" name="status_house" id="status_house">
                                    <option>Venda</option>
                                    <option>Alugel</option>
                                    <option>Venda e Alugel</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label for="endereco">Endereço </label>
                                <input type="text" class="form-control" name="location">
                            </div>
                            <div class="form-group col-lg-6 col-md-6" id="sale">
                                <label for="endereco">Preço de Venda </label>
                                <input type="text" class="form-control" name="price_sale">
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label>Descrição da casa</label>
                                <textarea class="form-control" name="description" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group col-lg-6 col-md-6" id="rent">
                                <label for="endereco">Preço de Aluguel </label>
                                <input type="text" class="form-control" name="price_rent">
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label>Adicionar Imagens</label>
                                <input type="file" class="form-control" name="images[]" multiple>
                            </div>
                        </div>
                        <div class="alert alert-dark alert-dismissible fade show col-lg-6 col-md-6" role="divrt">
                            <small><strong>OBS:</strong> Pode adicionar no maximo 10 imagens</small>
                        </div>

                        <div class="form-group col-lg-9 col-md-9">
                            <button type="submit" class="btn btn-success">Cadastrar a casa</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
