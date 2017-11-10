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
                                                <p class="category">Ficha de Cadastro de Crianças no Sistema</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul>
                                        <li style="list-style-type:none; text-align: right; margin-right: 8%;">
                                            <a href="{{ url('/list_child') }}" class="btn btn-primary btn-lg">
                                                <span class="glyphicon glyphicon-list"></span> Listar Crianças</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="table-position">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th class="col-md-2">Nome da Criança</th>
                                            <td>{{$crianca->CRIA_NOME}}</td>

                                        </tr>
                                        <tr>
                                            <th class="col-md-3">Data de Nascimento</th>
                                            <td>{{date('d/m/Y', strtotime($crianca->CRIA_DTA_NASC))}}</td>
                                            
                                        </tr>
                                        <tr>
                                            <th>Estado</th>
                                            <td>{{$crianca->FK_CRIA_ESTD}}</td>
                                        </tr>
                                        <tr>
                                            <th>Cidade</th>
                                            <td>{{$crianca->FK_CRIA_CIDADE}}</td>
                                        </tr>
                                        <tr>
                                            <th>Certidão de Nascimento</th>
                                            <td>{{$crianca->CRIA_CERT_NUM}}</td>
                                        </tr>
                                        <tr>
                                            <th>Livro</th>
                                            <td>{{$crianca->CRIA_CERT_LIVR}}</td>
                                        </tr> 
                                        <tr>
                                            <th>Folha</th>
                                            <td>{{$crianca->CRIA_CERT_FOLH}}</td>
                                        </tr>
                                        <tr>
                                            <th>Raça</th>
                                            @foreach($racas as $raca)
                                                    @if($raca->RACA_ID == $crianca->FK_RACA_ID)
                                                        <td>{{$raca->RACA_DESCRICAO}}</td>
                                                     @endif
                                             @endforeach
                                        </tr>
                                        <tr>
                                            <th>Sexo</th>
                                            <td><?= $crianca->CRIA_SEXO = ($crianca->CRIA_SEXO == 'M' ? 'Masculino' : 'Feminino'); ?> </td>
                                        </tr>


                                    </table>
                                </div>

                                <div class="row">
                                    <br><br>
                                    <div align="center" >
                                        <input style="margin-left:auto:; width: 150px;" type="button" name="" value="Voltar" class="btn btn-info btn-danger" onClick="JavaScript: window.history.back();">
                                    </div>
                                    <br>
                                </div>
                            </div> 
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection