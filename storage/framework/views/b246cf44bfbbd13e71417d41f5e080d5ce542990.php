
<?php $__env->startSection('content'); ?>

<div class="container">    
    <div class="card">
        <div class="card-header">
            Calendar
        </div>

        <div class="card-body">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
            <form>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="customer_id">customer</label>
                            <select class="form-control select2" name="customer_id" id="customer_id">
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($customer); ?>" <?php echo e(request()->input('customer_id') == $id ? 'selected' : ''); ?>><?php echo e($customer); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <button class="btn btn-primary mt-4">
                            Filter
                        </button>
                    </div>
                    <div class="col-md-5">
                        <a href="<?php echo e(route('admin.system_calendars.index')); ?>" class="btn btn-primary mt-1">
                        <span class="icon text-white-50">
                            <i></i>
                        </span>
                        <span class="text"><?php echo e(__('Reset')); ?></span>
                    </a>
                    </div>
                </div>
            </form>

            <div id='calendar'></div>
            <div class="row">
            <div class="col">
                        <a href="<?php echo e(route('admin.bookings.create')); ?>" class="btn btn-primary float-right mt-3">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text"><?php echo e(__('Tambah Jadwal')); ?></span>
                    </a>
                    </div>
                    
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-alt'); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...
           
            bookings=<?php echo json_encode($bookings); ?>;
          
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: bookings


            });
        });
</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\driver\resources\views/admin/calendar/calendar.blade.php ENDPATH**/ ?>