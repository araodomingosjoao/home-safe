@extends('seller.master.app')

@section('title', 'Cadastrando uma casa')

@section('content')
    {{-- <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <form action="{{ route('seller.house.store') }}" method="post">
                    @csrf
                    <div class="row form-group">
                        <label>Localização </label>
                        <input type="text" class="form-control" name="location">
                    </div>

                    <div class="row form-group">
                        <label>Preço de Venda </label>
                        <input type="text" class="form-control" name="price_sale">
                    </div>


                    <div class="row form-group">
                        <label>Preço de Alugel </label>
                        <input type="text" class="form-control" name="price_rent">
                    </div>

                    <div class="row form-group">
                        <label>Detalhes da Casa</label>
                        <textarea name="description" class="form-control"
                            placeholder="Tamanho da casa,numero de quartos"></textarea>
                    </div>
                    <div class="row form-group">
                        <button type="submit" class="form-control btn btn-primary">Cadastrar uma casa</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <h2>Cadastrar uma casa</h2>
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
        <form action="{{ route('seller.house.store') }}" method="POST">
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
                    <select class="form-control" name="status_house">
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
                    <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cadastrar a casa</button>
                </div>
            </div>
        </form>
    </div>
@endsection
