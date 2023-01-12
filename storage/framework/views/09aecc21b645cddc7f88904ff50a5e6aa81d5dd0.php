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
        <title>PPID KBUMN</title>
        <!-- Favicon -->
        <link href="<?php echo e(asset('ppid_fe/assets/images/content/logo/favicon.ico')); ?>" rel="icon" />
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/home/index.css')); ?>" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo e(asset('ppid_fe/assets/float/float.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('ppid_fe/assets/float/fab.css')); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
    <?php $__env->stopPush(); ?>
    <!-- Banner -->
    <div class="container-fluid p-0 pb-5 wow fadeIn blackw magnif" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">

            <?php if($slider): ?>
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="owl-carousel-item position-relative"
                        style="background-image: url(<?php echo e(asset('storage/' . $slider_row->image_path)); ?>">
                        <!-- <img
                        class="img-fluid"
                        src="./assets/images/content/content-image/carousel-2.jpg"
                        alt="" /> -->
                        <div class="container title-banner">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown">
                                        <?php echo $slider_row->judul; ?>

                                    </h1>
                                    <p class="fw-medium text-white mb-4 pb-3 animated slideInDown"
                                        style="font-size: 24px;">
                                        
                                        <?php echo $slider_row->deskripsi; ?>

                                    </p>
                                    <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Carousel Start -->

    <!-- Carousel End -->
    <!-- <section class="carousel_slider blackw">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./assets/images/content/content-image/content_banner_1.png"
              class="d-block w-100"
              alt="..." />
          </div>
          <div class="carousel-item">
            <img
              src="./assets/images/content/content-image/content_banner_2.png"
              class="d-block w-100"
              alt="..." />
          </div>
        </div>
      </div>
    </section> -->
    <!-- Banner -->

    <!-- Informasi Publik -->
    <section class="publik blackw magnif">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="" class="title wow fadeInUp" data-wow-delay="0.1s">Informasi Publik</label>
                </div>
            </div>
            <div class="informasi_publik">
                <div class="row pt-4">
                    <div class="col-md-3"></div>
                    <?php if($informasi): ?>
                        <?php $__currentLoopData = $informasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasi_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 box_publik">
                                <div class="content_publik">
                                    <a href="<?php echo e(route('informasipublik.index')); ?>">
                                        <img class="img-fluid img_center"
                                            src="<?php echo e(asset('storage/' . $informasi_row->image_path)); ?>" alt="" />
                                        <div class="informasi_content">
                                            <label for=""><?php echo e($informasi_row->judul); ?></label>
                                            <p>
                                                <?php echo e($informasi_row->deskripsi); ?>

                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi Publik -->

    <!-- Statistik dan Siaran Pers -->
    <section class="statistik_pers mt-5 blackw magnif">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="statistik">
                        <label for="">Statistik</label>
                        <p class="sub_title">Permohonan Informasi Publik</p>
                        <div class="card">
                            <div class="card-top">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <span class="tahun">Tahun 2022</span>
                                    </div>
                                    <div class="ml-auto">
                                        <img class="img-fluid"
                                            src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_informasi_grey.png')); ?>"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas height="180vh" id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="pers">
                        <div class="d-flex">
                            <div>
                                <label for="">Siaran Pers</label>

                            </div>
                            <div class="ml-auto"></div>
                        </div>
                        <div class="slider owl-carousel carousel_custom">

                            <?php for($i = 0; $i < count($siaranPers); $i++): ?>
                                <div class="row">
                                    <a href="<?php echo e(route('siaranpers.show', $siaranPers[$i]['id'])); ?>">


                                        <div class="col-md-12">
                                            <div class="card">
                                                <img class="card-img-top img-fluid"
                                                    src="<?php echo e('https://bumn.go.id/storage/' . $siaranPers[$i]['image_path']); ?>"
                                                    alt="Card image cap" />
                                                <div class="card-body">
                                                    <span class="card-title">
                                                        <?php echo e($siaranPers[$i]['tanggal_publish']); ?></span>
                                                    <p class="card-text mt-2">


                                                        <?php echo e($siaranPers[$i]['title']); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Statistik dan Siaran Pers -->

    <!-- Galeri -->
    <section class="galeri_video blackw magnif">
        <div class="container">
            <div class="box_galeri">
                <div class="row">
                    <div class="col-md-6">
                        <label class="title">Galeri Video</label>
                        <div class="slider_video owl-carousel ">
                            
                            <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <iframe width="560" height="315" src="<?php echo e($video_row->url); ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                    <div class="col-md-6 text-center pt-5">
                        <h2 style="font-weight: bold;">
                            Pengajuan Permohonan, Keberatan Informasi Publik dan/atau cek
                            status
                        </h2>
                        <a href="<?php echo e(route('userppid.login')); ?>">
                            <button class="mt-4 btn btn-lg btn-outline-primary-ppid">
                                Klik Disini
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->

    <?php $__env->startPush('child-scripts'); ?>
        <script>
            $(".slider").owlCarousel({
                loop: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 2,
                    },
                },
                nav: true,
                navText: [
                    "<div class='nav-button owl-prev'><i class='fa fa-chevron-left'/></div>",
                    "<div class='nav-button owl-next'><i class='fa fa-chevron-right'/></div>",
                ],
                autoplayTimeout: 5000, //2000ms = 2s;
                autoplayHoverPause: true,
                // <i class="fa fa-arrow-left" aria-hidden="true"></i>
            });
        </script>
        <script>
            $(".header-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 1,
                    },
                },
                nav: true,

                navText: [
                    "<div class='nav-button owl-prev-custom'><img src='<?php echo e(asset('ppid_fe/assets/images/content/content-image/down-arrow.png')); ?>'></div>",
                    "<div class='nav-button owl-next-custom'><img src='<?php echo e(asset('ppid_fe/assets/images/content/content-image/up-arrow.png')); ?>'></div>",
                ],
                autoplayTimeout: 5000, //2000ms = 2s;
                autoplayHoverPause: true,
                // <i class="fa fa-arrow-left" aria-hidden="true"></i>
            });
        </script>
        <script>
            $(".slider_video").owlCarousel({
                loop: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 1,
                    },
                },
                nav: true,

                navText: [
                    "<div class='nav-button owl-prev'><i class='fa fa-chevron-down'/></div>",
                    "<div class='nav-button owl-next'><i class='fa fa-chevron-up'/></div>",
                ],
                autoplayTimeout: 5000, //2000ms = 2s;
                autoplayHoverPause: true,
                // <i class="fa fa-arrow-left" aria-hidden="true"></i>
            });
        </script>
        <script>
            function clickSearch() {
                let header = document.getElementById("headerNav");
                let searchData = document.getElementById("searchComponent");
                if (searchData.style.display === `none`) {
                    searchData.style.display = "block";
                    searchData.style.boxShadow = "0 5px 10px rgb(0 0 0 / 10%)";
                    header.style.boxShadow = "none";
                } else {
                    searchData.style.display = "none";
                    searchData.transition = " all .35s ease-in-out";
                    header.style.boxShadow = "0 5px 10px rgb(0 0 0 / 10%)";
                }
            }
        </script>
        <script>
            const labels = ["January", "February", "March", "April", "May", "June"];

            const data = {
                labels: labels,
                datasets: [{
                        label: "My First dataset",
                        backgroundColor: "#92E5E",
                        borderColor: "#92E5EB",
                        data: [0, 10, 5, 2, 20, 30, 45],
                    },
                    {
                        label: "My First dataset",
                        backgroundColor: "#104E70",
                        borderColor: "#104E70",
                        data: [0, 2, 40, 2, 20, 100, 20],
                    },
                ],
            };

            const config = {
                type: "line",
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        htmlLegend: {
                            // ID of the container to put the legend in
                            containerID: "legend-container",
                        },
                        legend: {
                            position: "bottom",
                        },
                    },
                },
            };

            const myChart = new Chart(document.getElementById("myChart"), config);
        </script>

        <style>
            .publik .informasi_publik {
                width: 100%;
                height: 400px;
                background-size: 340px 400px;
                background-repeat: no-repeat;
                background-image: url(<?php echo e(asset('storage/' . $informasiImage->sideimage_path ?? '')); ?>);
            }

            .publik .informasi_publik .box_publik {
                width: 100%;
                height: 351px;
                background-size: 256px 351px;
                background-repeat: no-repeat;
                background-image: url(<?php echo e(asset('storage/' . $informasiImage->backgroundimage_path ?? '')); ?>);
                z-index: 1;
                filter: drop-shadow(11px 14px 10px #EFEFEF);
                transition: all .8s ease-in-out;
            }

            @media (min-width: 320px) and (max-width: 880px) {
                /* Styles here */

                .publik .informasi_publik {
                    background-image: none;
                }

                .informasi_publik .content_publik img {
                    max-width: none;
                    max-height: none;
                    width: 62%;
                    height: auto;
                    margin: auto;
                    margin-top: 42px;
                }

                .informasi_publik .content_publik .informasi_content {
                    margin: 19px 0px 0px 70px;
                }

                .publik .informasi_publik .box_publik {
                    width: 100%;
                    height: 351px;
                    z-index: 1;
                    filter: drop-shadow(11px 14px 10px #EFEFEF);
                    transition: all .8s ease-in-out;
                    background: radial-gradient(ellipse at center, rgba(101, 193, 230, 1) 0%, rgba(101, 193, 230, 1) 2%, rgba(173, 233, 250, 1) 28%, rgba(255, 255, 255, 1) 58%, rgba(255, 255, 255, 1) 100%);
                    background: -moz-radial-gradient(center, ellipse cover, rgba(101, 193, 230, 1) 0%, rgba(101, 193, 230, 1) 2%, rgba(173, 233, 250, 1) 28%, rgba(255, 255, 255, 1) 58%, rgba(255, 255, 255, 1) 100%);
                }


            }
        </style>
    <?php $__env->stopPush(); ?>




 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50)): ?>
<?php $component = $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50; ?>
<?php unset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50); ?>
<?php endif; ?>
<?php /**PATH /Users/anggadwiarifandi/Documents/projects.nosync/ppid_cms/resources/views/index.blade.php ENDPATH**/ ?>