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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/profile/tentangPPID/index.css')); ?>" rel="stylesheet" />
    <?php $__env->stopPush(); ?>
    <section class="informasi_tentang_ppid">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_tentang_ppid"><?php echo e($selectedSiaran['title']); ?></label>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="images">
                        
                        <img src="<?php echo e('https://bumn.go.id/storage/' . $selectedSiaran['image_path']); ?>" class="img-fluid"
                            alt="" />
                    </div>
                </div>
                <div class="col-md-8" id="konten">


                    <?php echo $selectedSiaran['description']; ?>




                </div>
            </div>
        </div>
    </section>
     <?php $__env->slot('bannerText1', null, []); ?> 
        Beranda / Siaran Pers
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Siaran Pers
             <?php $__env->endSlot(); ?>

            <?php $__env->startPush('child-scripts'); ?>
                <style>
                    .banner .data_banner {
                        padding-bottom: 80px;
                        margin-top: 80px;
                        background-image: url(<?php echo e(asset($regulasiBanner->banner_path)); ?>);
                        background-repeat: no-repeat;
                        /*Prevent showing multiple background images*/
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
<?php /**PATH /var/www/ppid_cms/resources/views/frontend/api_route/siaranpers.blade.php ENDPATH**/ ?>