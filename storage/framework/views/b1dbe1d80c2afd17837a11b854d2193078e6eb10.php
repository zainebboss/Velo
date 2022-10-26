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
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header">associations</div>
                                <div class="card-body">
                                    <a href="<?php echo e(url('/Associations/create')); ?>" class="btn btn-success btn-sm" title="Add New association">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                    </a>
                                    <br/>
                                    <br/>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>association_name</th>
                                                <th>association_adress</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($loop->iteration); ?></td>
                                                    <td><?php echo e($item->association_name); ?></td>
                                                    <td><?php echo e($item->association_adress); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(url('/Associations/' . $item->id)); ?>" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                        <a href="<?php echo e(url('/Associations/' . $item->id . '/edit')); ?>" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                        <form method="POST" action="<?php echo e(url('/Associations' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                            <?php echo e(method_field('DELETE')); ?>

                                                            <?php echo e(csrf_field()); ?>

                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete association" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
            <script>
                var botmanWidget = {
                    aboutText: 'ssdsd',
                    introMessage: "✋ Hi! I'm form Tutsmake.org"
                };
            </script>

            <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\covid 19\Downloads\Velo-gestion_velo\Velo-gestion_velo\resources\views/asso/index.blade.php ENDPATH**/ ?>