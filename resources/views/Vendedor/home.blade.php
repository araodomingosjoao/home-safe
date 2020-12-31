@extends('layouts.app')
@section('title', 'Dashboard')

{{-- @section('content')

@endsection --}}

@section('content')
<div class="container justify-content-center">
    <ul class="nav nav-pills py-3" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="show-data-tab" data-toggle="tab" href="#show_data" role="tab" aria-controls="show_data" aria-selected="true">Ver seus dados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="update-data-tab" data-toggle="tab" href="#update_data" role="tab" aria-controls="update_data" aria-selected="false">Actualizar os dados</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent" style="min-height: 55vh;">
        <div class="tab-pane fade show active" id="show_data" role="tabpanel" aria-labelledby="show-data-tab">
            <div class="container bg-white py-5 text-center">
                <p>Nome : {{ auth::user()->name}}</p>
                <p>Email : {{ auth::user()->email}}</p>
                <p>Telefone : {{ auth::user()->name}}</p>
            </div>
        </div>
        <div class="tab-pane fade" id="update_data" role="tabpanel" aria-labelledby="update-data-tab">
            <div class="container bg-white py-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('vendedor.home.update') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row form-group">
                                <label>Nome </label>
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                            </div>

                            <div class="row form-group">
                                <label>Email </label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            </div>

                            <div class="row form-group">
                                <label>Telefone</label>
                                <input type="text" class="form-control" name="telefone" value="{{ Auth::user()->telefone }}">
                            </div>
                            <div class="row form-group">
                                <button type="submit" class="form-control btn btn-primary">Actualizar Dados</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
