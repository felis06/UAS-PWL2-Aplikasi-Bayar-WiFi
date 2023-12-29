<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/webapp.css')); ?>">
    <title>W-Pay</title>
</head>

<style>
    .custom-container {
        max-width: 548px;
        margin: 0 auto;
        min-height: 100vh;
        background-color: pink;
        transition: background-color 0.5s, color 0.5s;
        /* Center the container on the page */
    }

    /* .dark-mode {
        background-color: #333333;
        color: white;
    } */
    /* 
    .container {
        
    } */

    .light-mode {
        background-color: #FBA0E3;
        color: #111111;
    }

    .dark-mode {
        background-color: #333333;
        color: #ffffff;
    }
</style>

<body>
    <div class="custom-container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/app/layouts/app.blade.php ENDPATH**/ ?>