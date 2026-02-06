<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Inventory App'); ?></title>

    <!-- Bootstrap CSS (compiled version) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.min.css')); ?>">
</head>
<body>

    <!-- Sidebar kiri -->
    <div class="d-flex">
        <div class="sidebar bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
            <h4 class="text-center mb-4">Inventory App</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('register.form')); ?>">Register</a>
                </li>
            </ul>
        </div>

        <!-- Konten utama -->
        <div class="main-content flex-grow-1 p-4">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- App JS -->
    <script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\HP 14S\IM-Sanbercode-Laravel-Web-Dev\inventoryapp_path_eevth\resources\views/layouts/app.blade.php ENDPATH**/ ?>