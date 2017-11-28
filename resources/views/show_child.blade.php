@extends('layouts.app')
@extends('layouts.menu')
@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(function(){
      $('section#hide_section article div.btn').click(function(){
        $(this).siblings('div.row').slideToggle();        
    });  
  });
</script>

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
                                <div class="content">
                                    @if(session('success'))
                                        <p class="alert-success" align="center">
                                        {{session('success')}} </p>
                                    @endif

                                    <form action="{{ url('/register_child') }}" method="POST">
                                        {{csrf_field()}}

                                        <section id="hide_section" >
                                            <article>
                                               <div class="btn func">1. Equipe Técnica Responsável pelo Acolhimento</div>

                                               <div class="row">

                                               <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Conselho Tutelar</label><br>
                                                        <input type="text" class="form-control" value="{{$acmt->ACMT_CONSELHO}}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Conselheiro Responsável</label><br>
                                                        <input type="text" class="form-control" value="{{$acmt->ACMT_CONSELHEIRO}}" disabled>
                                                    </div>
                                                </div> 
                                            </div>
                                        </article>
                                    </section><br>

                                    <section id="hide_section" >
                                        <article>
                                           <div class="btn func">2. Identificação da Criança ou Adolescente</div>

                                           <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nome da Criança</label>
                                                    <input type="text" class="form-control" placeholder="Nome da criança" name="CRIA_NOME" value="{{$crianca->CRIA_NOME}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Estado</label><br>
                                                    <select name="FK_CRIA_ESTD" id="state_city" class="form-control state_city " disabled>                                                        
                                                        <option value="">{{ $crianca->FK_CRIA_ESTD }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Cidade</label><br>
                                                    <select name="FK_CRIA_CIDADE" id="city_state" class="form-control city_state " disabled>                                                        
                                                        <option value="">{{ $crianca->FK_CRIA_CIDADE }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data de Nascimento</label>
                                                    <input type="date" class="form-control"  name="CRIA_DTA_NASC" value="{{$crianca->CRIA_DTA_NASC}}" disabled>
                                                </div>    
                                            </div>
                                            <div class="col-md-1 input_number">
                                                <div class="form-group">
                                                    <label>Idade</label>
                                                    <input type="number" class="form-control" placeholder="00" name="CRIA_IDADE_EST" value="{{$crianca->CRIA_IDADE_EST}}" disabled>                                                
                                                </div>    
                                            </div>
                                        </div>  
                                        
                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Certidão de Nascimento</label>
                                                    <input type="number" class="form-control" placeholder="Nº Certidão" name="CRIA_CERT_NUM" value="{{$crianca->CRIA_CERT_NUM}}" disabled>
                                                </div>
                                            </div>                                        
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Livro</label>
                                                    <input type="text" class="form-control" placeholder="Livro" name="CRIA_CERT_LIVR" value="{{$crianca->CRIA_CERT_LIVR}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Folha</label>
                                                    <input type="text" class="form-control" placeholder="Folha" name="CRIA_CERT_FOLH" value="{{$crianca->CRIA_CERT_FOLH}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Raça/Cor</label><br>
                                                    <select name="FK_RACA_ID" class="form-control" disabled>                                                    
                                                        <option value="">{{ $raca_crianca}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">       

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Sexo</label><br/>                           
                                                    <div class="row">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;                                                        
                                                        <?php $crianca->CRIA_SEXO = ($crianca->CRIA_SEXO == 'M' ? 'Masculino' : 'Feminino'); ?>
                                                        <label class="radio-inline"><input type="radio" name="CRIA_SEXO" value="F" checked disabled />{{$crianca->CRIA_SEXO}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </section><br> 

                                <section id="hide_section" >
                                   <article>
                                       <div class="btn func">3. Situação de Acolhimento</div>

                                       <div class="row"> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                
                                                <label>Foro Vara da Infância e Juventude foi comunicado no prazo de 24 horas?</label><br/>                                                
                                                <?php $acmt->ACMT_VARA_INFAN = ($acmt->ACMT_VARA_INFAN == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_VARA_INFAN" value="1" checked disabled />{{$acmt->ACMT_VARA_INFAN}}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Data Acolhimento</label><br>
                                                <input type="date" class="form-control"  name="ACMT_DTA_ACOLHI" value="{{$acmt->ACMT_DTA_ACOLHI}}" disabled=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Meio de Chegada</label><br>
                                                <select name=""  class="form-control col-md-2" disabled>                                                    
                                                    <option value="">{{$meio_de_chegada->QEPI_DESCRICAO}}</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>O foro/vara da Infância e Juventude confirmou a medida de acolhimento, expediu guia e encaminhou todos os relatórios necessários?</label><br/>
                                                <?php $acmt->ACMT_VARA_RELAT = ($acmt->ACMT_VARA_RELAT == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_VARA_RELAT" value="1" checked disabled />{{$acmt->ACMT_VARA_RELAT}}</label>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Sugestões</label><br/>
                                                <textarea class="col-md-10" name="ACMT_VARA_OBS" id="campo_sugestoes" disabled>{{$acmt->ACMT_VARA_OBS}}</textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row"> 

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Há proximidade entre o serviço de acolhimento e a residência dos pais/responsável legal?</label><br/>
                                                <?php $acmt->ACMT_PROX_RESIDENCIA = ($acmt->ACMT_PROX_RESIDENCIA == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_PROX_RESIDENCIA" value="1" disabled checked />{{$acmt->ACMT_PROX_RESIDENCIA}}</label>
                                            </div>
                                        </div> 

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Acolhimentos anteriores?</label><br/>
                                                <?php $acmt->ACMT_ACOLH_ANT = ($acmt->ACMT_ACOLH_ANT == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_ACOLH_ANT" value="1" disabled checked />{{$acmt->ACMT_ACOLH_ANT }}</label>
                                            </div>
                                        </div> 

                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Motivos e tempo de permanência no(s) serviço(s) de acolhimento(s) anterior(es)</label><br/>
                                                <textarea class="col-md-10" name="ACMT_MOT_ACOLHM_ANT" disabled>{{$acmt->ACMT_MOT_ACOLHM_ANT}}</textarea>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Higiene/Sinais de Violência</label><br/>
                                                <textarea class="col-md-10" name="ACMT_HIG_VIOLENCIA" disabled>{{$acmt->ACMT_HIG_VIOLENCIA}}</textarea>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Reações e Comportamento</label><br/>
                                                <textarea class="col-md-10" name="ACMT_REA_COMP" disabled>{{$acmt->ACMT_REA_COMP}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </article>
                            </section><br>

                            <section id="hide_section" >
                                <article>
                                    <div class="btn func">4. Situação Jurídica</div>   

                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Número do processo no Foro/Vara da Infância e Juventude</label>
                                                <input type="number" class="form-control" placeholder="Nº processo" name="ACMT_VARA_NUM_PROCESS" value="{{$acmt->ACMT_VARA_NUM_PROCESS}}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Proibição judicial de visitas</label><br>
                                                <select name=""  class="form-control col-md-2" disabled>
                                                    <option value="">{{$proibicao_judicial->QEPI_DESCRICAO}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Situação do poder familiar</label><br>
                                                <select name=""  class="form-control col-md-2" disabled>
                                                    <option value="">{{$situacao_poder_familiar->QEPI_DESCRICAO}}</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>A criança e/ou adolescente conta com defensor público/advogado?</label><br/>
                                                <?php $acmt->ACMT_DFPUB = ($acmt->ACMT_DFPUB == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_DFPUB" value="1" checked disabled />{{$acmt->ACMT_DFPUB}}</label>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>A família conta com defensor público/advogado?</label><br/>
                                                <?php $acmt->ACMT_DFPUB_FAM = ($acmt->ACMT_DFPUB_FAM == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_DFPUB_FAM" value="1" checked disabled />{{$acmt->ACMT_DFPUB_FAM}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section><br>

                            <section id="hide_section" >
                                <article>
                                   <div class="btn func">5. Grupo de irmãos</div>                            

                                   @for($i=0; $i<$qt_cria_ext; $i++)
                                           <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nome da Criança Externa: {{$i+1}}</label>
                                                    <input type="text" class="form-control" value="{{$criancas_externas[$i]->CRIA_EXTR_NOME}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nome do Responsável</label>
                                                    <input type="text" class="form-control" value="{{$criancas_externas[$i]->CRIA_EXTR_FAM_NOME}}" disabled>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nome da Instituição de Acolhimento</label>
                                                    <input type="text" class="form-control" value="{{$criancas_externas[$i]->CRIA_EXTR_NOME_INSTI}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Endereço da(s) instituição(ões)</label>
                                                    <input type="text" class="form-control" value="{{$criancas_externas[$i]->CRIA_EXTR_END_INSTI}}" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data de Nascimento</label>
                                                    <input type="date" class="form-control" value="{{$criancas_externas[$i]->CRIA_EXTR_DATA_NASC}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Contato</label>
                                                    <input type="number" class="form-control" value="{{$criancas_externas[$i]->CRIA_EXTR_FAM_CONT}}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="height: 10px;  border: 0;  box-shadow: 0 10px 10px -10px #8c8b8b inset;"> <br>
                                     @endfor
                                </article>
                            </section><br>

                            <section id="hide_section" >
                                <article>
                                    <div class="btn func">6. Motivos do acolhimento institucional ou familiar</div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="form-group">  
                                                    <label>Falta de recursos materias por parte dos pais e/ou responsáveis</label>  
                                                    <div class="row">
                                                        <div class="col-md-5">  
                                                            <ul>
                                                                @for($i=0; $i<$qt_falta_recurso_resp ; $i++)
                                                                <li style="list-style-type:none;">          
                                                                    <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $falta_recurso_resp[$i]->QEPI_DESCRICAO}}</label>
                                                                </li>
                                                                @endfor
                                                            </ul>    
                                                        </div>  
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-11">
                                                    <div class="form-group">  
                                                        <label>Orfandade ou abandono, sem identificação de família extensa ou pessoas significativas da rede de apoio</label> 
                                                        <div class="row">
                                                            <div class="col-md-5">  
                                                                <ul> 
                                                                   @for($i=0; $i<$qt_tipo_orfn_aband; $i++)
                                                                    <li style="list-style-type:none;">          
                                                                        <label class="checkbox-inline"><input type="checkbox" checked disabled />{{$tipo_orfn_aband[$i]->QEPI_DESCRICAO}}</label>
                                                                    </li>
                                                                     @endfor 
                                                                </ul>  
                                                            </div>                                                             
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row">
                                                <div class="col-md-11">
                                                    <div class="form-group">  
                                                        <label>Ausência temporária de pais e/ou responsáveis, sem identificação de família extensa ou pessoas significativas da rede social de apoio</label> 
                                                        <div class="row">
                                                            <div class="col-md-5">  
                                                                <ul> 
                                                                   @for($i=0; $i<$qt_ausencia_temp_resp; $i++)
                                                                    <li style="list-style-type:none;">          
                                                                        <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $ausencia_temp_resp[$i]->QEPI_DESCRICAO }}</label>
                                                                    </li>
                                                                     @endfor 
                                                                </ul>  
                                                            </div>                                                             
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-11">
                                                    <div class="form-group">  
                                                        <label>Condições desfavoráveis dos pais e/ou responsáveis para cuidar do(s) dos filho(s)</label> 
                                                        <div class="row">
                                                            <div class="col-md-5">  
                                                                <ul> 
                                                                   @for($i=0; $i<$qt_cond_desfa_resp; $i++)
                                                                    <li style="list-style-type:none;">          
                                                                        <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $cond_desfa_resp[$i]->QEPI_DESCRICAO }}</label>
                                                                    </li>
                                                                     @endfor 
                                                                </ul>  
                                                            </div>                                                             
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-11">
                                                    <div class="form-group">  
                                                        <label>Situação das crianças e dos adolescentes</label> 
                                                        <div class="row">
                                                            <div class="col-md-5">  
                                                                <ul> 
                                                                   @for($i=0; $i<$qt_crian_adoles_sit; $i++)
                                                                    <li style="list-style-type:none;">          
                                                                        <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $crian_adoles_sit[$i]->QEPI_DESCRICAO}}</label>
                                                                    </li>
                                                                     @endfor 
                                                                </ul>  
                                                            </div>                                                             
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </section><br>

                                    <section id="hide_section" >
                                        <article>
                                            <div class="btn func">7. Documentação</div> 

                                            <div class="row">

                                                <div class="col-md-11">
                                                    <div class="form-group">  
                                                        <label>Documentos apresentados ao serviço no ato do acolhimento Institucional familiar</label>
                                                        <div class="row">  
                                                            <div class="col-md-5">
                                                                <ul>    
                                                                    @for($i=0; $i<$qt_tipo_documento; $i++)
                                                                        <li style="list-style-type:none;">          
                                                                            <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $tipo_documento[$i]->TPDO_DESC}}</label>
                                                                        </li>
                                                                     @endfor
                                                                </ul>    
                                                            </div>  
                                                           
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-11">
                                                    <div class="form-group">  
                                                        <label>Documentação a ser providenciada</label><br>
                                                        <div class="col-md-5">
                                                            <ul>                                                
                                                                @for($i=0; $i<$qt_tipo_documento2; $i++)
                                                                    <li style="list-style-type:none;">          
                                                                        <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $tipo_documento2[$i]->TPDO_DESC}}</label>
                                                                    </li>
                                                                @endfor
                                                            </ul>    
                                                        </div>  

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </section><br>

                                     <section id="hide_section" >
                                        <article style="padding-left: 15px;">
                                            <div class="btn func">8. Educação</div>

                                            <div class="row"> 

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Ano escolar atual</label><br>
                                                        <input type="text" class="form-control" name="ACMT_ANO_ESCO" value="{{$acmt->ACMT_ANO_ESCO}}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Frequência</label><br>
                                                        <input type="text" class="form-control" name="ACMT_FREQ_ESC" value="{{$acmt->ACMT_FREQ_ESC}}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Rendimento Escolar</label><br>
                                                        <input type="text" class="form-control" name="ACMT_REND_ESC" value="{{$acmt->ACMT_REND_ESC}}" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label>Como a criança percebe ou vivencia sua relação com a escola?</label><br/>
                                                        <textarea class="col-md-10" name="ACMT_VIV_REL_ESC" disabled>{{$acmt->ACMT_VIV_REL_ESC}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </section><br>

                                    <section id="hide_section" >
                                        <article style="padding-left: 15px;">
                                            <div class="btn func">9. Saúde</div>

                                            <div class="row">

                                               <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Carteira de vacinação</label><br>
                                                    <input type="text" class="form-control" name="CSAU_CART_VAC" value="{{$cria_saude->CSAU_CART_VAC}}" disabled>
                                                </div>
                                            </div> 

                                            <div class="col-md-11">
                                                <div class="form-group">  
                                                    <label>Problemas de saúde física e mental</label><br>
                                                    <div class="col-md-5">
                                                        <ul>                                                
                                                             @for($i=0; $i<$qt_prob_saude; $i++)
                                                                    <li style="list-style-type:none;">          
                                                                        <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $prob_saude[$i]->QEPI_DESCRICAO}}</label>
                                                                    </li>
                                                            @endfor
                                                        </ul>    
                                                    </div>  
                                                   
                                                </div>    
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Especificar o diagnóstico e a data de sua realização</label><br/>
                                                    <textarea class="col-md-10" name="CSAU_DIAG_MED" disabled>{{$cria_saude->CSAU_DIAG_MED}}</textarea>
                                                </div>
                                            </div> 

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Data da Realização</label>
                                                    <input type="date" class="form-control" name="CSAU_DTA_DIAG_MED" value="{{$cria_saude->CSAU_DTA_DIAG_MED}}" disabled>
                                                </div>    
                                            </div> 
                                        </div>


                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="form-group">  
                                                    <label>Problemas de saúde física e mental</label><br>
                                                    <div class="col-md-5">
                                                        <ul>                                                
                                                         @for($i=0; $i<$qt_prob_saude2; $i++)
                                                            <li style="list-style-type:none;">          
                                                                <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $prob_saude2[$i]->QEPI_DESCRICAO}}</label>
                                                            </li>
                                                        @endfor
                                                        </ul>    
                                                    </div>  
                                                   
                                                </div>    
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Acompanhamentos médicos necessários</label><br/>
                                                    <textarea class="col-md-10" name="CSAU_ACOP_MED" disabled>{{$cria_saude->CSAU_ACOP_MED}}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Uso contínuo de medicação?</label><br/>
                                                    <?php $cria_saude->CSAU_USO_MED = ($cria_saude->CSAU_USO_MED == '1' ? 'Sim' : 'Não'); ?>
                                                    <label class="radio-inline"><input type="radio" name="CSAU_USO_MED" value="1" disabled checked />{{$cria_saude->CSAU_USO_MED}}</label>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Quais?</label><br/>
                                                    <textarea class="col-md-10" name="CSAU_USO_MED_ESP" disabled>{{$cria_saude->CSAU_USO_MED_ESP}}</textarea>
                                                </div>
                                            </div>  
                                        </div>
                                    </article>
                                </section><br>

                                <section id="hide_section" >
                                    <article style="padding-left: 15px;">
                                        <div class="btn func">10. Autonomia da criança, do adolescente e do jovem</div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Teve acesso a informações sobre sua história de vida, familiar e motivos de acolhimento; considerando-se o grau de desenvolvimento?</label><br/>
                                                    <?php $acmt->ACMT_HIST_FAMI = ($acmt->ACMT_HIST_FAMI == '1' ? 'Sim' : 'Não'); ?>
                                                    <label class="radio-inline"><input type="radio" name="ACMT_HIST_FAMI" value="1" checked disabled/>{{$acmt->ACMT_HIST_FAMI}}</label>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Se não, Por quê?</label><br/>
                                                    <textarea class="col-md-10" name="ACMT_HIST_FAMI_DES" disabled>{{$acmt->ACMT_HIST_FAMI_DES}}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Emite sua opinião quanto às decisões que dizem respeito à sua vida cotidiana no serviço de acolhimento e à sua situação familiar?</label><br/>
                                                    <?php $acmt->ACMT_OPIN_DECI = ($acmt->ACMT_OPIN_DECI == '1' ? 'Sim' : 'Não'); ?>
                                                    <label class="radio-inline"><input type="radio" name="ACMT_OPIN_DECI" value="1" checked disabled />{{$acmt->ACMT_OPIN_DECI }}</label>
                                                </div>
                                            </div>  
                                        </div>


                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Quais?</label><br/>
                                                    <textarea class="col-md-10" name="ACMT_OPIN_DEC_DES" disabled>{{$acmt->ACMT_OPIN_DEC_DES }}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="form-group">  
                                                    <label>Sua opinião reflete sua preferência em:</label>  
                                                    <div class="row">
                                                        <div class="col-md-5">  
                                                            <ul>
                                                                @for($i=0; $i<$qt_opiniao_vida; $i++)
                                                                    <li style="list-style-type:none;">          
                                                                        <label class="checkbox-inline"><input type="checkbox" checked disabled />{{ $opiniao_vida[$i]->QEPI_DESCRICAO}}</label>
                                                                    </li>
                                                                 @endfor                                                               
                                                            </ul>    
                                                        </div>                                                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </section><br>

                                <section id="hide_section" >
                                    <article style="padding-left: 15px;">
                                        <div class="btn func">11. Observações</div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Desenvolvimento Físico</label><br/>
                                                    <textarea class="col-md-10" name="ACMT_DESEN_FISIC" disabled>{{$acmt->ACMT_DESEN_FISIC}}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Desenvolvimento Cognitivo</label><br/>
                                                    <textarea class="col-md-10" name="ACMT_DESEN_COGNI" disabled>{{$acmt->ACMT_DESEN_COGNI}}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Desenvolvimento Sócio Emocional</label><br/>
                                                    <textarea class="col-md-10" name="ACMT_DESEN_SOCIO_EMO" disabled>{{$acmt->ACMT_DESEN_SOCIO_EMO}}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Vida Cotidiana</label><br/>
                                                    <textarea class="col-md-10" name="ACMT_VDA_COT" disabled>{{$acmt->ACMT_VDA_COT}}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Outras Informações</label><br/>
                                                    <textarea class="col-md-10" name="ACMT_OUT_INFO" disabled>{{$acmt->ACMT_OUT_INFO}}</textarea>
                                                </div>
                                            </div>  
                                        </div>
                                    </article>
                                </section><br>

                                <section id="hide_section" >
                                    <article style="padding-left: 15px;">
                                        <div class="btn func">12. Identificações dos Pais ou Responsáveis</div>

                                        <?php $j=0 //incremento para pegar cada grau de parentesco de cada responsável ?>
                                        @for($i=0; $i<$qt_crianca_resp; $i++)

                                        <div class="row">         
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nome do Responsável</label>
                                                    <input type="text" class="form-control" value="{{$crianca_resp[$i]->RESP_NOME}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Grau de Parenteco</label><br>                                                
                                                    <input type="text" class="form-control"  value="{{$grau_parentesco[$j]->GRPA_NOME}}" disabled>
                                                    <?php $j++ ?>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row"> 

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Estado</label><br>
                                                    <input type="text" class="form-control" value="{{$crianca_resp[$i]->FK_RESP_ESTD}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Cidade</label><br>
                                                    <input type="text" class="form-control" value="{{$crianca_resp[$i]->FK_RESP_CIDADE}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Endereço</label>
                                                    <input type="text" class="form-control" placeholder="Endereço" name="RESP_END_CSA[]" value="{{$crianca_resp[$i]->RESP_END_CSA}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control" placeholder="Bairro" name="RESP_BAIRRO[]" value="{{$crianca_resp[$i]->RESP_BAIRRO}}" disabled>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Data de Nascimento</label>
                                                    <input type="date" class="form-control"  name="RESP_DT_NASCI[]" value="{{$crianca_resp[$i]->RESP_DT_NASCI}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>RG</label>
                                                    <input type="number" class="form-control" placeholder="RG" name="RESP_RG[]" value="{{$crianca_resp[$i]->RESP_RG}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>CPF</label>
                                                    <input type="number" class="form-control" placeholder="CPF" name="RESP_CPF[]" value="{{$crianca_resp[$i]->RESP_CPF}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Contato</label>
                                                    <input type="number" class="form-control" placeholder="Contato" name="RESP_TEL[]" value="{{$crianca_resp[$i]->RESP_TEL}}" disabled>
                                                </div>
                                            </div>

                                        </div>                                    

                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Ponto de Referência</label>
                                                    <input type="text" class="form-control" placeholder="Ponto de referência" name="RESP_PONT_REF[]" value="{{$crianca_resp[$i]->RESP_PONT_REF}}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Profissão/trabalho</label>
                                                    <input type="text" class="form-control" placeholder="Profissão/Trabalho" name="RESP_PROF[]" value="{{$crianca_resp[$i]->RESP_PROF}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Endereço do trabalho</label>
                                                    <input type="text" class="form-control" placeholder="Endereço do Trarbalho" name="RESP_END_TRAB[]" value="{{$crianca_resp[$i]->RESP_END_TRAB}}" disabled>
                                                </div>
                                            </div>
                                        </div>  

                                        <div class="row" id="divResponsavelList">
                                        </div>
                                        <hr style="height: 10px;  border: 0;  box-shadow: 0 10px 10px -10px #8c8b8b inset;"> <br>
                                        
                                       @endfor
                                   </article>
                               </section><br>

                                <section id="hide_section" >
                                <article style="padding-left: 15px;">
                                    <div class="btn func">13. Orientação Familiar - Tipo 1</div>

                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">  
                                                <label>OBS - Identificar em cada instituição ou serviço, o nome e telefone do profissional responsável.  Informe sobre quais as ações já foram executadas, se há continuidade no acompanhamento e a existência de pareceres, relatórios, etc. <br> <br> 
                                                    Quais instituições e os serviços que prestaram ou que estão prestando orientação ao grupo familiar?<br></label><br><br>
                                                    
                                                    @if($orientacao_tipo_1->ORNT_CONS_TUT == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name="ORNT_CONS_TUT" value="1" checked disabled />Conselho Tutelar</label><br>
                                                        <label>Observação</label>
                                                        <input type="text" class="form-control"  name="ORNT_CONS_TUT_OBS" value="{{$orientacao_tipo_1->ORNT_CONS_TUT_OBS}}" disabled> <br>
                                                    @endif

                                                    @if($orientacao_tipo_1->ORNT_DPCA == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name="ORNT_DPCA" value="1" checked disabled />Delegacia de Proteção à Criança e ao Adolescente - DPCA</label><br>
                                                        <label>Observação</label>
                                                        <input type="text" class="form-control"  name="ORNT_DPCA_OBS" value="{{$orientacao_tipo_1->ORNT_DPCA_OBS}}" disabled><br>
                                                    @endif

                                                    @if($orientacao_tipo_1->ORNT_DPCA == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name="ORNT_DELEGACIA_COMUM" value="1" checked disabled />Delegacias comuns e especializadas</label><br>
                                                        <label>Observação</label>
                                                        <input type="text" class="form-control"  name="DELEGACIA_COMUM_OBS" value="{{$orientacao_tipo_1->ORNT_DPCA_OBS}}" disabled><br>
                                                    @endif

                                                    @if($orientacao_tipo_1->ORNT_ASSISTENCIA_SOCIAL == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name="ORNT_ASSISTENCIA_SOCIAL" value="1" checked disabled />Assitência Social</label><br>
                                                        <label>Observação</label>
                                                        <input type="text" class="form-control"  name="ORNT_ASSISTENCIA_SOCIAL_OBS" value="{{$orientacao_tipo_1->ORNT_ASSISTENCIA_SOCIAL_OBS}}" disabled><br>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Proteção Social Básica</label><br/>
                                                    <textarea class="col-md-10" name="ORNT_PROTECAO_SOCIAL_BASICA" disabled>{{$orientacao_tipo_1->ORNT_PROTECAO_SOCIAL_BASICA}}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Proteção Social Especial</label><br/>
                                                    <textarea class="col-md-10" name="ORNT_PROTECAO_SOCIAL_ESPECIAL" disabled>{{$orientacao_tipo_1->ORNT_PROTECAO_SOCIAL_ESPECIAL}}</textarea>
                                                </div>
                                            </div>  
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="form-group"> 
                                                   
                                                    @if($orientacao_tipo_1->ORNT_OUTROS_SERVICOS == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name=" ORNT_OUTROS_SERVICOS" value=" 1" checked disabled />Outros Serviços de apoio sócio-familiar</label><br>
                                                        <label>Especifique</label>
                                                        <input type="text" class="form-control"  name="ORNT_OUTROS_SERVICOS_OBS" value="{{$orientacao_tipo_1->ORNT_OUTROS_SERVICOS_OBS}}" disabled> <br>
                                                    @endif

                                                    @if($orientacao_tipo_1->ORNT_SAUDE == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name="ORNT_SAUDE" value="1" checked disabled />Saúde</label><br>
                                                        <label>Especifique</label>
                                                        <input type="text" class="form-control"  name="ORNT_SAUDE_OBS" value="{{$orientacao_tipo_1->ORNT_SAUDE_OBS}}" disabled><br>
                                                    @endif

                                                    @if($orientacao_tipo_1->ORNT_EDUCACAO == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name="ORNT_EDUCACAO" value="1" checked disabled />Educação</label><br>
                                                        <label>Especifique</label>
                                                        <input type="text" class="form-control"  name="ORNT_EDUCACAO_OBS" value="{{$orientacao_tipo_1->ORNT_EDUCACAO_OBS}}" disabled><br>
                                                    @endif

                                                    @if($orientacao_tipo_1->ORNT_HABITACAO == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name="ORNT_HABITACAO" value="1" checked disabled />Habitação</label><br>
                                                        <label>Especifique</label>
                                                        <input type="text" class="form-control"  name="ORNT_HABITACAO_OBS" value="{{$orientacao_tipo_1->ORNT_HABITACAO_OBS}}" disabled><br>
                                                    @endif

                                                    @if($orientacao_tipo_1->ORNT_PROFISSIO_TRAB == 1)
                                                        <label class="checkbox-inline"><input type="checkbox" name="ORNT_PROFISSIO_TRAB" value="1" checked disabled />Profissionalização/Trabalho</label><br>
                                                        <label>Especifique</label>
                                                        <input type="text" class="form-control"  name="ORNT_PROFISSIO_TRAB_OBS" value="{{$orientacao_tipo_1->ORNT_HABITACAO_OBS}}" disabled><br>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </section><br>

                                <section id="hide_section" >
                                    <article style="padding-left: 15px;">
                                        <div class="btn func">13.2 Orientação Familiar - Tipo 2 </div>

                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="form-group">  
                                                    <label>OBS - Identificar os motivos para ser atendido por cada serviço. Em caso da impossibilidade do atendimento, registrar o impedimento: falta de serviços, falta de vagas, atendimento inadequado, falta de adesão da família, distância dos serviços, dentre outros. <br> <br> 
                                                        Quais as instituições e os serviços que devem prestar atendimento a criança e/ou adolescente e a família para promover a reintegração familiar? <br></label><br><br>
                                                        
                                                        @if($orientacao_tipo_2->ORNT_CONS_TUT == 1)
                                                            <label class="checkbox-inline"><input type="checkbox" name="ORNT_CONS_TUT" value="1" checked disabled />Conselho Tutelar</label><br>
                                                            <label>Observação</label>
                                                            <input type="text" class="form-control"  name="ORNT_CONS_TUT_OBS" value="{{$orientacao_tipo_2->ORNT_CONS_TUT_OBS}}" disabled><br>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label>Proteção Social Básica</label><br/>
                                                        <textarea class="col-md-10" name="ORNT_PROTECAO_SOCIAL_BASICA" disabled>{{$orientacao_tipo_2->ORNT_PROTECAO_SOCIAL_BASICA}}</textarea>
                                                    </div>
                                                </div>  
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label>Proteção Social Especial</label><br/>
                                                        <textarea class="col-md-10" name="ORNT_PROTECAO_SOCIAL_ESPECIAL" disabled>{{$orientacao_tipo_2->ORNT_PROTECAO_SOCIAL_ESPECIAL}}</textarea>
                                                    </div>
                                                </div>  
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-11">
                                                    <div class="form-group"> 
                                                        
                                                        @if($orientacao_tipo_2->ORNT_OUTROS_SERVICOS == 1)
                                                            <label class="checkbox-inline"><input type="checkbox" name=" ORNT_OUTROS_SERVICOS" value="1" checked disabled />Outros Serviços de apoio sócio-familiar</label><br>
                                                            <label>Especifique</label>
                                                            <input type="text" class="form-control"  name="1" value="{{$orientacao_tipo_2->ORNT_OUTROS_SERVICOS_OBS}}" disabled><br>
                                                        @endif

                                                        @if($orientacao_tipo_2->ORNT_SAUDE == 1)
                                                            <label class="checkbox-inline"><input type="checkbox" name="ORNT_SAUDE" value="1" checked disabled/>Saúde</label><br>
                                                            <label>Especifique</label>
                                                            <input type="text" class="form-control"  name="ORNT_SAUDE_OBS" value="{{$orientacao_tipo_2->ORNT_SAUDE_OBS}}" disabled><br>
                                                        @endif

                                                        @if($orientacao_tipo_2->ORNT_EDUCACAO == 1)
                                                            <label class="checkbox-inline"><input type="checkbox" name="ORNT_EDUCACAO" value="1" checked disabled/>Educação</label><br>
                                                            <label>Especifique</label>
                                                            <input type="text" class="form-control"  name="ORNT_EDUCACAO_OBS" value="{{$orientacao_tipo_2->ORNT_EDUCACAO_OBS}}" disabled><br>
                                                        @endif

                                                        @if($orientacao_tipo_2->ORNT_HABITACAO == 1)
                                                            <label class="checkbox-inline"><input type="checkbox" name="ORNT_HABITACAO" value="1" checked disabled/>Habitação</label><br>
                                                            <label>Especifique</label>
                                                            <input type="text" class="form-control"  name="ORNT_HABITACAO_OBS" value="{{$orientacao_tipo_2->ORNT_HABITACAO_OBS}}" disabled><br>
                                                        @endif

                                                        @if($orientacao_tipo_2->ORNT_PROFISSIO_TRAB == 1)
                                                            <label class="checkbox-inline"><input type="checkbox" name="ORNT_PROFISSIO_TRAB" value="1" checked disabled/>Profissionalização/Trabalho</label><br>
                                                            <label>Especifique</label>
                                                            <input type="text" class="form-control"  name="ORNT_PROFISSIO_TRAB_OBS" value="{{$orientacao_tipo_2->ORNT_PROFISSIO_TRAB_OBS}}" disabled><br>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </section><br>      
                            


                                    
                        <div class="row">

                            <br><br>
                            <div align="center" >
                                <button type="submit" class="btn btn-info btn-fill">Editar Criança</button>
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




@endsection