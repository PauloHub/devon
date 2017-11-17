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

                                    
                        <div class="row">

                            <br><br>
                            <div align="center" >
                                <button type="submit" class="btn btn-info btn-fill">Cadastrar Criança</button>
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