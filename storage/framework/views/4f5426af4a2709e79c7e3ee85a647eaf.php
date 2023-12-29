 <!-- Assuming you have a layout file, adjust as needed -->

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2 pt-2">
        <div class="col d-flex flex-row justify-content-between">
            <h4 class="text-center" style="background: white; border-radius:16px; padding: 4px; width: 100%"><?php echo e(__('profil.profil')); ?></h4>
        </div>

        <div class="d-flex flex-row gap-4 justify-content-start align-items-center ps-4 pe-4">
            <img src="<?php echo e(asset('assets/iconamoon_profile-circle-fill.svg')); ?>" alt="profile" style="width:60px" />
            <div class="d-flex flex-column">
                <p style="font-weight: 700;"><?php echo e($user->name); ?></p>
                <p style="font-weight: 700;"><?php echo e($user->telp); ?></p>
                <p style="font-weight: 700;">W-PAY</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center w-full ps-4 pe-4 gap-4 mt-4">
            <a href="<?php echo e(route('app.profile.detail')); ?>" style="text-decoration: none; border-radius: 16px; background: #ffffff; padding: 4px 8px; width:100%; color: black" class="d-flex flex-row gap-2 align-items-center">
                <img src="<?php echo e(asset('assets/iconamoon_profile-circle-fill.svg')); ?>" alt="profile" style="width:16px" />
                <span><?php echo e(__('profil.manage')); ?></span>
            </a>
            <a href="<?php echo e(route('app.profile.setting')); ?>" style="text-decoration: none; border-radius: 16px; background: #ffffff; padding: 4px 8px; width:100% ; color: black" class="d-flex flex-row gap-2 align-items-center">
                <img src="<?php echo e(asset('assets/bxs_home.svg')); ?>" alt="profile" style="width:16px" />
                <span><?php echo e(__('profil.setting')); ?></span>
            </a>
            <a href="<?php echo e(route('logout')); ?>" style="text-decoration: none; border-radius: 16px; background: #ffffff; padding: 4px 8px;width:100%; color: black" class="d-flex flex-row gap-2 align-items-center">
                <img src="<?php echo e(asset('assets/bxs_home.svg')); ?>" alt="profile" style="width:16px" />
                <span><?php echo e(__('profil.keluar')); ?></span>
            </a>
        </div>

    </div>


    <!-- <div class="d-flex justify-content-center align-items-center" style="position: fixed; bottom:0; background: white; padding: 0"> -->
    <div class="d-flex flex-row justify-content-center align-items-center p-4" style="bottom:0;width: 100%;gap: 16px">
        <a href="<?php echo e(route('app')); ?>" style="text-decoration: none; width: 100%; display: flex; justify-content: center; align-items: center;">
            <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                <img src="<?php echo e(asset('assets/bxs_home.svg')); ?>" alt="asdasd" style="width: 48px;" />
            </div>
        </a>
        <a href="<?php echo e(route('app.profile')); ?>" style="text-decoration: none;width: 100%; display: flex; justify-content: center; align-items: center;">
            <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                <img src="<?php echo e(asset('assets/iconamoon_profile-circle-fill.svg')); ?>" alt="asdasd" style="width: 48px;" />
            </div>
        </a>
    </div>

    <!-- </div> -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/app/profile/index.blade.php ENDPATH**/ ?>