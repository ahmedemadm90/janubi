<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    All Users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bage-header'); ?>
    All Users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.sessions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">Create New User</a>
                </div>
                <div class="card-body">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="file-datatable"
                                        class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">Name</th>
                                                <th class="border-bottom-0">Role</th>
                                                <th class="border-bottom-0">Phone</th>
                                                <th class="border-bottom-0">Email</th>
                                                <th class="border-bottom-0">Area</th>
                                                <th class="border-bottom-0">Village</th>
                                                <th class="border-bottom-0">Street</th>
                                                <th class="border-bottom-0">Returns Cost</th>
                                                <th class="border-bottom-0">Plus Delivery Cost</th>
                                                <th class="border-bottom-0">State</th>
                                                <th class="border-bottom-0">Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = App\Models\User::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($user->fname); ?> <?php echo e($user->lname); ?></td>
                                                    <td><?php echo e($user->role->role_name); ?></td>
                                                    <td><?php echo e($user->phone); ?></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->area->area_name); ?></td>
                                                    <td><?php echo e($user->village->village_name); ?></td>
                                                    <td><?php echo e($user->street); ?></td>
                                                    <?php if($user->returns_cost): ?>
                                                        <td><?php echo e($user->returns_cost); ?></td>
                                                    <?php else: ?>
                                                        <td>Free</td>
                                                    <?php endif; ?>
                                                    <?php if($user->delivery_cost_discount != 0): ?>
                                                        <td><?php echo e($user->delivery_cost_discount); ?></td>
                                                    <?php else: ?>
                                                        <td>Free</td>
                                                    <?php endif; ?>
                                                    <?php if($user->active == 1): ?>
                                                        <td class="text-success">Active</td>
                                                    <?php else: ?>
                                                        <td class="text-danger">Freezed</td>
                                                    <?php endif; ?>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item text-success"
                                                                        href="<?php echo e(route('users.show', $user->id)); ?>">Show</a>
                                                                </li>
                                                                <li><a class="dropdown-item text-primary"
                                                                        href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a>
                                                                </li>
                                                                <?php if($user->active == 1): ?>
                                                                    <li><a class="dropdown-item text-danger"
                                                                            href="<?php echo e(route('users.freeze', $user->id)); ?>">Freeze</a>
                                                                    </li>
                                                                <?php else: ?>
                                                                    <li>
                                                                        <a class="dropdown-item text-danger"
                                                                            href="<?php echo e(route('users.unfreeze', $user->id)); ?>">Un-Freeze</a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
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
    </div>
    <!-- End Row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Omda\Desktop\WorkSpace\Laravel\UltraPalestine8\resources\views/users/index.blade.php ENDPATH**/ ?>