

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Edit Data Driver')); ?></h1>
        <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-primary btn-sm shadow-sm"><?php echo e(__('Go Back')); ?></a>
    </div>

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
            <div class="card-body">
                <form action="<?php echo e(route('admin.users.update', $user->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="form-group">
                        <label for="nama"><?php echo e(__('nama')); ?></label>
                        <input type="text" class="form-control" id="nama" placeholder="<?php echo e(__('nama')); ?>" name="nama" value="<?php echo e(old('nama', $user->nama)); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="nomor"><?php echo e(__('Nomor')); ?></label>
                        <input type="nomor" class="form-control" id="nomor" placeholder="<?php echo e(__('nomor')); ?>" name="nomor" value="<?php echo e(old('nomor',  $user->nomor)); ?>" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Save')); ?></button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\driver\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>