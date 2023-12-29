 <!-- Assuming you have a layout file, adjust as needed -->

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2 pt-2">
        <div class="col d-flex flex-row justify-content-between">
            <h4 class="text-center" style="background: white; border-radius:16px; padding: 4px; width: 100%"> <?php echo e(__('setting.title')); ?></h4>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center mt-4 gap-4">
            <!-- <a href="#" style="text-decoration: none; border-radius: 16px; background: #ffffff; padding: 4px 8px; width: 100%; color: #111111" class=" text-center">
                <?php echo e(__('setting.mode')); ?>

            </a> -->
            <button id="darkModeToggle" class="btn" style="background: white; width: 100%"> <?php echo e(__('setting.mode')); ?></button>
            <div class="dropdown" style=" width: 100%">
                <button class="btn btn-light dropdown-toggle" style=" width: 100%; border-radius:16px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Lang: <?php echo e(App::currentLocale()); ?>

                </button>
                <ul class="dropdown-menu" style=" width: 100%">
                    <li><a class="dropdown-item" href="<?php echo e(route('locale', 'en')); ?>">English</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('locale', 'id')); ?>">Indonesia</a></li>
                </ul>
            </div>

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

<?php $__env->startPush('scripts'); ?>
<script>
    // $(document).ready(function() {
    //     $("#darkModeToggle").click(function() {
    //         $(".custom-container").toggleClass("dark-mode")
    //     })
    // })

    $(document).ready(function() {
    const darkModeToggle = $('#darkModeToggle');
    const body = $('.custom-container');

    darkModeToggle.on('click', function() {
        // Toggle dark mode class on the body
        body.toggleClass('dark-mode');

        // Update button text based on the current mode
        const isDarkMode = body.hasClass('dark-mode');
        darkModeToggle.text(isDarkMode ? 'Toggle Light Mode' : 'Toggle Dark Mode');
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('app.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/app/profile/setting.blade.php ENDPATH**/ ?>