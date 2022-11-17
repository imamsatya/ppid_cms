<x-frontend.layout>
    @push('head-scripts')
        <title>PPID KBUMN</title>
        <!-- Favicon -->
        <link href="{{ asset('ppid_fe/assets/images/content/logo/favicon.ico') }}" rel="icon" />
        <link href="{{ asset('ppid_fe/assets/css/page/home/index.css') }}" rel="stylesheet" />
        <link href="{{ asset('ppid_fe/assets/css/navbar/animate.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('ppid_fe/assets/float/float.css') }}" />
        <link rel="stylesheet" href="{{ asset('ppid_fe/assets/float/fab.css') }}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .bwstyle {
                -moz-filter: grayscale(100%);
                -webkit-filter: grayscale(100%);
                filter: gray;
                /* IE6-9 */
                filter: grayscale(100%);
            }

            .posfix {
                position: fixed !important;
            }

            .zoomed {
                zoom: 0.9;
                /*transform: scale(0.9);*/
                /*-moz-transform: scale(0.9);*/
                /*-moz-transform-origin: 0 0;*/
            }

            .delay-1 {
                animation-delay: .25s;
            }

            .delay-2 {
                animation-delay: .5s;
            }

            .delay-3 {
                animation-delay: .75s;
            }

            .delay-4 {
                animation-delay: 1s;
            }
        </style>
        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .bwstyle {
                -moz-filter: grayscale(100%);
                -webkit-filter: grayscale(100%);
                filter: gray;
                /* IE6-9 */
                filter: grayscale(100%);
            }

            .posfix {
                position: fixed;
            }
        </style>
    @endpush
    <!-- Banner -->
    <div class="container-fluid p-0 pb-5 wow fadeIn blackw magnif" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative"
                style="background-image: url({{ asset('ppid_fe/assets/images/content/content-image/carousel-1.jpg') }})">
                <!-- <img
            class="img-fluid"
            src="./assets/images/content/content-image/carousel-1.jpg"
            alt="" /> -->
                <div class="container title-banner">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated fadeInDown delay-2">
                                Selamat Datang <br />
                                Di PPID KBUMN
                            </h1>
                            <p class="fs-6 fw-medium text-white mb-4 pb-3 animated fadeInDown delay-3">
                                Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam
                                <br>
                                justo clita et kasd rebum sea elitr.
                            </p>
                            <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative"
                style="background-image: url({{ asset('ppid_fe/assets/images/content/content-image/carousel-2.jpg') }}">
                <!-- <img
            class="img-fluid"
            src="./assets/images/content/content-image/carousel-2.jpg"
            alt="" /> -->
                <div class="container title-banner">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">
                                Lorem Ipsum Dolor sit Amet
                            </h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3 animated slideInDown">
                                Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et
                                <br>
                                diam justo clita et kasd rebum sea elitr.
                            </p>
                            <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="col-md-3 box_publik">
                        <div class="content_publik">
                            <img class="img-fluid img_center"
                                src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi_berkala.png') }}"
                                alt="" />
                            <div class="informasi_content">
                                <label for="">Informasi Berkala</label>
                                <p>
                                    Informasi yang Wajib Disediakan dan Diumumkan Secara Berkala
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 box_publik">
                        <div class="content_publik">
                            <img class="img-fluid img_center"
                                src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi_sertamerta.png') }}"
                                alt="" />
                            <div class="informasi_content">
                                <label for="">Informasi Serta Merta</label>
                                <p>
                                    Informasi yang dapat mengancam Hajat Hidup Orang Banyak dan
                                    Ketertiban Umum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 box_publik">
                        <div class="content_publik">
                            <img class="img-fluid img_center"
                                src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi_setiapsaat.png') }}"
                                alt="" />
                            <div class="informasi_content">
                                <label for="">Informasi Setiap Saat</label>
                                <p>Informasi yang Wajib Tersedia Setiap Saat</p>
                            </div>
                        </div>
                    </div>
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
                                            src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi_grey.png') }}"
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <img class="card-img-top img-fluid"
                                            src="{{ asset('ppid_fe/assets/images/content/content-image/content_speaking.jpg') }}"
                                            alt="Card image cap" />
                                        <div class="card-body">
                                            <span class="card-title">02 AGUSTUS 2022</span>
                                            <p class="card-text mt-2">
                                                Jasindo Perkuat Digitalisasi di Bulan Kemerdekaan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <img class="card-img-top img-fluid"
                                            src="{{ asset('ppid_fe/assets/images/content/content-image/content_speaking.jpg') }}"
                                            alt="Card image cap" />
                                        <div class="card-body">
                                            <span class="card-title">02 AGUSTUS 2022</span>
                                            <p class="card-text mt-2">
                                                Jasindo Perkuat Digitalisasi di Bulan Kemerdekaan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row outer_custom">
                                <div class="col-md-12">
                                    <iframe class="w-100 video-galeri" height="315"
                                        src="https://www.youtube.com/embed/1mTtJLE2y1w" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/53agHpqOGj8" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center pt-5">
                        <h2 style="font-weight: bold;">
                            Pengajuan Permohonan, Keberatan Informasi Publik dan/atau cek
                            status
                        </h2>
                        <button class="mt-4 btn btn-lg btn-outline-primary-ppid">
                            Klik Disini
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="cont" class="posfix"></div>
    <!-- Galeri -->

    @push('child-scripts')
        <script src="{{ asset('ppid_fe/assets/float/fab.js') }}"></script>
        <!-- <img src="assets/images/content/icon/difable.png" width="75%"> -->
        <script type="text/javascript">
            var fab = new Fab({
                selector: "#cont",
                button: {
                    style: "large teal",
                    html: "",
                },
                icon: {
                    style: `{{ URL::asset('ppid_fe/assets/images/content/icon/difable.png') }}  " width="75%`,
                    html: "",
                },
                // "top-left" || "top-right" || "bottom-left" || "bottom-right"
                position: "bottom-left",
                // "horizontal" || "vertical"
                direction: "vertical",
                buttons: [{
                        button: {
                            style: "small blue",
                            html: "",
                        },
                        icon: {
                            style: `{{ URL::asset('ppid_fe/assets/images/content/icon/mag-zin.png') }} " width="55%'`,
                            html: "",
                        },
                        link: {
                            style: "increaseFont",
                            html: "",
                        },
                        valuenya: {
                            style: "increase",
                            html: "",
                        },
                        onClick: function() {
                            console.log("fire");
                        },
                    },
                    {
                        button: {
                            style: "small blue",
                            html: "",
                        },
                        icon: {
                            style: `{{ URL::asset('ppid_fe/assets/images/content/icon/mag-zout.png') }}" width="55%`,
                            html: "",
                        },
                        link: {
                            style: "decreaseFont",
                            html: "",
                        },
                        valuenya: {
                            style: "decrease",
                            html: "",
                        },
                        onClick: function() {
                            console.log("ice");
                        },
                    },
                    {
                        button: {
                            style: "small blue",
                            html: "",
                        },
                        icon: {
                            style: `{{ URL::asset('ppid_fe/assets/images/content/icon/eye.png') }}" width="75%'`,
                            html: "",
                        },
                        link: {
                            style: "",
                            html: "",
                        },
                        valuenya: {
                            style: "eye",
                            html: "",
                        },

                        onClick: function() {
                            var element = document.getElementsByClassName("blackw");
                            console.log(element);

                            for (let elm of element) {
                                console.log(elm);
                                if (elm.classList.contains("bwstyle"))
                                    elm.classList.remove("bwstyle");
                                else elm.classList.add("bwstyle");
                            }

                            console.log(document.getElementsByClassName("blackw").classList);
                        },
                    },
                    // {
                    //   button: {
                    //     style: "small green",
                    //     html: ""
                    //   },
                    //   icon:{
                    //     style: "chart pie icon",
                    //     html: ""
                    //   },
                    //   onClick: function(){
                    //     console.log("ice");
                    //   }
                    // }
                ],
                onOpen: function() {},
                onClose: function() {},
            });
            console.log('fab', fab)
        </script>
        <script type="text/javascript">
            var currSize = 1.00;
            $(document).ready(function() {
                $(".increaseFont,.decreaseFont").click(function() {
                    var type = $(this).val();
                    // var curFontSize = $("#magnif").css("zoom");
                    var curFontSize = $(".magnif").css("transform");

                    if (type == "increase") {
                        // $("#magnif").css("zoom", parseFloat(curFontSize) + 0.01);
                        currSize += 0.01;

                    } else {
                        // $("#magnif").css("zoom", parseFloat(curFontSize) - 0.01);
                        currSize -= 0.01;
                    }
                    $(".magnif").css("transform", 'scale(' + currSize + ')');

                    // alert($('.magnify').css('font-size'));
                });
            });
        </script>
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
                        items: 1,
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
                    "<div class='nav-button owl-prev-custom'><img src='{{ asset('ppid_fe/assets/images/content/content-image/down-arrow.png') }}'></div>",
                    "<div class='nav-button owl-next-custom'><img src='{{ asset('ppid_fe/assets/images/content/content-image/up-arrow.png') }}'></div>",
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
    @endpush




</x-frontend.layout>
