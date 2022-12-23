<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">
        <script src="<?php echo e(url('https://kit.fontawesome.com/051b5b0d64.js')); ?>" crossorigin="anonymous"></script>
        <title>Barkaflix</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    </head>
    <body>
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>
    </body>
</html>
<?php /**PATH /home/tiossi/act311/locadora_laravel/resources/views/layouts/guest.blade.php ENDPATH**/ ?>