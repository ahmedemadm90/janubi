<?php if($message = Session::get('success')): ?>
<div class="alert alert-success m-2 text-capitalize">
    <p><?php echo e($message); ?></p>
</div>
<?php elseif($message = Session::get('error')): ?>
<div class="alert alert-danger m-2 text-capitalize">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
<?php /**PATH H:\Laravel\janubi working auth\resources\views/layouts/sessions.blade.php ENDPATH**/ ?>