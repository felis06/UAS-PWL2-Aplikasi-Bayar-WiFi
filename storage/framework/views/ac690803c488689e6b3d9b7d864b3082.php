 <!-- Assuming you have a layout file, adjust as needed -->

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2 pt-2">
        <div class="col d-flex flex-row justify-content-between gap-4">

            <h4 class="text-center" style="background: white; border-radius:16px; padding: 4px; width: 100%"><?php echo e(__('internet.internet')); ?></h4>
            <img src="<?php echo e(asset('assets/clarity_list-line.svg')); ?>" alt="asdas" style="width: auto; margin: 8px 16px" />
        </div>

        <div class="d-flex flex-column justify-content-between m-4 p-4">
            <form method="POST" action="<?php echo e(route('buat-transaksi')); ?>">
                <?php echo csrf_field(); ?>
                <div class="d-flex flex-column gap-1">
                    <label for="layanan" class="block text-sm font-medium text-gray-600"><?php echo e(__('internet.service')); ?></label>
                    <select id="layanan" name="layanan" class="mt-1 p-2 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
                        <option value="First Media">First Media</option>
                        <option value="Indihome">Indihome</option>
                        <option value="MNC">MNC</option>
                    </select>
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="pelanggan" class="block text-sm font-medium text-gray-600"><?php echo e(__('internet.pelanggan')); ?></label>
                    <input type="text" name="pelanggan" class="mt-1 p-2 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" required />
                    <input type="hidden" name="jenis" class="mt-1 p-2 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" value="internet" />
                </div>
                <button type="submit" style="width: 100%;" class="mt-4"><?php echo e(__('internet.check')); ?></button>
            </form>
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
<?php echo $__env->make('app.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/app/service/internet.blade.php ENDPATH**/ ?>