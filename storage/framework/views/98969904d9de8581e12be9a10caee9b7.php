 <!-- Assuming you have a layout file, adjust as needed -->

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2">
        <div class="col d-flex flex-row justify-content-between gap-4 bg-white">
            <h4 class="text-center p-4" style="width: 100%">M-Transfer</h4>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center m-4 p-2 gap-2">
            <div class=" bg-white p-4" style="width: 320px;">
                <form method="POST" action="<?php echo e(route('bayar')); ?>">
                    <?php echo csrf_field(); ?>
                    <h6>PIN W-PAY</h6>
                    <input type="password" name="pin" class="mt-1 p-2 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" required />
                    <input type="hidden" name="tagihan" class="mt-1 p-2 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" value="<?php echo e($transaksi['id']); ?>" />
                    <div class="d-flex flex-row gap-3 justify-content-center align-items-center p-4">
                        <button class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Ok</button>
                    </div>
                </form>
            </div>
        </div>



    </div>

    <!-- </div> -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/app/service/transaksi/transferPin.blade.php ENDPATH**/ ?>