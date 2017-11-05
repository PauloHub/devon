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
                                                <h4 class="title">Vizualisação da ficha do doador</h4>
                                            </li>
                                            <li style="list-style-type:none;">
                                                <p class="category">Ficha do doador: <b>{{$donor->DOAD_NOME}}</b></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul>
                                        <li style="list-style-type:none; text-align: right; margin-right: 8%;">
                                            <a href="{{ url('/list_donor') }}" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Doadores</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">

                                @if(session('success'))
                                    <p class="alert-success" align="center">
                                    {{session('success')}} </p>
                                @endif

                                <form>
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo" name="DOAD_NOME" value="{{$donor->DOAD_NOME}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="text" class="form-control" placeholder="CPF" name="DOAD_CPF" maxlength="11" value="{{$donor->DOAD_CPF}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone 1</label>
                                                <input type="text" class="form-control" placeholder="Telefone" name="DOAD_TEL_1" maxlength="15" value="{{$donor->DOAD_TEL_1}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone 2</label>
                                                <input type="text" class="form-control" placeholder="Telefone" name="DOAD_TEL_2" maxlength="15" value="{{$donor->DOAD_TEL_2}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="DOAD_EMAIL" value="{{$donor->DOAD_EMAIL}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bairro</label>
                                                <input type="text" class="form-control" placeholder="Bairro" name="DOAD_BAIRRO" value="{{$donor->DOAD_BAIRRO}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Quant. de Doação</label>
                                                <input type="int" class="form-control" name="DOAD_QUANT_DOAC" value="{{$donor->DOAD_QUANT_DOAC}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Endereço"  name="DOAD_ENDE" value="{{$donor->DOAD_ENDE}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <br>
                                            <select name="FK_DOAD_ESTD" id="id_estd" class="form-control state_city" disabled>
                                                <option value="">Selecione</option>
                                                @foreach($stats as $state)
                                                    @if($state->ESTD_ID == $donor->FK_DOAD_ESTD)
                                                        <option value="{{ $state->ESTD_ID }}" selected>{{ $state->ESTD_DESC }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <br>
                                                <select name="FK_DOAD_CIDADE" id="id_cidade" class="form-control city_state" disabled>
                                                    <option value="">Selecione</option>
                                                    @foreach($cities as $city)
                                                        @if($city->CIDADE_ID == $donor->FK_DOAD_CIDADE)
                                                            <option value="{{ $city->CIDADE_ID }}" selected>{{ $city->CIDADE_DESC }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                                                
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CEP</label>
                                                <input type="text" class="form-control" placeholder="CEP" name="DOAD_CEP" maxlength="8" value="{{$donor->DOAD_CEP}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Número</label>
                                                <input type="number" class="form-control" placeholder="Número da Casa" name="DOAD_NUMERO_CASA" value="{{$donor->DOAD_NUMERO_CASA}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Observação:</label>
                                                <input type="text" class="form-control" placeholder="Endereço"  name="DOAD_OBS" value="{{$donor->DOAD_OBS}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <br><br>
                                        <div align="center">
                                            <!-- <input type="submit" value="Editar Doador" name="" class="btn btn-info btn-fill"> -->
                                            <a href="{{ url('/edit_donor', $donor->ID) }}" class="btn btn-info btn-fill">
                                            <span class="glyphicon glyphicon-list"></span> Editar Doadores</a>
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
<script>
    $(document).ready(DOADtion(){
        $(document).on('change', ' .state_city', DOADtion(){
           //console.log("mudou!");

            var estd_uf = $(this).val();
            //console.log(estd_uf);

            var div = $(this).parents();

            var op=" ";

            $.ajax({
                type: 'get',
                url: '{!!URL::to('find_cities')!!}', 
                data:{'uf':estd_uf},
                success:DOADtion(data){
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
                error:DOADtion(){

                }
            });

        } );
    } );
</script>

@endsection