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
                    <input type="text" placeholder="Pencarian..." class="pl-3 filter-input" />
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
                                aria-selected="true">Peraturan Keterbukaan Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-rancangan-tab" data-toggle="pill" href="#pills-rancangan"
                                role="tab" aria-controls="pills-rancangan" aria-selected="false">Rancangan
                                Peraturan Keterbukaan Informasi</a>
                        </li>
                    </ul>

                    <!--  -->

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-peraturan" role="tabpanel"
                            aria-labelledby="pills-peraturan-tab">
                            <div class="row">
                                <?php if($peraturanKIP): ?>
                                    <?php $__currentLoopData = $peraturanKIP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peraturanKIP_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4 mt-2">
                                            <div class="card card-informasi w-100">
                                                <?php if($peraturanKIP_row->thumbnail_path): ?>
                                                    <img class="card-img-top"
                                                        src="<?php echo e(asset('ppid_fe/assets/images/content/content-image/content_peraturan.png')); ?>"
                                                        alt="Card image cap" />
                                                <?php else: ?>
                                                    <img class="card-img-top"
                                                        src="<?php echo e(asset('ppid_fe/assets/images/content/content-image/content_peraturan.png')); ?>"
                                                        alt="Card image cap" />
                                                <?php endif; ?>

                                                <div class="card-body">
                                                    <p class="card-text" id="textKIP<?php echo e($loop->index); ?>">
                                                        <?php if(strlen($peraturanKIP_row->judul_peraturan) <= 70): ?>
                                                            <?php echo e($peraturanKIP_row->judul_peraturan); ?>

                                                        <?php else: ?>
                                                            <?php echo e(substr($peraturanKIP_row->judul_peraturan, 0, 70) . '...'); ?>

                                                        <?php endif; ?>
                                                    </p>
                                                    <a href="javascript:void(0)"
                                                        onclick="seeMoreJudulRegulasi(<?php echo e($loop->index); ?>)"
                                                        class="title">
                                                        <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_title.png')); ?>"
                                                            class="img-fluid" alt="" />
                                                        Lihat Judul Lengkap
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <a href="<?php echo e(asset('storage/' . $peraturanKIP_row->file_path)); ?>"
                                                            download class="unduh ml-auto">
                                                            <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_download.png')); ?>"
                                                                class="img-fluid" alt="" />
                                                            <span>Unduh / View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php endif; ?>


                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <?php if($peraturanKIP->currentPage() - 1 != 0): ?>
                                                <li class="page-item ">
                                                    <a class="page-link" href="<?php echo e($peraturanKIP->previousPageUrl()); ?>"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($peraturanKIP->currentPage() - 1 != 0): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($peraturanKIP->url($peraturanKIP->currentPage() - 1)); ?>"><?php echo e($peraturanKIP->currentPage() - 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="<?php echo e($peraturanKIP->url($peraturanKIP->currentPage())); ?>"><?php echo e($peraturanKIP->currentPage()); ?>

                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            <?php if($peraturanKIP->currentPage() < $peraturanKIP->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($peraturanKIP->url($peraturanKIP->currentPage() + 1)); ?>"><?php echo e($peraturanKIP->currentPage() + 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($peraturanKIP->currentPage() != $peraturanKIP->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link" href="<?php echo e($peraturanKIP->nextPageUrl()); ?>"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-rancangan" role="tabpanel"
                            aria-labelledby="pills-rancangan-tab">
                            <div class="row">
                                <?php if($rancanganPeraturanKIP): ?>
                                    <?php $__currentLoopData = $rancanganPeraturanKIP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rancanganPeraturanKIP_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4 mt-2">

                                            <div class="card card-informasi w-100">
                                                <?php if($peraturanKIP_row->thumbnail_path): ?>
                                                    <img class="card-img-top"
                                                        src="<?php echo e(asset('ppid_fe/assets/images/content/content-image/content_peraturan.png')); ?>"
                                                        alt="Card image cap" />
                                                <?php else: ?>
                                                    <img class="card-img-top"
                                                        src="<?php echo e(asset('ppid_fe/assets/images/content/content-image/content_peraturan.png')); ?>"
                                                        alt="Card image cap" />
                                                <?php endif; ?>
                                                <div class="card-body">
                                                    <p class="card-text" id="textRancanganKIP<?php echo e($loop->index); ?>">
                                                        <?php if(strlen($rancanganPeraturanKIP_row->judul_peraturan) <= 70): ?>
                                                            <?php echo e($rancanganPeraturanKIP_row->judul_peraturan); ?>

                                                        <?php else: ?>
                                                            <?php echo e(substr($rancanganPeraturanKIP_row->judul_peraturan, 0, 70) . '...'); ?>

                                                        <?php endif; ?>
                                                    </p>
                                                    <a href="javascript:void(0)"
                                                        onclick="seeMoreJudulRancanganRegulasi(<?php echo e($loop->index); ?>)"
                                                        class="title">
                                                        <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_title.png')); ?>"
                                                            class="img-fluid" alt="" />
                                                        Lihat Judul Lengkap
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <a href="<?php echo e(asset('storage/' . $rancanganPeraturanKIP_row->file_path)); ?>"
                                                            download class="unduh ml-auto">
                                                            <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_download.png')); ?>"
                                                                class="img-fluid" alt="" />
                                                            <span>Unduh / View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>


                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <?php if($rancanganPeraturanKIP->currentPage() - 1 != 0): ?>
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="<?php echo e($rancanganPeraturanKIP->previousPageUrl()); ?>"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($rancanganPeraturanKIP->currentPage() - 1 != 0): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($rancanganPeraturanKIP->url($rancanganPeraturanKIP->currentPage() - 1)); ?>"><?php echo e($rancanganPeraturanKIP->currentPage() - 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="<?php echo e($rancanganPeraturanKIP->url($rancanganPeraturanKIP->currentPage())); ?>"><?php echo e($rancanganPeraturanKIP->currentPage()); ?>

                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            <?php if($rancanganPeraturanKIP->currentPage() < $rancanganPeraturanKIP->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($rancanganPeraturanKIP->url($rancanganPeraturanKIP->currentPage() + 1)); ?>"><?php echo e($rancanganPeraturanKIP->currentPage() + 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($rancanganPeraturanKIP->currentPage() != $rancanganPeraturanKIP->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($rancanganPeraturanKIP->nextPageUrl()); ?>"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </nav>
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
        Beranda / Regulasi
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Regulasi
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveRegulasi', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <script type="text/javascript">
                        function seeMoreJudulRegulasi(index) {
                            let peraturanKIP = <?php echo e(Js::from($peraturanKIP)); ?>


                            peraturanKIP = peraturanKIP['data']

                            let htmlLength = document.getElementById(`textKIP${index}`)
                                .innerHTML.trim().length
                            let realLength = peraturanKIP[index]['judul_peraturan'].length

                            if ((htmlLength < 74) && (realLength > 70)) {
                                console.log('halo')
                                document.getElementById('textKIP' + index).innerHTML = peraturanKIP[index]['judul_peraturan']
                                return;
                            }

                            if ((realLength > 70) && (htmlLength > 70)) {
                                document.getElementById('textKIP' + index).innerHTML = peraturanKIP[index]['judul_peraturan']
                                    .substring(0, 70) + '...'
                                return;
                            }



                        }

                        function seeMoreJudulRancanganRegulasi(index) {

                            let rancanganPeraturanKIP = <?php echo e(Js::from($rancanganPeraturanKIP)); ?>

                            rancanganPeraturanKIP = rancanganPeraturanKIP['data']
                            let htmlLength = document.getElementById('textRancanganKIP' + index)
                                .innerHTML.trim().length
                            let realLength = rancanganPeraturanKIP[index]['judul_peraturan'].length

                            if ((htmlLength < 74) && (realLength > 70)) {
                                console.log('halo')
                                document.getElementById('textRancanganKIP' + index).innerHTML = rancanganPeraturanKIP[index][
                                    'judul_peraturan'
                                ]
                                return;
                            }

                            if ((realLength > 70) && (htmlLength > 70)) {
                                document.getElementById('textRancanganKIP' + index).innerHTML = rancanganPeraturanKIP[index][
                                        'judul_peraturan'
                                    ]
                                    .substring(0, 70) + '...'
                                return;
                            }



                        }
                    </script>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $regulasiBanner->banner_path ?? '')); ?>);
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
<?php /**PATH /Users/anggadwiarifandi/Documents/projects.nosync/ppid_cms/resources/views/frontend/regulasi/regulasi.blade.php ENDPATH**/ ?>