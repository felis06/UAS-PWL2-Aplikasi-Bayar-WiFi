<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Blog</title>
</head>

<body>
    <div style=" max-width: 548px;
        margin: 0 auto;
        min-height: 100vh;
        background-color: pink;">
        <div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
            <div class="d-flex flex-column gap-2 pt-2">
                <div class="col d-flex flex-column justify-content-between" style="margin:48px">
                    <h4 class="text-center" style="font-weight: 700; font-size: 32px;width: 100%"><?php echo e(__('auth.login')); ?></h4>
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label"><?php echo e(__('auth.email')); ?></label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><?php echo e(__('auth.password')); ?></label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100"><?php echo e(__('auth.login')); ?></button>
                    </form>

                    <span class="text-center mt-2">
                        <?php echo e(__('auth.detail')); ?><a href="<?php echo e(route('register')); ?>" style="text-decoration: none;"> Register</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/auth/login.blade.php ENDPATH**/ ?>