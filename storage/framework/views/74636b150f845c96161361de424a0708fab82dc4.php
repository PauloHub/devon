<?php $__env->startSection('content'); ?>
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
                                            <a href="<?php echo e(url('/list_employee')); ?>" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Funcionários</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">

                                <?php if(session('success')): ?>
                                    <p class="alert-success">
                                    <?php echo e(session('success')); ?> </p>
                                <?php endif; ?>

                                <form action="<?php echo e(url('/edit_employee', $employee->ID)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo method_field('PUT'); ?>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo" name="FUNC_NOME" value="<?php echo e($employee->FUNC_NOME); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>RG</label>
                                                <input type="text" class="form-control" placeholder="RG" name="FUNC_RG" value="<?php echo e($employee->FUNC_RG); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="text" class="form-control" placeholder="CPF" name="FUNC_CPF" value="<?php echo e($employee->FUNC_CPF); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Conta</label>
                                                <input type="text" class="form-control" placeholder="Conta" name="FUNC_CONTA" value="<?php echo e($employee->FUNC_CONTA); ?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="text" class="form-control" placeholder="Telefone" name="FUNC_TEL" value="<?php echo e($employee->FUNC_TEL); ?>" >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="FUNC_EMAIL" value="<?php echo e($employee->FUNC_EMAIL); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Nascimento</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_NASCI" value="<?php echo e($employee->FUNC_DT_NASCI); ?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo Da Mãe</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo da Mãe"  name="FUNC_MAE" value="<?php echo e($employee->FUNC_MAE); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo Do Pai</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo do Pai"  name="FUNC_PAI" value="<?php echo e($employee->FUNC_PAI); ?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Endereço"  name="FUNC_ENDERECO" value="<?php echo e($employee->FUNC_ENDERECO); ?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Estado</label>
                                                <br>
                                                <select name="FK_FUNC_ESTD" id="id_estd" class="form-control state_city" >
                                                        <option value="<?php echo e($employee->FK_FUNC_ESTD); ?>"><?php echo e($employee->FK_FUNC_ESTD); ?></option>
                                                    <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($state->ESTD_UF); ?>"><?php echo e($state->ESTD_DESC); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <br>
                                                <select name="FK_FUNC_CIDADE" id="id_cidade" class="form-control city_state" >
                                                    <option value="<?php echo e($employee->FK_FUNC_CIDADE); ?>"><?php echo e($employee->FK_FUNC_CIDADE); ?></option>
                                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($city->CIDADE_DESC); ?>"><?php echo e($city->CIDADE_DESC); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>BAIRRO</label>
                                                <input type="text" class="form-control" placeholder="Bairro" name="FUNC_BAIRRO" value="<?php echo e($employee->FUNC_BAIRRO); ?>" >
                                            </div>
                                        </div>
                                                                
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CEP</label>
                                                <input type="number" class="form-control" placeholder="CEP" name="FUNC_CEP" value="<?php echo e($employee->FUNC_CEP); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Número</label>
                                                <input type="number" class="form-control" placeholder="Número da Casa" name="FUNC_NUMERO_CASA" value="<?php echo e($employee->FUNC_NUMERO_CASA); ?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Admissão</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_ADMISSAO" value="<?php echo e($employee->FUNC_DT_ADMISSAO); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data de Demissão</label>
                                                <input type="date" class="form-control"  name="FUNC_DT_DEMISSAO" value="<?php echo e($employee->FUNC_DT_DEMISSAO); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Cargo</label>
                                                <input type="text" class="form-control"  placeholder="Cargo" name="FUNC_CARGO" value="<?php echo e($employee->FUNC_CARGO); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Formação</label>
                                                <input type="text" class="form-control"  placeholder="Formação ou Escolaridade" name="FUNC_FORMACAO" value="<?php echo e($employee->FUNC_FORMACAO); ?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <br>
                                                <select name="FUNC_STATUS" class="form-control" >
                                                    <?php if($employee->FUNC_STATUS == 1): ?>                                                  
                                                        <option value="1">Ativo</option>
                                                        <?php else: ?>
                                                        <option value="0">Inativo</option>     
                                                        <?php endif; ?>                                               
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <br><br>
                                        <div align="center">
                                            <input type="submit" value="Salvar"  class="btn btn-info btn-fill">
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
                url: '<?php echo URL::to('find_cities'); ?>', 
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>