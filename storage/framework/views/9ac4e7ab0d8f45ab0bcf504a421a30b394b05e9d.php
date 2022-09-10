<?php echo Form::open(['url' => '#']); ?>

<div class="row">
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <div class="form-group">
            <input type="date" value="<?php echo e(old('dataini')); ?>" name="dataini" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <div class="form-group">
            <input type="date" value="<?php echo e(old('datafim')); ?>" name="datafim" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
        <div class="form-group">
            <button class="btn btn-default" type="submit" title="pesquisar">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group d-inline">
            <a href="#"  class="btn btn-primary" title="Relatório">
                <i class="right fa fa-bars"></i> Relatório
            </a>
        </div>
        <div class="form-group d-inline">
            <a href="#" class="btn btn-primary" title="Gráfico">
                <i class="right fa fa-chart-bar"></i> Gráfico
            </a>
        </div>
        <div class="form-group d-inline">
            <a href="#" class="btn btn-primary" title="Pizza">
                <i class="right fa fa-chart-pie"></i> Pizza
            </a>
        </div>
    </div>
</div>
<?php echo Form::close(); ?>

<?php /**PATH C:\xampp\htdocs\sisPerformece\resources\views/cliente/search.blade.php ENDPATH**/ ?>