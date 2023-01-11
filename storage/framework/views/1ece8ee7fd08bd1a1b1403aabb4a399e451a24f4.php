<?php if (isset($component)) { $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50 = $component; } ?>
<?php $component = App\View\Components\Frontend\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Frontend\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startPush('head-scripts'); ?>
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/regulasi/index.css')); ?>" rel="stylesheet" />
    <?php $__env->stopPush(); ?>
    <!-- Filter -->
    <section class="filter-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Masukkan Kata Kunci Pencarian..." class="pl-3 filter-input" />
                    <button class="btn btn-filter">Filter</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Filter -->

    <!-- content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-peraturan-tab" data-toggle="pill"
                                href="#pills-peraturan" role="tab" aria-controls="pills-peraturan"
                                aria-selected="true">Prosedur Permohonan Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-rancangan-tab" data-toggle="pill" href="#pills-rancangan"
                                role="tab" aria-controls="pills-rancangan" aria-selected="false">Prosedur
                                Keberatan Informasi</a>
                        </li>
                    </ul>

                    <!--  -->

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-peraturan" role="tabpanel"
                            aria-labelledby="pills-peraturan-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php if($prosedurLayanan): ?>
                                        <img src="<?php echo e(asset('storage/' . $prosedurLayanan->permohonan_direktori_image)); ?>"
                                            class="w-100 img-fluid" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-rancangan" role="tabpanel"
                            aria-labelledby="pills-rancangan-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php if($prosedurLayanan): ?>
                                        <img src="<?php echo e(asset('storage/' . $prosedurLayanan->keberatan_direktori_image)); ?>"
                                            class="w-100 img-fluid" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->



     <?php $__env->slot('bannerText1', null, []); ?> 
        Standar Layanan / Prosedur
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Prosedur Pelayanan
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveStandarLayanan', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $prosedurLayanan->banner_path ?? '')); ?>);
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50)): ?>
<?php $component = $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50; ?>
<?php unset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/frontend/standarlayanan/standart-prosedur-layanan.blade.php ENDPATH**/ ?>