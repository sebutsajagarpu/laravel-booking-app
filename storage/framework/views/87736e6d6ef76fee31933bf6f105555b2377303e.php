

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header py-3 d-flex">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Tambah Data Kendaraan')); ?></h1>
                <div class="ml-auto">
                    <a href="<?php echo e(route('admin.rooms.index')); ?>" class="btn btn-primary">
                        <span class="text"><?php echo e(__('Go Back')); ?></span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.rooms.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="model"><?php echo e(__('Kendaraan')); ?></label>
                        <input type="text" class="form-control" id="model" placeholder="<?php echo e(__('Model (Plat Nomor)')); ?>" name="model" value="<?php echo e(old('model')); ?>" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Save')); ?></button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\driver\resources\views/admin/rooms/create.blade.php ENDPATH**/ ?>