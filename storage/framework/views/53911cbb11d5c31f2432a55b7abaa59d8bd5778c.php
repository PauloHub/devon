<?php $__env->startSection('content'); ?>


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
                                            <a href="<?php echo e(url('/list_child')); ?>" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Crianças</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                <div class="content">
                                    <?php if(session('success')): ?>
                                        <p class="alert-success" align="center">
                                        <?php echo e(session('success')); ?> </p>
                                    <?php endif; ?>

                                    <form action="<?php echo e(url('/register_child')); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>


                                        <section id="hide_section" >
                                            <article>
                                               <div class="btn func">1. Equipe Técnica Responsável pelo Acolhimento</div>

                                               <div class="row">

                                               <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Conselho Tutelar</label><br>
                                                        <select class="form-control advice_counselor" disabled>
                                                            <option value=""><?php echo e($nome_conselho); ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Conselheiro Responsável</label><br>
                                                        <select name="FK_CONS_ID" class="form-control counselor_advice" disabled>
                                                            <option value=""><?php echo e($nome_conselheiro); ?></option>
                                                        </select>
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
                                                    <input type="text" class="form-control" placeholder="Nome da criança" name="CRIA_NOME" value="<?php echo e($crianca->CRIA_NOME); ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Estado</label><br>
                                                    <select name="FK_CRIA_ESTD" id="state_city" class="form-control state_city " disabled>                                                        
                                                        <option value=""><?php echo e($crianca->FK_CRIA_ESTD); ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Cidade</label><br>
                                                    <select name="FK_CRIA_CIDADE" id="city_state" class="form-control city_state " disabled>                                                        
                                                        <option value=""><?php echo e($crianca->FK_CRIA_CIDADE); ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data de Nascimento</label>
                                                    <input type="date" class="form-control"  name="CRIA_DTA_NASC" value="<?php echo e($crianca->CRIA_DTA_NASC); ?>" disabled>
                                                </div>    
                                            </div>
                                            <div class="col-md-1 input_number">
                                                <div class="form-group">
                                                    <label>Idade</label>
                                                    <input type="number" class="form-control" placeholder="00" name="CRIA_IDADE_EST" value="<?php echo e($crianca->CRIA_IDADE_EST); ?>" disabled>                                                
                                                </div>    
                                            </div>
                                        </div>  
                                        
                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Certidão de Nascimento</label>
                                                    <input type="number" class="form-control" placeholder="Nº Certidão" name="CRIA_CERT_NUM" value="<?php echo e($crianca->CRIA_CERT_NUM); ?>" disabled>
                                                </div>
                                            </div>                                        
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Livro</label>
                                                    <input type="text" class="form-control" placeholder="Livro" name="CRIA_CERT_LIVR" value="<?php echo e($crianca->CRIA_CERT_LIVR); ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Folha</label>
                                                    <input type="text" class="form-control" placeholder="Folha" name="CRIA_CERT_FOLH" value="<?php echo e($crianca->CRIA_CERT_FOLH); ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Raça/Cor</label><br>
                                                    <select name="FK_RACA_ID" class="form-control" disabled>                                                    
                                                        <option value=""><?php echo e($raca_crianca); ?></option>
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
                                                        <label class="radio-inline"><input type="radio" name="CRIA_SEXO" value="F" checked disabled /><?php echo e($crianca->CRIA_SEXO); ?></label>
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
                                                <label class="radio-inline"><input type="radio" name="ACMT_VARA_INFAN" value="1" checked disabled /><?php echo e($acmt->ACMT_VARA_INFAN); ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Data Acolhimento</label><br>
                                                <input type="date" class="form-control"  name="ACMT_DTA_ACOLHI" value="<?php echo e($acmt->ACMT_DTA_ACOLHI); ?>" disabled=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Meio de Chegada</label><br>
                                                <select name=""  class="form-control col-md-2" disabled>                                                    
                                                    <option value=""><?php echo e($meio_de_chegada->QEPI_DESCRICAO); ?></option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>O foro/vara da Infância e Juventude confirmou a medida de acolhimento, expediu guia e encaminhou todos os relatórios necessários?</label><br/>
                                                <?php $acmt->ACMT_VARA_RELAT = ($acmt->ACMT_VARA_RELAT == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_VARA_RELAT" value="1" checked disabled /><?php echo e($acmt->ACMT_VARA_RELAT); ?></label>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Sugestões</label><br/>
                                                <textarea class="col-md-10" name="ACMT_VARA_OBS" id="campo_sugestoes" disabled><?php echo e($acmt->ACMT_VARA_OBS); ?></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row"> 

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Há proximidade entre o serviço de acolhimento e a residência dos pais/responsável legal?</label><br/>
                                                <?php $acmt->ACMT_PROX_RESIDENCIA = ($acmt->ACMT_PROX_RESIDENCIA == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_PROX_RESIDENCIA" value="1"/><?php echo e($acmt->ACMT_PROX_RESIDENCIA); ?></label>
                                            </div>
                                        </div> 

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Acolhimentos anteriores?</label><br/>
                                                <?php $acmt->ACMT_ACOLH_ANT = ($acmt->ACMT_ACOLH_ANT == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_ACOLH_ANT" value="1"/><?php echo e($acmt->ACMT_ACOLH_ANT); ?></label>
                                            </div>
                                        </div> 

                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Motivos e tempo de permanência no(s) serviço(s) de acolhimento(s) anterior(es)</label><br/>
                                                <textarea class="col-md-10" name="ACMT_MOT_ACOLHM_ANT" disabled><?php echo e($acmt->ACMT_MOT_ACOLHM_ANT); ?></textarea>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Higiene/Sinais de Violência</label><br/>
                                                <textarea class="col-md-10" name="ACMT_HIG_VIOLENCIA" disabled><?php echo e($acmt->ACMT_HIG_VIOLENCIA); ?></textarea>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Reações e Comportamento</label><br/>
                                                <textarea class="col-md-10" name="ACMT_REA_COMP" disabled><?php echo e($acmt->ACMT_REA_COMP); ?></textarea>
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
                                                <input type="number" class="form-control" placeholder="Nº processo" name="ACMT_VARA_NUM_PROCESS" value="<?php echo e($acmt->ACMT_VARA_NUM_PROCESS); ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Proibição judicial de visitas</label><br>
                                                <select name=""  class="form-control col-md-2" disabled>
                                                    <option value=""><?php echo e($proibicao_judicial->QEPI_DESCRICAO); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Situação do poder familiar</label><br>
                                                <select name=""  class="form-control col-md-2" disabled>
                                                    <option value=""><?php echo e($situacao_poder_familiar->QEPI_DESCRICAO); ?></option>
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
                                                <label class="radio-inline"><input type="radio" name="ACMT_DFPUB" value="1" /><?php echo e($acmt->ACMT_DFPUB); ?></label>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>A família conta com defensor público/advogado?</label><br/>
                                                <?php $acmt->ACMT_DFPUB_FAM = ($acmt->ACMT_DFPUB_FAM == '1' ? 'Sim' : 'Não'); ?>
                                                <label class="radio-inline"><input type="radio" name="ACMT_DFPUB_FAM" value="1" /><?php echo e($acmt->ACMT_DFPUB_FAM); ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section><br>

                            <section id="hide_section" >
                                <article>
                                   <div class="btn func">5. Grupo de irmãos</div>                            

                                   <?php for($i=0; $i<$qt_cria_ext; $i++): ?>
                                           <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nome da Criança Externa: <?php echo e($i+1); ?></label>
                                                    <input type="text" class="form-control" value="<?php echo e($criancas_externas[$i]->CRIA_EXTR_NOME); ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nome do Responsável</label>
                                                    <input type="text" class="form-control" value="<?php echo e($criancas_externas[$i]->CRIA_EXTR_FAM_NOME); ?>" disabled>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nome da Instituição de Acolhimento</label>
                                                    <input type="text" class="form-control" value="<?php echo e($criancas_externas[$i]->CRIA_EXTR_NOME_INSTI); ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Endereço da(s) instituição(ões)</label>
                                                    <input type="text" class="form-control" value="<?php echo e($criancas_externas[$i]->CRIA_EXTR_END_INSTI); ?>" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data de Nascimento</label>
                                                    <input type="date" class="form-control" value="<?php echo e($criancas_externas[$i]->CRIA_EXTR_DATA_NASC); ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Contato</label>
                                                    <input type="number" class="form-control" value="<?php echo e($criancas_externas[$i]->CRIA_EXTR_FAM_CONT); ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="height: 10px;  border: 0;  box-shadow: 0 10px 10px -10px #8c8b8b inset;"> <br>
                                     <?php endfor; ?>
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




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>