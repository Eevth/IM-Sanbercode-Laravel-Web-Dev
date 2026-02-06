

<?php $__env->startSection('title', 'Register - Inventory App'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Form Registrasi</h1>

    <?php if(session('error')): ?>
        <p style="color: red;"><?php echo e(session('error')); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('register.process')); ?>">
        <?php echo csrf_field(); ?>

        <p>First name: <input type="text" name="first_name" value="<?php echo e(old('first_name')); ?>" required></p>
        <p>Last name: <input type="text" name="last_name" value="<?php echo e(old('last_name')); ?>" required></p>

        <button type="submit">Submit & Lanjut</button>
    </form>

    <p><a href="<?php echo e(route('home')); ?>">Kembali ke Home</a></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP 14S\IM-Sanbercode-Laravel-Web-Dev\inventoryapp_path_eevth\resources\views/Register.blade.php ENDPATH**/ ?>