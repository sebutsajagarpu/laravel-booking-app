

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    <?php echo e(__('List Kendaraan')); ?>

                </h6>
                <div class="ml-auto">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('room_create')): ?>
                    <a href="<?php echo e(route('admin.rooms.create')); ?>" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text"><?php echo e(__('Tambah Kendaraan')); ?></span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-room" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>No</th>
                                <th>Kendaraan</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $mobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr data-entry-id="<?php echo e($mobil->id); ?>">
                                <td>

                                </td>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($mobil->model); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.rooms.edit', $mobil->id)); ?>" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form onclick="return confirm('are you sure ? ')" class="d-inline" action="<?php echo e(route('admin.rooms.destroy', $mobil->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="9" class="text-center"><?php echo e(__('Kosong')); ?></td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-alt'); ?>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'delete selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.rooms.mass_destroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-room:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\driver\resources\views/admin/rooms/index.blade.php ENDPATH**/ ?>