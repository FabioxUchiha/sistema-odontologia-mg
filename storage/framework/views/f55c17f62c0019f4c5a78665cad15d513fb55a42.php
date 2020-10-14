<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('img/dientes.svg')); ?>" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                <?php if(Auth::guest()): ?>
                <p>Odontologia MG</p>
                <?php else: ?>
                    <p><?php echo e(Auth::user()->name); ?></p>
                <?php endif; ?>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree">
            <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>