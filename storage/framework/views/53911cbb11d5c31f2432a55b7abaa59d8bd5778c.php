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
                                
                                <div class="table-position">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th class="col-md-2">Nome da Criança</th>
                                            <td><?php echo e($crianca->CRIA_NOME); ?></td>

                                        </tr>
                                        <tr>
                                            <th class="col-md-3">Data de Nascimento</th>
                                            <td><?php echo e(date('d/m/Y', strtotime($crianca->CRIA_DTA_NASC))); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <th>Estado</th>
                                            <td><?php echo e($crianca->FK_CRIA_ESTD); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Cidade</th>
                                            <td><?php echo e($crianca->FK_CRIA_CIDADE); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Certidão de Nascimento</th>
                                            <td><?php echo e($crianca->CRIA_CERT_NUM); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Livro</th>
                                            <td><?php echo e($crianca->CRIA_CERT_LIVR); ?></td>
                                        </tr> 
                                        <tr>
                                            <th>Folha</th>
                                            <td><?php echo e($crianca->CRIA_CERT_FOLH); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Raça</th>
                                            <?php $__currentLoopData = $racas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $raca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($raca->RACA_ID == $crianca->FK_RACA_ID): ?>
                                                        <td><?php echo e($raca->RACA_DESCRICAO); ?></td>
                                                     <?php endif; ?>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>