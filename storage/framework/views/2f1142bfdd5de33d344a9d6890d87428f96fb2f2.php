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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/standartLayanan/maklumat/index.css')); ?>" rel="stylesheet" />
    <?php $__env->stopPush(); ?>

    <!-- content -->
    <section class="content-maklumat">
        <div class="container">
            <div class="title-label">
                <div class="row">
                    <div class="col-md-12">
                        <label for=""><?php echo e($maklumat->judul ?? ''); ?></label>
                    </div>
                </div>
            </div>

            <div class="">
                
                <div class="row">
                    <?php if($maklumat): ?>
                        <div class="col-md-12">
                            <img class="img-fluid" src="<?php echo e(asset('storage/' . $maklumat->direktori_image)); ?>"
                                alt="">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->


     <?php $__env->slot('bannerText1', null, []); ?> 
        Standar Layanan / Maklumat
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Maklumat
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveStandarLayanan', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $maklumat->banner_path ?? '')); ?>);
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
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/frontend/standarlayanan/standart-maklumat.blade.php ENDPATH**/ ?>