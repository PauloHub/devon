@extends('layouts.app')
@extends('layouts.menu')
@section('content')
<div class="wrapper">
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">            
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-5">
                                        <ul>
                                            <li style="list-style-type:none;">
                                                <h4 class="title">Ficha de Cadastro</h4>
                                            </li>
                                            <li style="list-style-type:none;">
                                                <p class="category">Ficha de Cadastro de Doações no Sistema</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul>
                                        <li style="list-style-type:none; text-align: right; margin-right: 8%;">
                                            <a href="{{ url('/list_donation') }}" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Doações</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">

                                @if(session('success'))
                                    <p class="alert-success" align="center">
                                    {{session('success')}} </p>
                                @endif

                                <form action="{{ url('/register_donation') }}" method="POST">
                                    {{csrf_field()}}
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Doador</label>
                                                <br>
                                                <select name="FK_DOAD_ID" class="form-control" required>
                                                    <option value="">Selecione</option>
                                                    @foreach($donors as $donor)
                                                        <option value="{{ $donor->ID }}">{{ $donor->DOAD_NOME }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">                                            
                                            <div class="form-group">
                                                <label>Tipo da doação</label>
                                                <br>
                                                <select name="FK_DOAC_TPO" class="form-control" required>
                                                    <option value="">Selecione</option>
                                                    @foreach($donations_types as $donation_type)
                                                        <option value="{{ $donation_type->ID }}">{{ $donation_type->DOAT_DESCRICAO }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">                                            
                                            <div class="form-group">
                                                <label>Roteiro</label>
                                                <br>
                                                <select name="FK_ROTA" class="form-control">
                                                    <option value="">Selecione</option>
                                                    @foreach($scripts as $script)
                                                        <option value="{{ $script->ID }}">{{ $script->ID }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data da Doação</label>
                                                <input type="date" class="form-control"  name="DOAC_DTA" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Valor</label>
                                                <input type="number" class="form-control" placeholder="100,00" name="DOAC_VALOR">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Quantidade</label>
                                                <input type="number" class="form-control" name="DOAC_QAUNT">
                                            </div>
                                        </div>

                                    </div>

                                    <br><br>
                                        <div align="center">
                                            <input type="submit" value="Cadastrar Doação" name="" class="btn btn-info btn-fill">
                                            <input style="margin-left:10%; width: 150px;" type="button" name="" value="Cancelar" class="btn btn-info btn-danger" onClick="JavaScript: window.history.back();">
                                        </div>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@endsection