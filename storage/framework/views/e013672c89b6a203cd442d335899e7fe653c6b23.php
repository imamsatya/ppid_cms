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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/profile/tugasFungsi/index.css')); ?>" rel="stylesheet" />
    <?php $__env->stopPush(); ?>
    <!-- Informasi -->
    <section class="informasi_tugas_fungsi ">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_tugas_fungsi"><?php echo e($tugasDanFungsi->judul ?? ''); ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="list_fungsi">
                        
                        <?php echo $tugasDanFungsi->konten ?? ''; ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="images">
                        <img src="<?php echo e(asset('storage/' . $tugasDanFungsi->side_image_path ?? '')); ?>" class="img-fluid"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi -->
     <?php $__env->slot('bannerText1', null, []); ?> 
        Profil / Tugas dan Fungsi
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Tugas dan Fungsi
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveProfil', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>

                <?php $__env->startPush('child-scripts'); ?>
                    
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $tugasDanFungsi->banner_path ?? '')); ?>);
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
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/frontend/profil/profile-tugas-dan-fungsi.blade.php ENDPATH**/ ?>