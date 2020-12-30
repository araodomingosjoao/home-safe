@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container bg-white py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('house.create') }}" method="post">
            @csrf
                <div class="row form-group">
                    <label>Localização </label>
                    <input type="text" class="form-control" name="localizacao">
                </div>

                <div class="row form-group">
                    <label>Preço de Venda </label>
                    <input type="text" class="form-control" name="preco_venda">
                </div>


                <div class="row form-group">
                    <label>Preço de Alugel </label>
                    <input type="text" class="form-control" name="preco_alugel">
                </div>

                <div class="row form-group">
                    <label>Detalhes da Casa</label>
                    <textarea name="detalhes" class="form-control" placeholder="Tamanho da casa,numero de quartos"></textarea>
                </div>

                <div class="row form-group">
                    <button type="submit" class="form-control btn btn-primary">Cadastrar uma casa</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
