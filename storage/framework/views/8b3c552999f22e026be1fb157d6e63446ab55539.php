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
                    <label for="" class="title_tentang_ppid"><?php echo e($profilSingkat->judul ?? ''); ?></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8" id="konten">


                    <?php echo $profilSingkat->konten ?? ''; ?>




                </div>
                <div class="col-md-4">
                    <div class="images">
                        
                        <img src="<?php echo e(asset('storage/'.$profilSingkat->side_image_path ?? '')); ?>" class="img-fluid"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
     <?php $__env->slot('bannerText1', null, []); ?> 
        Profil / Profil Singkat
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Profil Singkat
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveProfil', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <script>
                        // document.getElementById('konten').childNodes[1].className = 'informasi'
                    </script>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/'.$profilSingkat->banner_path ?? '')); ?>);
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
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/frontend/profil/profile-tentang-ppid.blade.php ENDPATH**/ ?>