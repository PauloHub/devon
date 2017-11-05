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
                                                <h4 class="title">Modificar ficha do doador</h4>
                                            </li>
                                            <li style="list-style-type:none;">
                                                <p class="category">Ficha do doador: <b><?php echo e($donor->DOAD_NOME); ?></b></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul>
                                        <li style="list-style-type:none; text-align: right; margin-right: 8%;">
                                            <a href="<?php echo e(url('/list_donor')); ?>" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Doadores</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">

                                <?php if(session('success')): ?>
                                    <p class="alert-success" align="center">
                                    <?php echo e(session('success')); ?> </p>
                                <?php endif; ?>

                                <form action="<?php echo e(url('/edit_donor', $donor->ID)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo method_field('PUT'); ?>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input type="text" class="form-control" placeholder="Nome Completo" name="DOAD_NOME" value="<?php echo e($donor->DOAD_NOME); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="text" class="form-control" placeholder="CPF" name="DOAD_CPF" maxlength="11" value="<?php echo e($donor->DOAD_CPF); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone 1</label>
                                                <input type="text" class="form-control" placeholder="Telefone" name="DOAD_TEL_1" maxlength="15" value="<?php echo e($donor->DOAD_TEL_1); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Telefone 2</label>
                                                <input type="text" class="form-control" placeholder="Telefone" name="DOAD_TEL_2" maxlength="15" value="<?php echo e($donor->DOAD_TEL_2); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="DOAD_EMAIL" value="<?php echo e($donor->DOAD_EMAIL); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bairro</label>
                                                <input type="text" class="form-control" placeholder="Bairro" name="DOAD_BAIRRO" value="<?php echo e($donor->DOAD_BAIRRO); ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Endereço"  name="DOAD_ENDE" value="<?php echo e($donor->DOAD_ENDE); ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <br>
                                            <select name="FK_DOAD_ESTD" id="id_estd" class="form-control state_city" required>
                                                <option value="">Selecione</option>
                                                <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($state->ESTD_ID == $donor->FK_DOAD_ESTD): ?>
                                                        <option value="<?php echo e($state->ESTD_ID); ?>" selected><?php echo e($state->ESTD_DESC); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <br>
                                                <select name="FK_DOAD_CIDADE" id="id_cidade" class="form-control city_state" required>
                                                    <option value="">Selecione</option>
                                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($city->CIDADE_ID == $donor->FK_DOAD_CIDADE): ?>
                                                            <option value="<?php echo e($city->CIDADE_ID); ?>" selected><?php echo e($city->CIDADE_DESC); ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                                                
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CEP</label>
                                                <input type="text" class="form-control" placeholder="CEP" name="DOAD_CEP" maxlength="8" value="<?php echo e($donor->DOAD_CEP); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Número</label>
                                                <input type="number" class="form-control" placeholder="Número da Casa" name="DOAD_NUMERO_CASA" value="<?php echo e($donor->DOAD_NUMERO_CASA); ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Observação:</label>
                                                <input type="text" class="form-control" placeholder="Endereço"  name="DOAD_OBS" value="<?php echo e($donor->DOAD_OBS); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <br><br>
                                        <div align="center">
                                            <input type="submit" value="Salvar"  class="btn btn-info btn-fill">
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
                url: '<?php echo URL::to('find_cities'); ?>', 
                data:{'uf':estd_uf},
                success:DOADtion(data){
                    //console.log('com sucesso!');
                    console.log(data);
                    //console.log(data.length);

                    op+='<option value="0" selected>Selecione a cidade</option>';
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>