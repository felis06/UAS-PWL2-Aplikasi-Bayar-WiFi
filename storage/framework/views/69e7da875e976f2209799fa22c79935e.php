 <!-- Assuming you have a layout file, adjust as needed -->

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2 pt-2">
        <div class="col d-flex flex-row justify-content-between gap-4">

            <h4 class="text-center" style="background: white; border-radius:16px; padding: 4px; width: 100%"><?php echo e(__('app.layanan')); ?></h4>
            <img src="<?php echo e(asset('assets/clarity_list-line.svg')); ?>" alt="asdas" style="width: auto; margin: 8px 16px" />
        </div>

        <div class="d-flex flex-column justify-content-between">
            <div class="row p-2">
                <div class="col-lg-3 col-md-3 col-3 mb-4">
                    <a href="<?php echo e(route('internet')); ?>" style="text-decoration: none;">
                        <div class="card d-flex flex-column justify-content-center align-items-center gap-2 p-2">
                            <img src="<?php echo e(asset('assets/ic_round-wifi.svg')); ?>" alt="asdas" style="width: 52px;" />
                            <h6><?php echo e(__('app.internet')); ?></h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-3 mb-4">
                    <a href="<?php echo e(route('pulsa')); ?>" style="text-decoration: none;">
                        <div class="card d-flex flex-column justify-content-center align-items-center gap-2 p-2">
                            <img src="<?php echo e(asset('assets/carbon_phone-filled.svg')); ?>" alt="asdas" style="width: 52px;" />
                            <h6><?php echo e(__('app.pulsa')); ?></h6>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-3 mb-4">
                    <div class="card d-flex flex-column justify-content-center align-items-center gap-2 p-2">
                        <img src="<?php echo e(asset('assets/majesticons_sim-card.svg')); ?>" alt="asdas" style="width: 52px;" />
                        <h6><?php echo e(__('app.roaming')); ?></h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-3 mb-4">
                    <div class="card d-flex flex-column justify-content-center align-items-center gap-2 p-2">
                        <img src="<?php echo e(asset('assets/icomoon-free_mobile.svg')); ?>" alt="asdas" style="width: 52px;" />
                        <h6><?php echo e(__('app.paket')); ?></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-3 mb-4">
                    <div class="card d-flex flex-column justify-content-center align-items-center gap-2 p-2">
                        <img src="<?php echo e(asset('assets/ic_round-electric-bolt.svg')); ?>" alt="asdas" style="width: 52px;" />
                        <h6><?php echo e(__('app.listrik')); ?></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-3 mb-4">
                    <div class="card d-flex flex-column justify-content-center align-items-center gap-2 p-2">
                        <img src="<?php echo e(asset('assets/material-symbols-light_water-drop.svg')); ?>" alt="asdas" style="width: 52px;" />
                        <h6><?php echo e(__('app.air')); ?></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-3 mb-4">
                    <div class="card d-flex flex-column justify-content-center align-items-center gap-2 p-2">
                        <img src="<?php echo e(asset('assets/healthicons_vespa-motorcycle.svg')); ?>" alt="asdas" style="width: 52px;" />
                        <h6><?php echo e(__('app.pajak')); ?></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <h6><?php echo e(__('app.total')); ?></h6>
            <div class="bg-light d-flex flex-column justify-content-center gap p-3">
                <p style="font-weight: 500; font-size: 14px;"><?php echo e(__('app.saldo')); ?></p>
                <p style="font-weight: 700; font-size: 20px;">Rp. <span><?php echo e($user->saldo); ?></span></p>
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
<?php echo $__env->make('app.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-bayar\resources\views/app/index.blade.php ENDPATH**/ ?>