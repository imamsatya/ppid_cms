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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/faq/index.css')); ?>" rel="stylesheet" />
        <style>
            p::first-letter {
                text-transform: none;
            }

            p {
                text-transform: none;
            }

            span {
                text-transform: none;
            }
        </style>
    <?php $__env->stopPush(); ?>
    <!-- Content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pl-5 pr-5">
                    <!-- <p class="informasi_title">
                        Dibawah ini adalah beberapa pertanyaan umum dan beberapa prosedur
                        dalam pengajuan permohonan informasi publik atau pengajuan
                        keberatan atas informasi publik di lingkup Kementerian Badan Usaha
                        Milik Negara.
                    </p> -->
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 pl-5 pr-5">
                    <div id="accordion">
                        <?php if($faq): ?>
                            <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card">
                                    <div class="card-header" id="<?php echo e('heading' . $loop->index); ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link w-100 d-flex align-items-center"
                                                data-toggle="collapse" data-target="<?php echo e('#collapse' . $loop->index); ?>"
                                                aria-expanded="true" aria-controls="<?php echo e('collapse' . $loop->index); ?>">
                                                <?php echo e($faq_row->pertanyaan); ?>


                                                <span class="ml-auto">+</span>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="<?php echo e('collapse' . $loop->index); ?>" class="collapse show"
                                        aria-labelledby="<?php echo e('heading' . $loop->index); ?>" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php echo $faq_row->jawaban; ?>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->



     <?php $__env->slot('bannerText1', null, []); ?> 
        Beranda / FAQ
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            FAQ
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveFaq', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset($faqBanner->banner_path ?? '')); ?>);
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
<?php /**PATH /Data/ppiddev2022/resources/views/frontend/faq/faq.blade.php ENDPATH**/ ?>