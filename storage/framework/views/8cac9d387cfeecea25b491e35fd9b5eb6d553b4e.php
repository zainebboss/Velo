    
<?php $__env->startSection('menu'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Input Information</h3>
                    <p class="text-subtitle text-muted">form information</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Input</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        
        <?php echo Toastr::message(); ?>


        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Information</h4>
                </div>
                <div class="card">
                    <div class="card-header">Contactus Page</div>
                    <div class="card-body">


                        <div class="card-body">
                        
                                            <img src="<?php echo e(URL::to('/images/'.$velos->image)); ?>"  class="img w-50 img-fluid rounded-pill" alt="<?php echo e($velos->image); ?>">
                        
                            <h5 class="card-title">Libelle : <?php echo e($velos->libelle); ?></h5>
                            <p class="card-text">Etat : <?php echo e($velos->etat); ?></p>
                            <p class="card-text">Prix : <?php echo e($velos->prix); ?></p>
                        </div>

                        </hr>

                    </div>
                </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Soeng Souy</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://soengsouy.com">Soeng Souy</a></p>
                    </div>
                </div>
            </footer>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('sidebar.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\covid 19\Downloads\Velo-gestion_velo\Velo-gestion_velo\resources\views/velo/show.blade.php ENDPATH**/ ?>