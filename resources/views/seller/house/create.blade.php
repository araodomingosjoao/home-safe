@extends('seller.master.app')

@section('title', 'Cadastrando uma casa')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="post">
                @csrf
                <div class="row form-group">
                    <label>Localização </label>
                    <input type="text" class="form-control" name="">
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
                    <textarea name="detalhes" class="form-control"
                        placeholder="Tamanho da casa,numero de quartos"></textarea>
                </div>

                <label>Gender *:</label>
                <p>
                    M:
                    <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                    <input type="radio" class="flat" name="gender" id="genderK" value="K" /> K
                    <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                </p>

                <div class="row form-group">
                    <button type="submit" class="form-control btn btn-primary">Cadastrar uma casa</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
