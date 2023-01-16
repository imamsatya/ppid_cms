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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/profile/visiMisi/index.css')); ?>" rel="stylesheet" />
    <?php $__env->stopPush(); ?>
    <section class="informasi_visi_misi">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="title_visi_misi"> Visi PPID </label>
                    <div class="visi_misi_box">
                        <div class="">
                            
                            <?php echo $visiMisi->visi ?? ''; ?>

                        </div>
                        <div class="half-circle-one"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="" class="title_visi_misi"> Misi PPID </label>
                    <div class="visi_misi_box">
                        <div class="list_visit_misi">
                            
                            <?php echo $visiMisi->misi ?? ''; ?>

                        </div>
                        <div class="half-circle-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <?php $__env->slot('bannerText1', null, []); ?> 
        Profil / Visi Dan Misi
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Visi Dan Misi
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveProfil', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $visiMisi->banner_path ?? '')); ?>);
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
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/frontend/profil/profile-visi-misi.blade.php ENDPATH**/ ?>