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
                                    
                                </div>
                            </div>
                            <div class="content">

                                <?php if(session('success')): ?>
                                    <p class="alert-success">
                                    <?php echo e(session('success')); ?> </p>
                                <?php endif; ?>

                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        
                                         <thead>
                                            <tr>
                                            <th>#</th>
                                            <th style="padding-left:2%; width: 70%;">Nome</th>
                                            <th>Visualizar</th>
                                            <th>Editar</th>
                                            </tr>
                                        </thead>
                                            
                                         <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                    
                                            <tbody>
                                               
                                                 <td><?php echo e($employee->ID); ?></td>
                                                 <td style="padding-left:2%; width: 70%";><?php echo e($employee->FUNC_NOME); ?></td>
                                                 <td><a href="<?php echo e(url('/show_employee', $employee->ID)); ?>" > <i class="fa fa-eye" aria-hidden="true" style="margin-left:19%;"></i></a></td>
                                                 <td><a href="<?php echo e(url('/edit_employee', $employee->ID)); ?>" > <i class="fa fa-pencil-square-o" aria-hidden="true" style="margin-left:19%;"></i></a></td>
                                            </tr>
                                            </tbody>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </table>
                               </div>
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