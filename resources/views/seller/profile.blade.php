@extends('seller.master.app')

@section('title', 'Perfil')

@section('content')
<div class="col-md-9 " style="margin:0 auto">
        @if (session('message'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>

            <strong>{{ session('message') }}!</strong>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>

            <div>
                @foreach($errors->all() as $error)
                    <p class="text-danger">
                        {{ $error }}
                    </p>
                @endforeach
            </div>
        </div>
    @endif

    <div class="card mb-5">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
            <li class="nav-item mb-2">
              <a class="nav-link active-bg-dark" href="#activity" data-toggle="tab">Dados do Usuario</a>
            </li>
            <li class="nav-item mb-2">
              <a class="nav-link" href="#timeline" data-toggle="tab">Alterar Senha</a>
            </li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
          <form action="{{ route('seller.update')}}" method="POST">
            @csrf
            @method('PUT')
                <div class="py-2 col-md-6">
                    <div class="form-group">
                        <label for="endereco">Nome </label>
                        <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="idade">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="idade">Telefone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Telefone">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Actualizar</button>
                    </div>
                </div>
            </form>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="timeline">
          <form action="{{ route('seller.update_password')}}" method="POST">
            @csrf
            @method('PUT')
                <div class="py-2 col-md-6">
                    <div class="form-group">
                        <label for="">Senha Actual</label>
                        <input type="password" class="form-control" name="old_password">
                    </div>
                    <div class="form-group">
                        <label for="">Nova Senha</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="idade">Confirmar Senha</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Actualizar</button>
                    </div>

                    <div class="form-group">
                        <div class="validacao"></div>
                    </div>
                </div>
            </form>

          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

@endsection
