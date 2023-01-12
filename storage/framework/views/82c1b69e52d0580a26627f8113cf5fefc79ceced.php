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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/informasiPublik/index.css')); ?>" rel="stylesheet" />
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
        <div class="container bg-transparent" style="background-image: url('./storage/bg_bumn7.png');">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link <?php echo e(app('request')->input('informasi_secara_berkala') ? 'active' : null); ?> 
                            <?php echo e(count(app('request')->all()) < 1 ? 'active' : null); ?>

                            "
                            id="v-pills-berkala-tab" data-toggle="pill" href="#v-pills-berkala" role="tab"
                            aria-controls="v-pills-berkala" aria-selected="true">
                            <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_informasi.png')); ?>"
                                alt="">
                            Informasi Secara Berkala</a>
                        <a class="nav-link <?php echo e(app('request')->input('informasi_setiap_saat') ? 'active' : null); ?>"
                            id="v-pills-setiapsaat-tab" data-toggle="pill" href="#v-pills-setiapsaat" role="tab"
                            aria-controls="v-pills-setiapsaat" aria-selected="false">
                            <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_informasi.png')); ?>"
                                alt="">

                            Informasi Setiap Saat</a>
                        <a class="nav-link" id="v-pills-sertamerta-tab" data-toggle="pill" href="#v-pills-sertamerta"
                            role="tab" aria-controls="v-pills-sertamerta" aria-selected="false">
                            <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_informasi.png')); ?>"
                                alt="">

                            Informasi Serta Merta</a>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show  <?php echo e(app('request')->input('informasi_secara_berkala') ? 'show active' : null); ?> <?php echo e(count(app('request')->all()) < 1 ? 'show active' : null); ?>"
                            id="v-pills-berkala" role="tabpanel" aria-labelledby="v-pills-berkala-tab">

                            <div class="row">
                                <div class="col-md-12">
                                    <?php if($informasiSecaraBerkala): ?>
                                        <?php $__currentLoopData = $informasiSecaraBerkala; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasiSecaraBerkala_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="data_list"
                                                style="<?php echo e($informasiSecaraBerkala_row->url || $informasiSecaraBerkala_row->file_path ?? 'cursor: default'); ?>">
                                                <?php if($informasiSecaraBerkala_row->url): ?>
                                                    <span><a style="color:#104e70; font-size: 1rem;"
                                                            href="<?php echo e($informasiSecaraBerkala_row->url); ?>"><?php echo e($informasiSecaraBerkala_row->judul_informasi); ?></a></span>
                                                <?php else: ?>
                                                    <span><a style="color:#104e70; cursor: default; font-size: 1rem;"
                                                            href="javascript:void(0)"><?php echo e($informasiSecaraBerkala_row->judul_informasi); ?></a></span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>



                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <?php if($informasiSecaraBerkala->currentPage() - 1 != 0): ?>
                                                <li class="page-item ">
                                                    <a class="page-link" href="javascript:void(0)"
                                                        href="<?php echo e($informasiSecaraBerkala->previousPageUrl()); ?>"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($informasiSecaraBerkala->currentPage() - 1 != 0): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSecaraBerkala->url($informasiSecaraBerkala->currentPage() - 1)); ?>"><?php echo e($informasiSecaraBerkala->currentPage() - 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="<?php echo e($informasiSecaraBerkala->url($informasiSecaraBerkala->currentPage())); ?>"><?php echo e($informasiSecaraBerkala->currentPage()); ?>

                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            <?php if($informasiSecaraBerkala->currentPage() < $informasiSecaraBerkala->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSecaraBerkala->url($informasiSecaraBerkala->currentPage() + 1)); ?>"><?php echo e($informasiSecaraBerkala->currentPage() + 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($informasiSecaraBerkala->currentPage() != $informasiSecaraBerkala->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSecaraBerkala->nextPageUrl()); ?>"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(app('request')->input('informasi_setiap_saat') ? 'show active' : null); ?>

                            "
                            id="v-pills-setiapsaat" role="tabpanel" aria-labelledby="v-pills-setiapsaat-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php if($informasiSetiapSaat): ?>
                                                <?php $__currentLoopData = $informasiSetiapSaat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasiSetiapSaat_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="data_list">

                                                        <?php if($informasiSetiapSaat_row->url): ?>
                                                            <span><a style="color:#104e70; font-size: 1rem;"
                                                                    href="<?php echo e($informasiSetiapSaat_row->url); ?>"><?php echo e($informasiSetiapSaat_row->judul_informasi); ?></a></span>
                                                        <?php else: ?>
                                                            <span><a style="color:#104e70; cursor: default; font-size: 1rem;"
                                                                    href="javascript:void(0)"><?php echo e($informasiSetiapSaat_row->judul_informasi); ?></a></span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>



                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <?php if($informasiSetiapSaat->currentPage() - 1 != 0): ?>
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSetiapSaat->previousPageUrl()); ?>"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($informasiSetiapSaat->currentPage() - 1 != 0): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSetiapSaat->url($informasiSetiapSaat->currentPage() - 1)); ?>"><?php echo e($informasiSetiapSaat->currentPage() - 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="<?php echo e($informasiSetiapSaat->url($informasiSetiapSaat->currentPage())); ?>"><?php echo e($informasiSetiapSaat->currentPage()); ?>

                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            <?php if($informasiSetiapSaat->currentPage() < $informasiSetiapSaat->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSetiapSaat->url($informasiSetiapSaat->currentPage() + 1)); ?>"><?php echo e($informasiSetiapSaat->currentPage() + 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($informasiSetiapSaat->currentPage() != $informasiSetiapSaat->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSetiapSaat->nextPageUrl()); ?>"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(app('request')->input('informasi_serta_merta') ? 'show active' : null); ?>"
                            id="v-pills-sertamerta" role="tabpanel" aria-labelledby="v-pills-sertamerta-tab">

                            <div class="row">
                                <div class="col-md-12">
                                    <?php if($informasiSertaMerta): ?>
                                        <?php $__currentLoopData = $informasiSertaMerta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasiSertaMerta_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="data_list">
                                                <?php if($informasiSertaMerta_row->url): ?>
                                                    <span><a style="color:#104e70; font-size: 1rem;"
                                                            href="<?php echo e($informasiSertaMerta_row->url); ?>"><?php echo e($informasiSertaMerta_row->judul_informasi); ?></a></span>
                                                <?php else: ?>
                                                    <span><a style="color:#104e70; cursor: default; font-size: 1rem;"
                                                            href="javascript:void(0)"><?php echo e($informasiSertaMerta_row->judul_informasi); ?></a></span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>



                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <?php if($informasiSertaMerta->currentPage() - 1 != 0): ?>
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSertaMerta->previousPageUrl()); ?>"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($informasiSertaMerta->currentPage() - 1 != 0): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSertaMerta->url($informasiSertaMerta->currentPage() - 1)); ?>"><?php echo e($informasiSertaMerta->currentPage() - 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="#"><?php echo e($informasiSertaMerta->currentPage()); ?>

                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            <?php if($informasiSertaMerta->currentPage() < $informasiSertaMerta->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSertaMerta->url($informasiSertaMerta->currentPage() + 1)); ?>"><?php echo e($informasiSertaMerta->currentPage() + 1); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if($informasiSertaMerta->currentPage() != $informasiSertaMerta->lastPage()): ?>
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="<?php echo e($informasiSertaMerta->nextPageUrl()); ?>"><i
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
        Beranda / Informasi Publik
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Informasi Publik
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveInformasiPublik', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $informasiPublikBanner->banner_path ?? '')); ?>);
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
<?php /**PATH /Data/ppiddev2022/resources/views/frontend/informasipublik/informasi-publik.blade.php ENDPATH**/ ?>