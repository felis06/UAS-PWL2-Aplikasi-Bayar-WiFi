 <!-- Assuming you have a layout file, adjust as needed -->

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2 pt-2">
        <div class="col d-flex flex-row justify-content-between gap-4 p-2">
            <img src="<?php echo e(asset('assets/clarity_list-line.svg')); ?>" alt="asdas" style="width: auto; margin: 8px 16px" />
            <h4 class="text-center" style=" width: 100%">Pembayaran</h4>
            <img src="<?php echo e(asset('assets/clarity_list-line.svg')); ?>" alt="asdas" style="width: auto; margin: 8px 16px" />
        </div>

        <div class="d-flex flex-column justify-content-between m-4 p-2 bg-white gap-2">
            <div class="d-flex flex-column justify-content-center align-items-center gap-1">
                <label>No. Tagihan</label>
                <h6><?php echo e($transaksi->nomer_transaksi); ?></h6>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center gap-1">
                <label>Total Tagihan</label>
                <h6><?php echo e($transaksi->total); ?></h6>
            </div>
        </div>

        <div class="d-flex flex-column justify-content-between m-4 p-2 gap-2">
            <span style="font-weight: 500; font-size: 14px;">Metode Pembayaran</span>
            <span class="p-2 rounded" style="width: fit-content; font-weight: 500; background:blue; color:#ffffff">
                BCA MOBILE
            </span>
            <a href="<?php echo e(route('transfer')); ?>" class="w-full bg-white rounded p-2 text-center mt-5" style="text-decoration: none; color: #111111;font-weight: 500;">Lanjutkan</a>
        </div>

    </div>


    <!-- <div class="d-flex justify-content-center align-items-center" style="position: fixed; bottom:0; background: white; padding: 0"> -->
    <div class="d-flex flex-row justify-content-center align-items-center p-4" style="bottom:0;width: 100%;gap: 16px">
        <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
            <img src="<?php echo e(asset('assets/bxs_home.svg')); ?>" alt="asdasd" style="width: 48px;" />
        </div>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
            <img src="<?php echo e(asset('assets/iconamoon_profile-circle-fill.svg')); ?>" alt="asdasd" style="width: 48px;" />
        </div>
    </div>

    <!-- </div> -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/app/service/transaksi/pembayaran.blade.php ENDPATH**/ ?>