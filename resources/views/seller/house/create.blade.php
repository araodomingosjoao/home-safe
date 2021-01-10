@extends('seller.master.app')

@section('title', 'Cadastrando uma casa')

@section('content')
    <div class="container">
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
    </div>
@endsection
