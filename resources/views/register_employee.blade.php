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
                                            <a href="{{ url('/list_employee') }}" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Funcionários</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">

                                @if(session('success'))
                                    <p class="alert-success">
                                    {{session('success')}} </p>
                                @endif

                                <form action="{{ url('/register_employee') }}" method="POST">
                                    {{csrf_field()}}
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
                                                <input type="text" class="form-control" placeholder="RG" name="FUNC_RG">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="text" class="form-control" placeholder="CPF" name="FUNC_CPF">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Conta</label>
                                                <input type="text" class="form-control" placeholder="Conta" name="FUNC_CONTA">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="text" class="form-control" placeholder="Telefone" name="FUNC_TEL">
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
                                                <select name="FK_FUNC_ESTD" id="id_estd" class="form-control state_city">
                                                    <option value="">Selecione</option>
                                                    @foreach($stats as $state)
                                                        <option value="{{ $state->ESTD_UF }}">{{ $state->ESTD_DESC }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <br>
                                                <select name="FK_FUNC_CIDADE" id="id_cidade" class="form-control city_state">
                                                    <option value="">Selecione</option>
                                                    @foreach($cities as $city)
                                                        <option value="{{ $city->CIDADE_DESC }}">{{ $city->CIDADE_DESC }}</option>
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
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Cargo</label>
                                                <input type="text" class="form-control"  placeholder="Cargo" name="FUNC_CARGO">
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
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <br>
                                                <select name="FUNC_STATUS" class="form-control">
                                                    <option value="">Selecione</option>                                                    
                                                        <option value="1">Ativo</option>
                                                        <option value="0">Inativo</option>                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <br><br>
                                        <div align="center">
                                            <input type="submit" value="Cadastrar Funcionário" name="" class="btn btn-info btn-fill">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('change', ' .state_city', function(){
           //console.log("mudou!");

            var estd_uf = $(this).val();
            //console.log(estd_uf);

            var div = $(this).parents();

            var op=" ";

            $.ajax({
                type: 'get',
                url: '{!!URL::to('find_cities')!!}', 
                data:{'uf':estd_uf},
                success:function(data){
                    //console.log('com sucesso!');
                    console.log(data);
                    //console.log(data.length);

                    op+='<option value="0" selected disabled>Selecione a cidade</option>';
                    for(var i=0; i<data.length; i++){
                        op+='<option value=" '+data[i].CIDADE_DESC+' "> '+data[i].CIDADE_DESC+'</option>';
                    }     

                    div.find('.city_state').html(" ");
                    div.find('.city_state').append(op);

                },
                error:function(){

                }
            });

        } );
    } );
</script>

@endsection