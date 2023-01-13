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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/laporan/index.css')); ?>" rel="stylesheet" />
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
                            <a class="nav-link active" id="pills-triwulan-tab" data-toggle="pill" href="#pills-triwulan"
                                role="tab" aria-controls="pills-triwulan" aria-selected="true">Laporan Pelayanan
                                Informasi Triwulan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-tahunan-tab" data-toggle="pill" href="#pills-tahunan"
                                role="tab" aria-controls="pills-tahunan" aria-selected="false">Laporan Pelayanan
                                Informasi Tahunan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-survey-tab" data-toggle="pill" href="#pills-survey"
                                role="tab" aria-controls="pills-survey" aria-selected="false">Laporan Hasil
                                Survei Pelayanan Informasi</a>
                        </li>
                    </ul>

                    <!--  -->

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-triwulan" role="tabpanel"
                            aria-labelledby="pills-triwulan-tab">
                            <div class="row">
                                <?php if($laporanTriwulanan): ?>
                                    <?php $__currentLoopData = $laporanTriwulanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laporanTriwulanan_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                <?php if($laporanTriwulanan_row->thumbnail_path): ?>
                                                    <img class="card-img-top isw-cardImage"
                                                        src="<?php echo e(asset('storage/' . $laporanTriwulanan_row->thumbnail_path)); ?>"
                                                        alt="Card image cap" />
                                                <?php else: ?>
                                                    <img class="card-img-top"
                                                        src="<?php echo e(asset('ppid_fe/assets/images/content/content-image/content_laporan.png')); ?>"
                                                        alt="Card image cap" />
                                                <?php endif; ?>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <?php echo e($laporanTriwulanan_row->judul_laporan); ?>

                                                    </p>

                                                    <div class="d-flex align-items-center">
                                                        <a href="<?php echo e(asset('storage/' . $laporanTriwulanan_row->file_path)); ?>"
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
                                            <?php if($laporanTriwulanan->currentPage() - 1 != 0): ?>
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanTriwulanan->previousPageUrl()); ?>"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($laporanTriwulanan->currentPage() - 1 != 0): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanTriwulanan->url($laporanTriwulanan->currentPage() - 1)); ?>"><?php echo e($laporanTriwulanan->currentPage() - 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="<?php echo e($laporanTriwulanan->url($laporanTriwulanan->currentPage())); ?>"><?php echo e($laporanTriwulanan->currentPage()); ?>

                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            <?php if($laporanTriwulanan->currentPage() < $laporanTriwulanan->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanTriwulanan->url($laporanTriwulanan->currentPage() + 1)); ?>"><?php echo e($laporanTriwulanan->currentPage() + 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($laporanTriwulanan->currentPage() != $laporanTriwulanan->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanTriwulanan->nextPageUrl()); ?>"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-tahunan" role="tabpanel"
                            aria-labelledby="pills-tahunan-tab">
                            <div class="row">
                                <?php if($laporanTahunan): ?>
                                    <?php $__currentLoopData = $laporanTahunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laporanTahunan_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                <?php if($laporanTahunan_row->thumbnail_path): ?>
                                                    <img class="card-img-top isw-cardImage"
                                                        src="<?php echo e(asset('storage/' . $laporanTahunan_row->thumbnail_path)); ?>"
                                                        alt="Card image cap" />
                                                <?php else: ?>
                                                    <img class="card-img-top"
                                                        src="<?php echo e(asset('ppid_fe/assets/images/content/content-image/content_laporan.png')); ?>"
                                                        alt="Card image cap" />
                                                <?php endif; ?>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <?php echo e($laporanTahunan_row->judul_laporan); ?>

                                                    </p>

                                                    <div class="d-flex align-items-center">
                                                        <a href="<?php echo e(asset('storage/' . $laporanTahunan_row->file_path)); ?>"
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
                                            <?php if($laporanTahunan->currentPage() - 1 != 0): ?>
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanTahunan->previousPageUrl()); ?>"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($laporanTahunan->currentPage() - 1 != 0): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanTahunan->url($laporanTahunan->currentPage() - 1)); ?>"><?php echo e($laporanTahunan->currentPage() - 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="<?php echo e($laporanTahunan->url($laporanTahunan->currentPage())); ?>"><?php echo e($laporanTahunan->currentPage()); ?>

                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            <?php if($laporanTahunan->currentPage() < $laporanTahunan->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanTahunan->url($laporanTahunan->currentPage() + 1)); ?>"><?php echo e($laporanTahunan->currentPage() + 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($laporanTahunan->currentPage() != $laporanTahunan->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanTahunan->nextPageUrl()); ?>"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-survey" role="tabpanel"
                            aria-labelledby="pills-survey-tab">
                            <div class="row">
                                <?php if($laporanHasilSurvei): ?>
                                    <?php $__currentLoopData = $laporanHasilSurvei; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laporanHasilSurvei_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                <?php if($laporanHasilSurvei_row->thumbnail_path): ?>
                                                    <img class="card-img-top isw-cardImage"
                                                        src="<?php echo e(asset('storage/' . $laporanHasilSurvei_row->thumbnail_path)); ?>"
                                                        alt="Card image cap" />
                                                <?php else: ?>
                                                    <img class="card-img-top"
                                                        src="<?php echo e(asset('ppid_fe/assets/images/content/content-image/content_laporan.png')); ?>"
                                                        alt="Card image cap" />
                                                <?php endif; ?>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <?php echo e($laporanHasilSurvei_row->judul_laporan); ?>

                                                    </p>

                                                    <div class="d-flex align-items-center">
                                                        <a href="<?php echo e(asset('storage/' . $laporanHasilSurvei_row->file_path)); ?>"
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
                                            <?php if($laporanHasilSurvei->currentPage() - 1 != 0): ?>
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanHasilSurvei->previousPageUrl()); ?>"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($laporanHasilSurvei->currentPage() - 1 != 0): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanHasilSurvei->url($laporanHasilSurvei->currentPage() - 1)); ?>"><?php echo e($laporanHasilSurvei->currentPage() - 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="<?php echo e($laporanHasilSurvei->url($laporanHasilSurvei->currentPage())); ?>"><?php echo e($laporanHasilSurvei->currentPage()); ?>

                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            <?php if($laporanHasilSurvei->currentPage() < $laporanHasilSurvei->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanHasilSurvei->url($laporanHasilSurvei->currentPage() + 1)); ?>"><?php echo e($laporanHasilSurvei->currentPage() + 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($laporanHasilSurvei->currentPage() != $laporanHasilSurvei->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($laporanHasilSurvei->nextPageUrl()); ?>"><i
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
        Beranda / Laporan
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Laporan Pelayanan Informasi
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveLaporan', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $laporanBanner->banner_path ?? '')); ?>);
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }

                        .isw-cardImage {
                            width: 100%;
                            height: 184px;
                            object-fit: cover;
                        }
                    </style>
                <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50)): ?>
<?php $component = $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50; ?>
<?php unset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50); ?>
<?php endif; ?>
<?php /**PATH /Users/anggadwiarifandi/Documents/projects.nosync/ppid_cms/resources/views/frontend/laporan/laporan.blade.php ENDPATH**/ ?>