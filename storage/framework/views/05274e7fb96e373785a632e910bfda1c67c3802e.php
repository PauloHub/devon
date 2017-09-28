<?php $__env->startSection('content'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(function(){
      $('section#hide_section article div.btn').click(function(){
        $(this).siblings('div.row').slideToggle();
        if($(this).text() == "Mostrar"){
            $(this).text("Ocultar");
        }else {
            $(this).text("Mostrar");  
        }
      });  
    });
</script>
<script> </script>

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
                                            <a href="#" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Crianças</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">

                                <!-- aqui entra as views -->

                                <form method="POST">

                                    <section id="hide_section" >
                                        <article>
                                             <div class="btn func">Ocultar</div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome da Criança</label>
                                                <input type="text" class="form-control" placeholder="Nome da criança" name="CRIA_NOME">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Conselho Tutelar</label><br>
                                                    <select name="COTL_NOME" class="form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="conselho_1">Conselho 1</option>
                                                        <option value="conselho_2">Conselho 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Conselheiro Responsável</label><br>
                                                    <select name="COTL_NOME" class="form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="conselho_1">Conselheiro 1</option>
                                                        <option value="conselho_2">Conselheiro 2</option>
                                                </select>
                                            </div>
                                        </div> 

                                    </div>

                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Estado</label><br>
                                                    <select name="FK_ESTD_ID" class="form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="estado_1">Estado 1</option>
                                                        <option value="estado_2">Estado 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cidade</label><br>
                                                    <select name="FK_MUNI_ID" class="form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="cidade_1">Cidade 1</option>
                                                        <option value="cidade_2">Cidade 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Nascimento</label>
                                                <input type="date" class="form-control"  name="CRIA_DTA_NASC">
                                            </div>    
                                        </div>
                                        <div class="col-md-1 input_number">
                                            <div class="form-group">
                                                <label>Idade</label>
                                                <input type="number" class="form-control" placeholder="00" name="CRIA_IDADE_EST">                                                
                                            </div>    
                                        </div> 

                                    </div>  
                                    
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Certidão de Nascimento</label>
                                                <input type="number" class="form-control" placeholder="Nº Certidão" name="CRIA_CERT_NUM">
                                            </div>
                                        </div>                                        
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Livro</label>
                                                <input type="text" class="form-control" placeholder="Livro" name="CRIA_CERT_LIVR">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Folha</label>
                                                <input type="text" class="form-control" placeholder="Folha" name="CRIA_CERT_FOLH">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Raça/Cor</label><br>
                                                    <select name="FK_RACA_ID"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="Raca 1">Raca 1</option>
                                                        <option value="Raca 2">Raca 2</option>
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
                                                    <label class="radio-inline"><input type="radio" name="sexo" value="m" for="Masculino" />Masculino</label>
                                                    <label class="radio-inline"><input type="radio" name="sexo" value="f" for="Feminino"/>Feminino</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <label>Foro Vara da Criança</label><br/>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <label class="radio-inline"><input type="radio" name="foro_cri" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="foro_cri" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Data Acolhimento</label><br>
                                                <input type="date" class="form-control"  name="CRIA_DTA_ACOL"> 
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Meio de Chegada</label><br>
                                                    <select name="CRIA_CHEG"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="Chegada 1">Chegada 1</option>
                                                        <option value="Chegada 2">Chegada 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            </section><br>
                                 

                             <section id="hide_section">
                                        <article>
                                             <div class="btn func">Ocultar</div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>O foro/vara da Infância e Juventude confirmou a medida de acolhimento, expediu guia e encaminhou todos os relatórios necessários?</label><br/>
                                                <label class="radio-inline"><input type="radio" name="foro_inf" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="foro_inf" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Sugestões</label><br/>
                                                <textarea class="col-md-10" name="sugestoes" id="campo_sugestoes"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row"> 

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Há proximidade entre o serviço de acolhimento e a residência dos pais/responsável lega?</label><br/>
                                                <label class="radio-inline"><input type="radio" name="ser_acol" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="ser_acol" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div> 

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Acolhimentos anteriores?</label><br/>
                                                <label class="radio-inline"><input type="radio" name="acol_ant" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="acol_ant" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div> 

                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Motivos e tempo de permanência no(s) serviço(s) de acolhimento(s) anterior(es)</label><br/>
                                                <textarea class="col-md-10" name="mot_ser_acol" id="campo_mot_ser_acol"></textarea>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Higiene/Sinais de Violência</label><br/>
                                                <textarea class="col-md-10" name="sin_vio" id="sin_vio"></textarea>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Reações e Comportamento</label><br/>
                                                <textarea class="col-md-10" name="reacoes" id="reacoes"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                     <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Número do processo no Foro/Vara da Infância e Juventude</label>
                                                <input type="number" class="form-control" placeholder="Nº processo" name="num_proc">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Proibição juducial de visitas</label><br>
                                                    <select name="proib_jud"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="proib_1">Sim, definitiva</option>
                                                        <option value="proib_2">Opção 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Situação do poder familiar</label><br>
                                                    <select name="sit_fam"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="sit_1">Situação 1</option>
                                                        <option value="sit_2">Situação 2</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Reações e Comportamento</label><br/>
                                                <textarea class="col-md-10" name="reacoes" id="reacoes"></textarea>
                                            </div>
                                        </div>  

                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>A criança e/ou adolescente conta com defensor público/advogado?</label><br/>
                                                <label class="radio-inline"><input type="radio" name="def_pub" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="def_pub" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>A família conta com defensor público/advogado?</label><br/>
                                                <label class="radio-inline"><input type="radio" name="fam_def_pub" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="fam_def_pub" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div>

                                    </div>

                                        </article>
                                    </section><br>

                                    <section id="hide_section">
                                        <article>
                                             <div class="btn func">Ocultar</div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome da Criança Externa</label>
                                                <input type="text" class="form-control" placeholder="Nome da criança externa" name="CRIA_EXT">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome do Responsável</label>
                                                <input type="text" class="form-control" placeholder="Nome do Responsável" name="CRIA_RESP">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Endereço da(s) instituição(ões)</label>
                                                <input type="text" class="form-control" placeholder="Endereço da Instituição" name="CRIA_END_INST">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data de Nascimento</label>
                                                    <input type="date" class="form-control"  name="CRIA_EXT_DTA">
                                                </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Contato</label>
                                                <input type="number" class="form-control" placeholder="Contato" name="CRIA_EXT_CONT">
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="row">

                                        <div class="col-md-11">
                                            <div class="form-group">  
                                                <label>Falta de recursos materias por parte dos pais e/ou responsáveis</label>  
                                                <div class="row">
                                                    <div class="col-md-5">  
                                                        <ul>        
                                                            <li style="list-style-type:none;">          
                                                                <label class="checkbox-inline"><input type="checkbox"  name="cond_hab" value="cond_hab"/>Condições habitacionais</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="desemp" value="desemp"/>Desemprego</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="design" value="design"/>Design Department</label>
                                                            </li>
                                                        </ul>    
                                                    </div>                                                    
                                                    <div class="col-md-6">
                                                        <ul>        
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="renda" value="renda"/>Renda Insuficiente</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="mendicancia" value="mendicancia"/>Mendicância/Situação de rua</label>
                                                            </li>
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
                                                            <li style="list-style-type:none;">                                  
                                                                <label class="checkbox-inline"><input type="checkbox"  name="morte" value="morte"/>Morte de pais e/ou responsáveis</label>
                                                            </li>
                                                        </ul>    
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul>        
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="abandono" value="abandono"/>Abandono pelos pais ou responsáveis</label>
                                                            </li>
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
                                                            <li style="list-style-type:none;">            
                                                                <label class="checkbox-inline"><input type="checkbox"  name="prisao" value="prisao"/>Prisão</label>
                                                            </li>
                                                        </ul>    
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul>        
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="saude" value="saude"/>Internação médica/problemas de saúde</label>
                                                            </li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <label>Falta de recursos materias por parte dos pais e/ou responsáveis</label><br>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <ul>        
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="cond_hab" value="cond_hab"/>Dependência Química</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="desemp" value="desemp"/>Desemprego</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="design" value="design"/>Alcoolismo</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="renda" value="renda"/>Problemas de saúde física</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="mendicancia" value="mendicancia"/>Mendicância/Situação de rua</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul>     
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="cond_hab" value="cond_hab"/>Conflitos familiares/relacionamentos violentos</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="desemp" value="desemp"/>Desemprego</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="design" value="design"/>Design Department</label>
                                                            </li>
                                                            <li style="list-style-type:none;"
                                                            ><label class="checkbox-inline"><input type="checkbox" name="renda" value="renda"/>Renda Insuficiente</label>
                                                        </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  ame="mendicancia" value="mendicancia"/>Medicância de rua</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">  
                                                <label>Falta de recursos materias por parte dos pais e/ou responsáveis</label><br>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <ul>                                                
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="perd_fuga" value="perd_fuga"/>Perdido ou em fuga</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="sit_rua" value="sit_rua"/>Em situação de rua/medicância</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="amea_morte" value="amea_morte"/>Ameaçado de morte</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="saude_fisica" value="saude_fisica"/>Problemas de saúde física</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="explo_trab" value="explo_trab"/>Submetido à exploração no trabalho</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul> 
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="med_rua" value="med_rua"/>Medicância/situação de rua</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="dep_quim" value="dep_quim"/>Dependência Química</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="desemp" value="desemp"/>Desemprego</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="prob_fis" value="prob_fis"/>Problemas de saúde física</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox" name="mendicancia" value="mendicancia"/>Medicância de rua</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>

                                    </div>

                                     <div class="row">

                                        <div class="col-md-11">
                                            <div class="form-group">  
                                                <label>Documentos apresentados ao serviço no ato do acolhimento Institucional familiar</label>
                                                <div class="row">  
                                                    <div class="col-md-5">
                                                        <ul>                                                   
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="guia_acol" value="guia_acol"/>Guia de acolhimento conforme Lei. 12.010/2009</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="diag_relat" value="diag_relat"/>Estudo diagnóstico e relatórios</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="amea_morte" value="amea_morte"/>Ameaçado de morte</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul> 
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="subm_trab" value="subm_trab"/>Submetido à exploração no trabalho</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline"><input type="checkbox"  name="mendicancia" value="mendicancia"/>Medicância/situação de rua</label>
                                                            </li>
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
                                                        <li style="list-style-type:none;">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox"  name="sem_doc" value="sem_doc"/>Não há documentação a ser providenciada</label>
                                                        </li>
                                                        <li style="list-style-type:none;">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox"  name="cert_nasci" value="cert_nasci"/>Certidão de Nascimento</label>
                                                        </li>
                                                        <li style="list-style-type:none;">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox"  name="car_id" value="car_id"/>Carteira de Identidade</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul> 
                                                        <li style="list-style-type:none;">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox"  name="subm_trab" value="subm_trab"/>Submetido à exploração no trabalho</label>
                                                        </li>
                                                        <li style="list-style-type:none;">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox"  name="mendicancia" value="mendicancia"/>Medicância/situação de rua</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row"> 

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Ano escolar atual</label><br>
                                                    <select name="CRIA_ESCO"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="creche">Creche</option>
                                                        <option value="Ano 2">Ano 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Frequência</label><br>
                                                    <select name="CRIA_FREQ"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="satisfatorio">Satisfátorio</option>
                                                        <option value="situacao_2">Situação 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Rendimento Escolar</label><br>
                                                    <select name="CRIA_REND"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="creche">Satisfatório</option>
                                                        <option value="situacao_2">Situação 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Carteira de vacinação</label><br>
                                                    <select name="CRIA_CART_VAC"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="sim_atualizada">Sim, atualizada</option>
                                                        <option value="situacao_2">Opção 2</option>
                                                </select>
                                            </div>
                                        </div>     

                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Como a criança percebe ou vivencia sua relação com a escola?</label><br/>
                                                <textarea class="col-md-10" name="rel_escola" id="rel_escola"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                     <div class="row">    
                                                                               
                                    </div>

                                    <div class="row">

                                        <div class="col-md-11">
                                            <div class="form-group">  
                                                <label>Problemas de saúde física e mental</label><br>
                                                    <div class="col-md-5">
                                                        <ul>                                                
                                                            <li style="list-style-type:none;">                                          
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="alergias" value="alergias"/>Alergias</label>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="desnt" value="desnt"/>Desnutrição</label>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="amea_morte" value="amea_morte"/>Ameaçado de morte</label>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="dist_ali" value="dist_ali"/>Distúrbios alimentares</label>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="medicancia" value="medicancia"/>Medicância/situação de rua</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul> 
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="int_ali_med" value="int_ali_med"/>Intolerância alimentar ou medicamentosa</label>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="dist_sono" value="dist_sono"/>Distpurbios de sono</label>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="dist_gas" value="dist_gas"/>Distúrbio gastrintestinais</label>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="prob_saude_fis" value="prob_saude_fis"/>Problemas de saúde física</label>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="parasitoses" value="parasitoses"/>Parasitoses</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>    
                                            </div>

                                        </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Especificar o diagnóstico e a data de sua realização</label><br/>
                                                <textarea class="col-md-10" name="diag_real" id="diag_real"></textarea>
                                            </div>
                                        </div>  
                                    </div>


                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">  
                                                <label>Problemas de saúde física e mental</label><br>
                                                <div class="col-md-5">
                                                    <ul>                                                
                                                        <li style="list-style-type:none;">                          
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="alergias" value="alergias"/>Visual</label>
                                                        </li>
                                                        <li style="list-style-type:none;">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="desnt" value="desnt"/>Auditiva</label>
                                                            <label class="checkbox-inline">
                                                        </li>
                                                        <li style="list-style-type:none;">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="amea_morte" value="amea_morte"/>Intelectual</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul> 
                                                        <li style="list-style-type:none;">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="dist_ali" value="dist_ali"/>Física</label>
                                                        </li>
                                                        <li style="list-style-type:none;">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="medicancia" value="medicancia"/>Nenhuma</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>    
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Acompanhamentos médicos necessários</label><br/>
                                                <textarea class="col-md-10" name="acomp_med" id="acomp_med"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Uso contínuo de medicação?</label><br/>
                                                <label class="radio-inline"><input type="radio" name="uso_med" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="uso_med" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Quais?</label><br/>
                                                <textarea class="col-md-10" name="quais_med" id="quais_med"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                     <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Teve acesso a informações sobre sua história de vida, familiar e motivos de acolhimento; considerando-se o grau de desenvolvimento?</label><br/>
                                                <label class="radio-inline"><input type="radio" name="aces_hist" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="aces_hist" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Por quê?</label><br/>
                                                <textarea class="col-md-10" name="por_que" id="por_que"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Emite sua opinião quanto às decisões que dizem respeito à sua vida cotidiana no serviço de acolhimento e à sua situação familiar?</label><br/>
                                                <label class="radio-inline"><input type="radio" name="op_vida" value="s" for="Sim" />Sim</label>
                                                <label class="radio-inline"><input type="radio" name="op_vida" value="n" for="Nao"/>Nao</label>
                                            </div>
                                        </div>  
                                    </div>


                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Quais?</label><br/>
                                                <textarea class="col-md-10" name="quais_op" id="quais_op"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                     <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Sua opinião reflete sua preferência em:</label><br>
                                                    <select name="COTL_NOME"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="retorno_familia">Retornar à família (de origem ou extensa)</option>
                                                        <option value="opiniao_2">Opinião 2</option>
                                                </select>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Desenvolvimento Físico</label><br/>
                                                <textarea class="col-md-10" name="des_fis" id="des_fis"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Desenvolvimento Cognitivo</label><br/>
                                                <textarea class="col-md-10" name="des_cog" id="des_cog"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Desenvolvimento Sócio Emocional</label><br/>
                                                <textarea class="col-md-10" name="des_soc_emo" id="des_soc_emo"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Vida Cotidiana</label><br/>
                                                <textarea class="col-md-10" name="vida_cot" id="vida_cot"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Outras Informações</label><br/>
                                                <textarea class="col-md-10" name="outras_info" id="outras_info"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                     </article>
                                    </section><br>

                                   <section id="hide_section">
                                        <article>
                                             <div class="btn func">Ocultar</div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome do Responsável</label>
                                                <input type="text" class="form-control" placeholder="Nome do responsável" name="CRIA_RESP">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Estado</label><br>
                                                    <select name="FK_ESTD_ID"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="Estado 1">Estado 1</option>
                                                        <option value="Estado 2">Estado 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Cidade</label><br>
                                                    <select name="FK_MUNI_ID"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="Cidade 1">Cidade 1</option>
                                                        <option value="Cidade 2">Cidade 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Bairro</label>
                                                <input type="text" class="form-control" placeholder="Bairro" name="CRIA_RESP_BAI">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Data de Nascimento</label>
                                                    <input type="date" class="form-control"  name="CRIA_RESP_NASCI">
                                                </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>RG</label>
                                                <input type="number" class="form-control" placeholder="RG" name="CRIA_RESP_RG">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="number" class="form-control" placeholder="CPF" name="CRIA_RESP_CPF">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Contato</label>
                                                <input type="number" class="form-control" placeholder="Contato" name="CRIA_RESP_CONT">
                                            </div>
                                        </div>

                                    </div>                                    

                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Ponto de Referência</label>
                                                <input type="text" class="form-control" placeholder="Ponto de referência" name="RESP_PONT_REF">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Profissão</label><br>
                                                    <select name="FK_PROF_ID"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="profissao_1">Profissão 1</option>
                                                        <option value="proffisao_2">Profissão 2</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Endereço do trabalho</label>
                                                <input type="text" class="form-control" placeholder="Endereço do Trarbalho" name="RESP_END_TRAB">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Grau de Parenteco</label><br>
                                                    <select name="FK_GRPA_ID"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="1">Pai</option>
                                                        <option value="2">Grau 2</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>  

                                        </article>
                                    </section><br>

                                    <section id="hide_section">
                                        <article>
                                             <div class="btn func">Ocultar</div>

                                     <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">  
                                                <label>Quais instituições e os serviços que prestaram ou que estão prestando orientação ao grupo familiar?</label><br><br>
                                                                                     
                                                    <label class="checkbox-inline"><input type="checkbox" name="cons_tute" value="cons_tute"/>Conselho Tutelar</label><br>
                                                    <label>Observação</label>
                                                    <input type="text" class="form-control"  name="obs_con_tute"> <br>
                                                                                
                                                    <label class="checkbox-inline"><input type="checkbox" name="del_prot_cria" value="del_prot_cria"/>Delegacia de Proteção à Criança e ao Adolescente - DPCA</label><br>
                                                    <label>Observação</label>
                                                    <input type="text" class="form-control"  name="obs_dpca"><br>

                                                    <label class="checkbox-inline"><input type="checkbox" name="del_com" value="del_com"/>Delegacias comuns e especializadas</label><br>
                                                    <label>Observação</label>
                                                    <input type="text" class="form-control"  name="obs_del_com"><br>

                                                    <label class="checkbox-inline"><input type="checkbox" name="assis_soc" value="assis_soc"/>Assitência Social</label><br>
                                                    <label>Observação</label>
                                                    <input type="text" class="form-control"  name="obs_assis_soc"><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Proteção Social Especial</label><br/>
                                                <textarea class="col-md-10" name="prote_soc_esp" id="prote_soc_esp"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group"> 
                                                                                     
                                                    <label class="checkbox-inline"><input type="checkbox" name="out_ser_soc_am" value="cons_tute"/>Outros Serviços de apoio sócio-familiar</label><br>
                                                    <label>Especifique</label>
                                                    <input type="text" class="form-control"  name="ser_soc_fam"> <br>
                                                                                
                                                    <label class="checkbox-inline"><input type="checkbox" name="out_cont_prob_saude" value="out_cont_prob_saude"/>Saúde</label><br>
                                                    <label>Especifique</label>
                                                    <input type="text" class="form-control"  name="esp_cont_prob_saude"><br>

                                                    <label class="checkbox-inline"><input type="checkbox" name="out_assist_soc" value="out_assist_soc"/>Assistente Social</label><br>
                                                    <label>Especifique</label>
                                                    <input type="text" class="form-control"  name="esp_assist_soc"><br>

                                                    <label class="checkbox-inline"><input type="checkbox" name="out_educ" value="out_educ"/>Educação</label><br>
                                                    <label>Especifique</label>
                                                    <input type="text" class="form-control"  name="esp_educ"><br>

                                                    <label class="checkbox-inline"><input type="checkbox" name="out_hab" value="out_hab"/>Habitação</label><br>
                                                    <label>Especifique</label>
                                                    <input type="text" class="form-control"  name="esp_hab"><br>

                                                    <label class="checkbox-inline"><input type="checkbox" name="out_prof" value="out_prof"/>Profissionalização/Trabalho</label><br>
                                                    <label>Especifique</label>
                                                    <input type="text" class="form-control"  name="esp_prof"><br>

                                                    <label class="checkbox-inline"><input type="checkbox" name="out_out" value="out_out"/>Outros</label><br>
                                                    <label>Especifique</label>
                                                    <input type="text" class="form-control"  name="esp_out"><br>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Renda Familiar</label><br>
                                                    <select name="rend_fam"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="salario_min">Salário Mínimo</option>
                                                        <option value="salario_2">Salario 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Tipo de Moradia</label><br>
                                                    <select name="rend_fam"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="pensao">Pensão</option>
                                                        <option value="tipo_2">Tipo 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Situação do Imóvel</label><br>
                                                    <select name="sit_imo"  class="form-control col-md-2">
                                                        <option value="">Selecione</option>
                                                        <option value="alugado">Alugado</option>
                                                        <option value="situacao_2">Situação 2</option>
                                                </select>
                                            </div>
                                        </div> 

                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Condição da moradia</label><br/>
                                                <textarea class="col-md-10" name="cond_mor" id="cond_mor"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Informar endereço, telefone da família extensa, das pessoas significativas da rede social da criança e/ou adolescente e da família</label><br/>
                                                <textarea class="col-md-10" name="infos_resp" id="infos_resp"></textarea>
                                            </div>
                                        </div>  
                                    </div>

                                     <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">  
                                                <label>Esse estudo de caso indica que as ações a serem desenvolvidas no PIA</label>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <ul>                                                
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox"  name="rein_fam" value="rein_fam"/>Reintegração Familiar</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox"  name="fam_subs_1" value="fam_subs_1"/>Colocação em família substituta, mediante guarda</label>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul> 
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox"  name="fam_subs_2" value="fam_subs_2"/>Colocação em família substituta (tutela, adoção nacional ou internacional)</label>
                                                            </li>
                                                            <li style="list-style-type:none;">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox"  name="ins_out_ser" value="ins_out_ser"/>Inserção em outro serviço ou modalidade de acolhimento</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Observações</label><br/>
                                                <textarea class="col-md-10" name="obs_geral" id="obs_geral"></textarea>
                                            </div>
                                        </div>  

                                    </div>

                                        </article>
                                    </section><br>

                                    <div class="row">

                                        <br><br>
                                        <div align="center" >
                                            <button type="submit" class="btn btn-info btn-fill">Cadastrar Criança</button>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>