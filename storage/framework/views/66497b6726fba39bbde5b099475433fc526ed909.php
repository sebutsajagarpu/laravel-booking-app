

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
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('create booking')); ?></h1>
                <div class="ml-auto">
                    <a href="<?php echo e(route('admin.system_calendars.index')); ?>" class="btn btn-primary">
                        <span class="text"><?php echo e(__('Go Back')); ?></span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.bookings.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama"><?php echo e(__('Nama')); ?></label>
                        <select class="form-control" name="nama" id="nama">
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($customer); ?>"><?php echo e($customer); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mobil"><?php echo e(__('Kendaraan')); ?></label>
                        <select class="form-control" name="mobil" id="mobil">
                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($roomId == $id ? 'selected' : null); ?> value="<?php echo e($room); ?>"><?php echo e($room); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tujuan"><?php echo e(__('tujuan')); ?></label>
                        <input class="form-control" name="tujuan" id="tujuan"  cols="10" rows="10"><?php echo e(old('tujuan')); ?></input>
                    </div>
                    <div class="form-group">
                        <label for="bidang"><?php echo e(__('bidang')); ?></label>
                        <input class="form-control" name="bidang" id="bidang"  cols="30" rows="10"></input>
                    </div>       
                        <div class="form-group">
                        <label for="keterangan"><?php echo e(__('keterangan')); ?></label>
                        <input class="form-control" name="keterangan" id="keterangan"  cols="30" rows="10"><?php echo e(old('keterangan')); ?></input>
                    </div>
                    <div class="form-group">
                        <label for="berangkat"><?php echo e(__('Time From')); ?></label>
                        <input type="text" class="form-control datetimepicker" id="berangkat" name="berangkat" value="<?php echo e(old('berangkat', $timeFrom)); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="pulang"><?php echo e(__('Time to')); ?></label>
                        <input type="text" class="form-control datetimepicker" id="pulang" name="pulang" value="<?php echo e(old('pulang', $timeTo)); ?>" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Save')); ?></button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style-alt'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-alt'); ?>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $('.datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            locale: 'en',
            sideBySide: true,
            icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right'
            },
            stepping: 10
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\driver\resources\views/admin/bookings/create.blade.php ENDPATH**/ ?>