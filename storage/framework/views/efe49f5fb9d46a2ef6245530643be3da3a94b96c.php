<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(url('/')); ?>">
                <div class="sidebar-brand-text mx-3"><?php echo e(__('BKKBN')); ?></div>
            </a>

            <!-- Divider -->
            <!-- Divider -->
            <hr class="sidebar-divider">

                                 <!-- Nav Item  -->
                                 <li class="nav-item <?php echo e(request()->is('admin/system_calendars') || request()->is('admin/system_calendars') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.system_calendars.index')); ?>">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span><?php echo e(__('Dashboard')); ?></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.users.index')); ?>" aria-expanded="true" aria-controls="collapseTwo">
                    <span>List Driver</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.rooms.index')); ?>" aria-expanded="true" aria-controls="collapseTwo">
                    <span>List Kendaraan</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.bookings.index')); ?>"  aria-expanded="true" aria-controls="collapseTwo">
                    <span><?php echo e(__('Jadwal Driver')); ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.fungsi.index')); ?>"  aria-expanded="true" aria-controls="collapseTwo">
                    <span><?php echo e(__('Fungsi')); ?></span>
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                </form>
            </li>




        </ul><?php /**PATH C:\xampp\xampp\htdocs\driver\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>