 <!-- Assuming you have a layout file, adjust as needed -->

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2">
        <div class="col d-flex flex-row justify-content-between gap-4 bg-white">
            <h4 class="text-center p-4" style="width: 100%">M-Transfer</h4>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center m-4 p-2 gap-2">
            <div class=" bg-white p-4" style="width: 320px;">

                <h6>M-Trasnfer</h6>
                <h6><?php echo e($transaksi->nomer_transaksi); ?></h6>
                <h6><?php echo e($detail['jenis_transaksi']); ?></h6>
                <h6>Total <?php echo e($transaksi->total); ?></h6>
                <h6>Dari <?php echo e($user->telp); ?></h6>
            </div>
        </div>

        <div class="d-flex flex-row gap-3 justify-content-center align-items-center p-4">
            <a href="" class="p-2 text-center" style="background: gray; color: #111111; font-weight: 500; text-decoration: none; width: 100%">Cancel</a>
            <a href="<?php echo e(route('transfer-pin', $transaksi->id)); ?>" class="p-2 text-center" style="background: blue; color: #ffffff; font-weight: 500; text-decoration: none; width: 100%;">Ok</a>
        </div>

    </div>

    <!-- </div> -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/app/service/transaksi/transferDetail.blade.php ENDPATH**/ ?>