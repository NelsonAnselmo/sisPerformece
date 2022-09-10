<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Agence</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Cliente</a></li>
                        <li class="breadcrumb-item active">Lista</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Clientes</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead style="background-color:#A9D0F5">
                                <th colspan="2">
                                    <?php echo $__env->make('cliente.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </th>
                            </thead>

                            <?php $__empty_1 = true; $__currentLoopData = $cao_clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"
                                                id="<?php echo e($cliente->co_cliente); ?>" value="<?php echo e(old($cliente->co_cliente)); ?>">
                                            <label for="<?php echo e($cliente->co_cliente); ?>" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo e($cliente->no_razao); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td>Nenhum registo encontrado!</td>
                                </tr>
                            <?php endif; ?>

                            <tr>
                                <th style="background-color:#A9D0F5" colspan="2"></th>
                            </tr>
                        </table>
                    </div>
                    <?php echo e($cao_clientes->render()); ?>

                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            By Agence @2022
        </div>
        <!-- /.card-footer-->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisPerformece\resources\views/cliente/lista.blade.php ENDPATH**/ ?>