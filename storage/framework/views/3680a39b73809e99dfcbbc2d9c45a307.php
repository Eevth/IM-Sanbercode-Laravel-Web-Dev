<?php $__env->startSection('title', 'Welcome - Inventory App'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Selamat Datang, <?php echo e($firstName); ?> <?php echo e($lastName); ?>!</h1>
    <p>Terima kasih sudah mendaftar di Inventory App</p>
    <p><a href="<?php echo e(route('home')); ?>">Kembali ke Home</a></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP 14S\IM-Sanbercode-Laravel-Web-Dev\inventoryapp_path_eevth\resources\views/welcome.blade.php ENDPATH**/ ?>