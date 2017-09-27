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
                                                <p class="category">Ficha de Cadastro de Funcionários no Sistema</p>
                                            </li>
                                        </ul>
                                    </div>                                   
                                </div>
                            </div>
                            <div class="content">

                                @if(session('success'))
                                    <p class="alert-success">
                                    {{session('success')}} </p>
                                @endif

                                <form action="" method="POST">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo" name="FUNC_NOME" value="{{$employee->FUNC_NOME}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>RG</label>
                                                <input type="number" class="form-control" placeholder="RG" name="FUNC_RG" value="{{$employee->FUNC_RG}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="number" class="form-control" placeholder="CPF" name="FUNC_CPF" value="{{$employee->FUNC_CPF}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Conta</label>
                                                <input type="number" class="form-control" placeholder="Conta" name="FUNC_CONTA" value="{{$employee->FUNC_CONTA}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="number" class="form-control" placeholder="Telefone" name="FUNC_TEL" value="{{$employee->FUNC_TEL}}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="FUNC_EMAIL" value="{{$employee->FUNC_EMAIL}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Nascimento</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_NASCI" value="{{$employee->FUNC_DT_NASCI}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo Da Mãe</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo da Mãe"  name="FUNC_MAE" value="{{$employee->FUNC_MAE}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo Do Pai</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo do Pai"  name="FUNC_PAI" value="{{$employee->FUNC_PAI}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Endereço"  name="FUNC_ENDERECO" value="{{$employee->FUNC_ENDERECO}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Estado</label>
                                                <br>
                                                <select name="FUNC_ESTADO" class="form-control" disabled>
                                                    <!--@foreach($stats as $state)
                                                        @if($state->ESTADO_ID == $employee->FK_FUNC_ESTADO)
                                                            <option value="{{$state->ESTADO_ID}}" selected>{{$state->ESTADO_DESCR}}</option>
                                                        @endif
                                                    @endforeach -->
                                                    <option value="{{$employee->FUNC_ESTADO}}" selected>{{$employee->FUNC_ESTADO}}</option>                                                   
                                                </select>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <br>
                                                <select name="FUNC_CIDADE" class="form-control" disabled>
                                                    <!--@foreach($cities as $city)
                                                        @if($city->CIDADE_ID == $employee->FK_FUNC_CIDADE)
                                                            <option value="{{$city->CIDADE_ID}}" selected>{{$city->CIDADE_DESCR}}</option>
                                                        @endif
                                                    @endforeach -->
                                                    <option value="{{$employee->FUNC_CIDADE}}" selected>{{$employee->FUNC_CIDADE}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>BAIRRO</label>
                                                <input type="text" class="form-control" placeholder="Bairro" name="FUNC_BAIRRO" value="{{$employee->FUNC_BAIRRO}}" disabled>
                                            </div>
                                        </div>
                                                                
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CEP</label>
                                                <input type="number" class="form-control" placeholder="CEP" name="FUNC_CEP" value="{{$employee->FUNC_CEP}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Número</label>
                                                <input type="number" class="form-control" placeholder="Número da Casa" name="FUNC_NUMERO_CASA" value="{{$employee->FUNC_NUMERO_CASA}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Admissão</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_ADMISSAO" value="{{$employee->FUNC_DT_ADMISSAO}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Demissão</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_DEMISSAO" value="{{$employee->FUNC_DT_DEMISSAO}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Cargo</label>
                                                <br>
                                                <select name="FK_FUNC_CARGO" class="form-control" disabled>
                                                    @foreach($cargos as $cargo)
                                                        @if($cargo->CARG_ID == $employee->FK_FUNC_CARGO)
                                                            <option value="{{$cargo->CARG_ID}}" selected>{{$cargo->CARG_DESC}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Formação</label>
                                                <input type="text" class="form-control"  placeholder="Formação ou Escolaridade" name="FUNC_FORMACAO" value="{{$employee->FUNC_FORMACAO}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Usuário</label>
                                                <br>
                                                <select name="FK_USER_ID" class="form-control" disabled>
                                                    @foreach($users as $user)
                                                        @if($user->id == $employee->ID)
                                                            <option value="{{$user->id}}" selected>{{$user->email}}</option>
                                                        @endif
                                                    @endforeach
                                                        
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <br><br>
                                        <div align="center">
                                            <input type="submit" href="{{ url('/edit_employee', $employee->ID) }}" value="Editar Funcionário" name="" class="btn btn-info btn-fill">
                                            <input style="margin-left:10%; width: 150px;" type="submit" name="" value="Cancelar" class="btn btn-info btn-danger" onClick="JavaScript: window.history.back();">
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

@endsection