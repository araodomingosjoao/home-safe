@extends('layouts.app')
@section('title', 'Dashboard')

{{-- @section('content')
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
                    <label>Preço de Aluguel </label>
                    <input type="text" class="form-control" name="preco_Aluguel">
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
@endsection --}}

@section('content')
<div class="container">
    <ul class="nav nav-pills py-3" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="show-data-tab" data-toggle="tab" href="#show_data" role="tab" aria-controls="show_data" aria-selected="true">Ver seus dados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="update-data-tab" data-toggle="tab" href="#update_data" role="tab" aria-controls="update_data" aria-selected="false">Actualizar os dados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="create-house-tab" data-toggle="tab" href="#create_house" role="tab" aria-controls="create_house" aria-selected="true">Cadastrar uma casa</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent" style="min-height: 55vh;">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="show-data-tab">
            {{-- content --}}
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="update-data-tab">
            {{-- content --}}
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="create-house-tab">
            {{-- content --}}
        </div>
    </div>
    </div>

@endsection
