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
                                                <p class="category">Ficha de Cadastro de Doações no Sistema</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul>
                                        <li style="list-style-type:none; text-align: right; margin-right: 8%;">
                                            <a href="<?php echo e(url('/list_donation')); ?>" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-list"></span> Listar Doações</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">

                                <?php if(session('success')): ?>
                                    <p class="alert-success" align="center">
                                    <?php echo e(session('success')); ?> </p>
                                <?php endif; ?>

                                <form action="<?php echo e(url('/register_donation')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Doador</label>
                                                <br>
                                                <select name="FK_DOAD_ID" class="form-control" required>
                                                    <option value="">Selecione</option>
                                                    <?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($donor->ID); ?>"><?php echo e($donor->DOAD_NOME); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">                                            
                                            <div class="form-group">
                                                <label>Tipo da doação</label>
                                                <br>
                                                <select name="FK_DOAC_TPO" class="form-control" required>
                                                    <option value="">Selecione</option>
                                                    <?php $__currentLoopData = $donations_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($donation_type->ID); ?>"><?php echo e($donation_type->DOAT_DESCRICAO); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">                                            
                                            <div class="form-group">
                                                <label>Roteiro</label>
                                                <br>
                                                <select name="FK_ROTA" class="form-control">
                                                    <option value="">Selecione</option>
                                                    <?php $__currentLoopData = $scripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($script->ID); ?>"><?php echo e($script->ID); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data da Doação</label>
                                                <input type="date" class="form-control"  name="DOAC_DTA" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Valor</label>
                                                <input type="number" class="form-control" placeholder="100,00" name="DOAC_VALOR">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Quantidade</label>
                                                <input type="number" class="form-control" name="DOAC_QAUNT">
                                            </div>
                                        </div>

                                    </div>

                                    <br><br>
                                        <div align="center">
                                            <input type="submit" value="Cadastrar Doação" name="" class="btn btn-info btn-fill">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>