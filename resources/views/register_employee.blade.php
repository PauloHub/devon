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
                                    <ul>
                                        <li style="list-style-type:none; text-align: right; margin-right: 8%;">
                                            <a href="#" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Funcionários</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo" name="FUNC_NOME">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>RG</label>
                                                <input type="number" class="form-control" placeholder="RG" name="FUNC_RG">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="number" class="form-control" placeholder="CPF" name="FUNC_CPF">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Conta</label>
                                                <input type="number" class="form-control" placeholder="Conta" name="FUNC_CONTA">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="number" class="form-control" placeholder="Telefone" name="FUNC_TEL">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="FUNC_EMAIL">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Nascimento</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_NASCI">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo Da Mãe</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo da Mãe"  name="FUNC_MAE">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo Do Pai</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo do Pai"  name="FUNC_PAI">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Endereço"  name="FUNC_ENDERECO">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Estado</label>
                                                <br>
                                                <select name="ID_ESTADO">
                                                    <option value="">Selecione</option>
                                                    @foreach($stats as $state)
                                                        <option value="{{ $state->id }}">{{ $state->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Estado</label>
                                                <br>
                                                <select name="ID_CIDADE">
                                                    <option value="">Selecione</option>
                                                    @foreach($cities as $city)
                                                        <option value="{{ $city->id }}">{{ $city->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>BAIRRO</label>
                                                <input type="text" class="form-control" placeholder="Bairro" name="FUNC_BAIRRO">
                                            </div>
                                        </div>
                                                                
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CEP</label>
                                                <input type="number" class="form-control" placeholder="CEP" name="FUNC_CEP">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Número</label>
                                                <input type="number" class="form-control" placeholder="Número da Casa" name="FUNC_NUMERO_CASA">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Admissão</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_ADMISSAO">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Demissão</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_DEMISSAO">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cargo</label>
                                                <input type="text" class="form-control"  placeholder="Cargo/Função" name="FUNC_CARGO">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Formação</label>
                                                <input type="text" class="form-control"  placeholder="Formação ou Escolaridade" name="FUNC_FORMACAO">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <br><br>
                                        <div align="center">
                                            <button type="submit" class="btn btn-info btn-fill">Cadastrar Funcionário</button>
                                            <input style="margin-left:10%; width: 150px;" type="submit" name="" value="Cancelar" class="btn btn-info btn-danger" >
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