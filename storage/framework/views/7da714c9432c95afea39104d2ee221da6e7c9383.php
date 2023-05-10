<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="<?php echo e(route('dashboard')); ?>">
                <img src="<?php echo e(asset('assets/images/brand/logo.png')); ?>" class="header-brand-img desktop-logo w-50 m-auto p-2"
                    alt="logo">
                <img src="<?php echo e(asset('assets/images/brand/logo.png')); ?>" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="<?php echo e(asset('assets/images/brand/logo.png')); ?>" class="header-brand-img light-logo"
                    alt="logo">
                <img src="<?php echo e(asset('assets/images/brand/logo.png')); ?>"
                    class="header-brand-img light-logo1 w-50 m-auto p-2" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="<?php echo e(route('dashboard')); ?>"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>Management Area</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Users</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                        <li><a href="<?php echo e(route('users.index')); ?>" class="slide-item"> All Users</a></li>
                        <li><a href="<?php echo e(route('drivers.index')); ?>" class="slide-item"> All Drivers</a></li>
                        <li><a href="<?php echo e(route('users.create')); ?>" class="slide-item"> New User</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Areas</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                        <li><a href="<?php echo e(route('areas.index')); ?>" class="slide-item"> All Areas</a></li>
                        <li><a href="<?php echo e(route('areas.create')); ?>" class="slide-item"> New Area</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Villages</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                        <li><a href="<?php echo e(route('villages.index')); ?>" class="slide-item"> All Villages</a></li>
                        <li><a href="<?php echo e(route('villages.create')); ?>" class="slide-item"> New Village</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Packages</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                        <li><a href="<?php echo e(route('villages.index')); ?>" class="slide-item"> All Packages</a></li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
<?php /**PATH C:\Users\Omda\Desktop\WorkSpace\Laravel\UltraPalestine8\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>