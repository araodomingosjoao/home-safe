@extends('seller.master.app')

@section('title', 'Cadastrando uma casa')

@section('content')
    {{-- <div class="container">
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
    </div> --}}

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Registro de uma Casa</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            <!-- Smart Wizard -->
                            <p>Por favor preencha todos os dados necessarios.</p>
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                                Step 1<br />
                                                <small>Step 1 description</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                                Step 2<br />
                                                <small>Step 2 description</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span>
                                            <span class="step_descr">
                                                Step 3<br />
                                                <small>Step 3 description</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div id="step-1">
                                    <form class="form-horizontal form-label-left">

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="first-name">First
                                                Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="first-name" required="required"
                                                    class="form-control  ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last
                                                Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="last-name" name="last-name" required="required"
                                                    class="form-control ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name"
                                                class="col-form-label col-md-3 col-sm-3 label-align">Middle
                                                Name / Initial</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input id="middle-name" class="form-control col" type="text"
                                                    name="middle-name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-secondary" data-toggle-class="btn-primary"
                                                        data-toggle-passive-class="btn-secondary">
                                                        <input type="radio" name="gender" value="male" class="join-btn">
                                                        &nbsp;
                                                        Male &nbsp;
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary"
                                                        data-toggle-passive-class="btn-secondary">
                                                        <input type="radio" name="gender" value="female" class="join-btn">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input id="birthday" class="date-picker form-control" required="required"
                                                    type="text">
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <div id="step-2">
                                    <h2 class="StepTitle">Step 2 Content</h2>
                                    <p>
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis
                                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                        qui
                                        officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure
                                        dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </p>
                                </div>
                                <div id="step-3">
                                    <h2 class="StepTitle">Step 3 Content</h2>
                                    <p>
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure
                                        dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                            <!-- End SmartWizard Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
