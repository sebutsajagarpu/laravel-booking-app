

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
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('create customer')); ?></h1>
                <div class="ml-auto">
                    <a href="<?php echo e(route('admin.customers.index')); ?>" class="btn btn-primary">
                        <span class="text"><?php echo e(__('Go Back')); ?></span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.customers.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="first_name"><?php echo e(__('First Name')); ?></label>
                        <input type="text" class="form-control" id="first_name" placeholder="<?php echo e(__('first name')); ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="last_name"><?php echo e(__('Last Name')); ?></label>
                        <input type="text" class="form-control" id="last_name" placeholder="<?php echo e(__('last name')); ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="email"><?php echo e(__('Email')); ?></label>
                        <input type="email" class="form-control" id="email" placeholder="<?php echo e(__('email')); ?>" name="email" value="<?php echo e(old('email')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="country"><?php echo e(__('Country')); ?></label>
                        <select class="form-control" name="country_id" id="country">
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>"><?php echo e($country); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone"><?php echo e(__('Phone')); ?></label>
                        <input type="number" class="form-control" id="phone" placeholder="<?php echo e(__('phone')); ?>" name="phone" value="<?php echo e(old('phone')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="address"><?php echo e(__('Address')); ?></label>
                        <textarea class="form-control" name="address" id="address" placeholder="address" cols="30" rows="10"><?php echo e(old('address')); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Save')); ?></button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\driver\resources\views/admin/customers/create.blade.php ENDPATH**/ ?>