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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/profile/struktur/index.css')); ?>" rel="stylesheet" />
    <?php $__env->stopPush(); ?>
    <!-- Informasi -->
    <section class="informasi_struktur">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_struktur"><?php echo e($strukturOrganisasi->judul ?? ''); ?></label>
                    <a href="#" download class="unduh_materi">Unduh Struktur</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                    <?php $__currentLoopData = $baganKiri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baganKiri_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>

                            <?php if($loop->index + 1 === count($baganKiri)): ?>
                                <div class="d-flex">
                                    <div class="bagan_box">
                                        
                                        <span><?php echo e($baganKiri_row->nomenklatur); ?></span>
                                    </div>
                                    <div class="triangle-left_one"></div>
                                    <div class="triangle-left_two"></div>
                                    <div class="triangle-left_three"></div>
                                </div>
                            <?php else: ?>
                                <div>
                                    <div class="bagan_box_one">
                                        <span><?php echo e($baganKiri_row->nomenklatur); ?></span>
                                    </div>
                                    <div class="triangle-down"></div>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    

                </div>
                <div class="col-md-9">
                    <div class="content_struktur">
                        <ul>
                            <?php $__currentLoopData = $baganKanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baganKanan_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_people.png')); ?>"
                                                alt="" />
                                        </div>
                                        <div class="informasi">

                                            <label for=""
                                                class="title_label"><?php echo e($baganKanan_row->nomenklatur); ?></label>
                                            <div class="description">
                                                <?php echo e($baganKanan_row->deskripsi); ?>

                                            </div>


                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi -->
     <?php $__env->slot('bannerText1', null, []); ?> 
        Profil / Struktur Organisasi
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Struktur PPID
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveProfil', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $strukturOrganisasi->banner_path ?? '')); ?>);
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

<!DOCTYPE html>
<html lang="en">
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/frontend/profil/profile-struktur-ppid.blade.php ENDPATH**/ ?>