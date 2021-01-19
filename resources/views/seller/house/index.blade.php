@extends('seller.master.app')

@section('title', 'Lista de casas')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Listagem de Casa</h1>
            <a href="{{ route('seller.house.create') }}" class="btn btn-primary" data-toggle="tooltip"
                title="Cadastrar uma casa" data-placement="left">
                <span class="fa fa-plus"></span>
            </a>
        </div>

        <div class="row">
            @forelse($houses as $house)
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Endereço: {{ $house->location }}</h6>
                        </div>

                        <div class="card-body">

                            <p>
                                <strong>Tipo de casa:</strong>
                                {{ $house->type }}
                            </p>

                            <p>
                                <strong>Estado da casa:</strong>
                                {{ $house->status }}
                            </p>

                            <p>
                                <strong>Preço de venda:</strong>
                                {{ $house->price_sale }}
                            </p>

                            <p>
                                <strong>Preço de renda:</strong>
                                {{ $house->price_rent }}
                            </p>

                            <p>
                                <strong>Descrição da casa:</strong>
                                {{ $house->description }}
                            </p>

                            <p class="text-center">
                            <form action="{{ route('seller.house.destroy', $house->id) }}" method="post">
                                @csrf

                                @METHOD('delete')

                                <a href="{{ route('seller.house.edit', $house->id) }}" class="btn btn-info btn-sm"
                                    data-toggle="tooltip" title="Actualizar casa">
                                    <span class="fa fa-edit"></span>
                                </a>

                                @if (is_null($house->deleted_at))
                                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                        title="Remover a casa">
                                        <span class="fa fa-trash-alt"></span>
                                    </button>
                                @endif

                                {{-- @if (!is_null($house->deleted_at))
                                    <a href="{{ route('house.recontract', $house->id) }}" class="btn btn-success btn-sm"
                                        data-toggle="tooltip" title="Recontratar funcionário">
                                        <span class="fa fa-file-alt"></span>
                                    </a>
                                @endif --}}
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-bold">
                    Não há casas cadastradas ainda
                </p>
            @endforelse
        </div>
    </div>
@endsection
