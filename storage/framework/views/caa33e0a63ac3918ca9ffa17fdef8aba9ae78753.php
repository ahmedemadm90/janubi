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
    All Packages
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bage-header'); ?>
    All Packages
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.sessions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                
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
                                                <th class="border-bottom-0">To - Phone</th>
                                                <th class="border-bottom-0">To - Phone 2</th>
                                                <th class="border-bottom-0">Area</th>
                                                <th class="border-bottom-0">Village</th>
                                                <th class="border-bottom-0">Street</th>
                                                <th class="border-bottom-0">Discount %</th>
                                                <th class="border-bottom-0">Delivery Cost</th>
                                                <th class="border-bottom-0">Total Cost</th>
                                                <th class="border-bottom-0">Shipping State</th>
                                                <th class="border-bottom-0">Invoice State</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = App\Models\Package::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($package->user->fname); ?> <?php echo e($package->user->lname); ?></td>
                                                    <td><?php echo e($package->to_phone); ?></td>
                                                    <td><?php echo e($package->alter_phone); ?></td>
                                                    <td><?php echo e($package->area->area_name); ?></td>
                                                    <td><?php echo e($package->village->village_name); ?></td>
                                                    <td><?php echo e($package->street); ?></td>
                                                    <td><?php echo e($package->user->delivery_cost_discount); ?></td>
                                                    <td><?php echo e($package->delivery_cost); ?></td>
                                                    <td><?php echo e($package->total_cost); ?></td>
                                                    <td><?php echo e($package->shipping_state); ?></td>
                                                    <td><?php echo e($package->invoice_state); ?></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Omda\Desktop\WorkSpace\Laravel\UltraPalestine8\resources\views/packages/index.blade.php ENDPATH**/ ?>