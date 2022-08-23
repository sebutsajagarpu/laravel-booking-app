

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    <?php echo e(__('view booking')); ?>

                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <tr>
                            <th>Nama Driver</th>
                            <td><?php echo e($booking->nama); ?></td>
                        </tr>
                        <tr>
                            <th>Kendaraan</th>
                            <td><?php echo e($booking->mobil); ?></td>
                        </tr>
                        <tr>
                            <th>Tujuan</th>
                            <td><?php echo e($booking->tujuan); ?></td>
                        </tr>
                        <tr>
                            <th>Bidang</th>
                            <td><?php echo e($booking->bidang); ?></td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td><?php echo e($booking->keterangan); ?></td>
                        </tr>
                        <tr>
                            <th>Waktu Keberangkatan</th>
                            <td><?php echo e($booking->berangkat); ?></td>
                        </tr>
                        <tr>
                            <th>Waktu Kedatangan</th>
                            <td><?php echo e($booking->pulang); ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?php echo e($booking->status); ?></td>
                        </tr>
                    </table>
                    <a href="<?php echo e(route('admin.bookings.edit', $booking->id)); ?>" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i> Edit
                                    </a>
                                    <form onclick="return confirm('are you sure ? ')" class="d-inline" action="<?php echo e(route('admin.bookings.destroy', $booking->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\driver\resources\views/admin/bookings/show.blade.php ENDPATH**/ ?>