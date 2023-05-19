<x-frontend.layout>
    @push('head-scripts')
        <title>PPID KBUMN</title>
        <!-- Favicon -->
<<<<<<< HEAD
        <link href="{{ asset('/ppid_fe/assets/images/content/logo/favicon.ico') }}" rel="icon" />
        <link href="{{ asset('/ppid_fe/assets/css/page/home/index.css') }}" rel="stylesheet" />

        {{-- <link rel="stylesheet" href="{{ asset('ppid_fe/assets/float/float.css') }}" />
        <link rel="stylesheet" href="{{ asset('ppid_fe/assets/float/fab.css') }}" /> --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}


        {{-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" /> --}}
    @endpush
    <!-- Banner -->
    <div class="container-fluid p-0 pb-5 wow fadeIn blackw magnif" data-wow-delay="0.3s" data-wow-duration="5s">
=======
        <link href="{{ asset('ppid_fe/assets/images/content/logo/favicon.ico') }}" rel="icon" />
        <link href="{{ asset('ppid_fe/assets/css/page/home/index.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('ppid_fe/assets/float/float.css') }}" />
        <link rel="stylesheet" href="{{ asset('ppid_fe/assets/float/fab.css') }}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
    @endpush
    <!-- Banner -->
    <div class="container-fluid p-0 pb-5 wow fadeIn blackw magnif" data-wow-delay="0.1s">
>>>>>>> origin/main
        <div class="owl-carousel header-carousel position-relative">

            @if ($slider)
                @foreach ($slider as $slider_row)
                    <div class="owl-carousel-item position-relative"
<<<<<<< HEAD
                        style="background-image: url({{ Storage::url($slider_row->image_path) }}">
=======
                        style="background-image: url({{ asset($slider_row->image_path) }}">
>>>>>>> origin/main
                        <!-- <img
                        class="img-fluid"
                        src="./assets/images/content/content-image/carousel-2.jpg"
                        alt="" /> -->
                        <div class="container title-banner">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown">
                                        {!! $slider_row->judul !!}
                                    </h1>
                                    <p class="fw-medium text-white mb-4 pb-3 animated slideInDown"
                                        style="font-size: 24px;">
                                        {{-- Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et
                                        <br>
                                        diam justo clita et kasd rebum sea elitr. --}}
                                        {!! $slider_row->deskripsi !!}
                                    </p>
                                    <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
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
<<<<<<< HEAD
=======

>>>>>>> origin/main
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
                    @if ($informasi)
                        @foreach ($informasi as $informasi_row)
                            <div class="col-md-3 box_publik">
                                <div class="content_publik">
                                    <a href="{{ route('informasipublik.index') }}">
<<<<<<< HEAD
                                        <img class="img-fluid img_center"
                                            src="{{ Storage::url($informasi_row->image_path) }}" alt="" />
=======
                                        <img class="img-fluid img_center" src="{{ asset($informasi_row->image_path) }}"
                                            alt="" />
>>>>>>> origin/main
                                        <div class="informasi_content">
                                            <label for="">{{ $informasi_row->judul }}</label>
                                            <p>
                                                {{ $informasi_row->deskripsi }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="col-md-3 box_publik">
                        <div class="content_publik">
                            <img class="img-fluid img_center"
                                src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi_berkala.png') }}"
                                alt="" />
                            <div class="informasi_content">
                                <label for="">Informasi Berkala</label>
                                <p>
<<<<<<< HEAD
                                    Informasi yang wajib disediakan dan diumumkan Secara Berkala
=======
                                    Informasi yang Wajib Disediakan dan Diumumkan Secara Berkala
>>>>>>> origin/main
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
<<<<<<< HEAD
                                    Informasi yang dapat mengancam hajat hidup orang banyak dan
                                    ketertiban umum
=======
                                    Informasi yang dapat mengancam Hajat Hidup Orang Banyak dan
                                    Ketertiban Umum
>>>>>>> origin/main
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
<<<<<<< HEAD
                                <p>Informasi yang wajib tersedia Setiap Saat</p>
=======
                                <p>Informasi yang Wajib Tersedia Setiap Saat</p>
>>>>>>> origin/main
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi Publik -->

    <!-- Statistik dan Siaran Pers -->
    <section class="statistik_pers mt-5 blackw magnif">
<<<<<<< HEAD
        <div class="container bg-transparent" style="background-image: url('./storage/bg_bumn9.png');">
=======
        <div class="container">
>>>>>>> origin/main
            <div class="row">
                <div class="col-md-5">
                    <div class="statistik">
                        <label for="">Statistik</label>
                        <p class="sub_title">Permohonan Informasi Publik</p>
                        <div class="card">
                            <div class="card-top">
                                <div class="d-flex align-items-center">
                                    <div class="">
<<<<<<< HEAD
                                        <span class="tahun">Tahun {{ date('Y') }}</span>
=======
                                        <span class="tahun">Tahun 2022</span>
>>>>>>> origin/main
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

                            @for ($i = 0; $i < count($siaranPers); $i++)
                                <div class="row">
                                    <a href="{{ route('siaranpers.show', $siaranPers[$i]['id']) }}">


                                        <div class="col-md-12">
                                            <div class="card">
                                                <img class="card-img-top img-fluid"
                                                    src="{{ 'https://bumn.go.id/storage/' . $siaranPers[$i]['image_path'] }}"
<<<<<<< HEAD
                                                    alt="Card image cap" style="width: 100%;height: auto;" />
=======
                                                    alt="Card image cap" />
>>>>>>> origin/main
                                                <div class="card-body">
                                                    <span class="card-title">
                                                        {{ $siaranPers[$i]['tanggal_publish'] }}</span>
                                                    <p class="card-text mt-2">


                                                        {{ $siaranPers[$i]['title'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endfor
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
<<<<<<< HEAD
            <div class="box_galeri bg-transparent" style="background-image: url('./storage/bg_bumn9.png');">
                <!-- <div class="box_galeri"> -->
=======
            <div class="box_galeri">
>>>>>>> origin/main
                <div class="row">
                    <div class="col-md-6">
                        <label class="title">Galeri Video</label>
                        <div class="slider_video owl-carousel ">
<<<<<<< HEAD
                            @foreach ($video as $video_row)
                                <div class="row {{ $loop->index < 1 ? 'outer_custom' : null }}">
                                    <div class="col-md-12">
                                        <iframe class="w-100 video-galeri" height="315"
                                            src="{{ $video_row->url }}" title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            @endforeach


                            {{-- <div class="row">
                                <div class="col-md-12">
                                    <iframe width="560" height="315"
=======
                            {{-- <div class="row outer_custom">
                                <div class="col-md-12">
                                    <iframe class="w-100 video-galeri" height="315"
>>>>>>> origin/main
                                        src="https://www.youtube.com/embed/1mTtJLE2y1w" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
<<<<<<< HEAD
                            </div> --}}
                            {{-- @foreach ($video as $video_row)
=======
                            </div>
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1mTtJLE2y1w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div> --}}
                            @foreach ($video as $video_row)
>>>>>>> origin/main
                                <div class="row ">
                                    <div class="col-md-12">
                                        <iframe width="560" height="315" src="{{ $video_row->url }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
<<<<<<< HEAD
                            @endforeach --}}
=======
                            @endforeach
>>>>>>> origin/main

                        </div>
                    </div>
                    <div class="col-md-6 text-center pt-5">
                        <h2 style="font-weight: bold;">
                            Pengajuan Permohonan, Keberatan Informasi Publik dan/atau cek
                            status
<<<<<<< HEAD
                        </h2>
                        {{-- <a href="{{ route('userppid.login') }}">
                            <button class="mt-4 btn btn-lg btn-outline-primary-ppid">
                                Klik Disini
                            </button>
                        </a> --}}
=======
                        </h2>   
                        <a href="{{ route('userppid.login') }}">
                        <button class="mt-4 btn btn-lg btn-outline-primary-ppid">
                            Klik Disini
                        </button>
                        </a>
>>>>>>> origin/main
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->

    @push('child-scripts')
        <script>
            $(".slider").owlCarousel({
<<<<<<< HEAD
                navigation: true,
=======
>>>>>>> origin/main
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
<<<<<<< HEAD
                smartSpeed: 1500,
=======
>>>>>>> origin/main
                // <i class="fa fa-arrow-left" aria-hidden="true"></i>
            });
        </script>
        <script>
            $(".header-carousel").owlCarousel({
<<<<<<< HEAD
                navigation: true,
=======
>>>>>>> origin/main
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
<<<<<<< HEAD
                smartSpeed: 1000,
=======
>>>>>>> origin/main
                // <i class="fa fa-arrow-left" aria-hidden="true"></i>
            });
        </script>
        <script>
            $(".slider_video").owlCarousel({
<<<<<<< HEAD
                navigation: true,
=======
>>>>>>> origin/main
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
<<<<<<< HEAD
                smartSpeed: 1000,
=======
>>>>>>> origin/main
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
<<<<<<< HEAD
            $(document).ready(function() {
                const labels = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", 'Juli', 'Agustus', 'September',
                    'Oktober',
                    'November', 'Desember'
                ];


                // const dataStatistik = () => {
                //     return $.ajax({
                //         type: 'GET',
                //         url: "data-statistik",
                //         dataType: 'json'
                //     });
                // }

                const dataStatistik = {{ Js::from($dataStatistik) }};
                const dataPermohonanMasuk = {{ Js::from($dataPermohonanMasuk) }}

                // console.log('dataS', dataStatistik)
                let dataMasuk = dataStatistik.filter(item => item.status_final == 'masuk')
                let dataProses = dataStatistik.filter(item => item.status_final == 'proses')
                let dataDitolak = dataStatistik.filter(item => item.status_final == 'ditolak')
                let dataSelesai = dataStatistik.filter(item => item.status_final == 'selesai')
                // console.log('datamasuk', dataMasuk)
                // console.log('dataproses', dataProses)
                // console.log('dataselesai', dataSelesai)
                let dataMasukFinal = [0, 0, 0, 0,
                    0, 0, 0, 0,
                    0, 0, 0, 0
                ];

                let dataProsesFinal = [0, 0, 0, 0,
                    0, 0, 0, 0,
                    0, 0, 0, 0
                ];

                let dataDitolakFinal = [0, 0, 0, 0,
                    0, 0, 0, 0,
                    0, 0, 0, 0
                ];

                let dataSelesaiFinal = [0, 0, 0, 0,
                    0, 0, 0, 0,
                    0, 0, 0, 0
                ];


                dataDitolak.forEach(element => {
                    dataDitolakFinal[element.bulan - 1] = element.permohonan
                });

                dataProses.forEach(element => {
                    dataProsesFinal[element.bulan - 1] = element.permohonan
                });

                dataSelesai.forEach(element => {
                    dataSelesaiFinal[element.bulan - 1] = element.permohonan
                });

                dataMasukFinal[0] = dataPermohonanMasuk['Jan'] ? dataPermohonanMasuk['Jan'].length : 0
                dataMasukFinal[1] = dataPermohonanMasuk['Feb'] ? dataPermohonanMasuk['Feb'].length : 0
                dataMasukFinal[2] = dataPermohonanMasuk['Mar'] ? dataPermohonanMasuk['Mar'].length : 0
                dataMasukFinal[3] = dataPermohonanMasuk['Apr'] ? dataPermohonanMasuk['Apr'].length : 0
                dataMasukFinal[4] = dataPermohonanMasuk['May'] ? dataPermohonanMasuk['May'].length : 0
                dataMasukFinal[5] = dataPermohonanMasuk['Jun'] ? dataPermohonanMasuk['Jun'].length : 0
                dataMasukFinal[6] = dataPermohonanMasuk['Jul'] ? dataPermohonanMasuk['Jul'].length : 0
                dataMasukFinal[7] = dataPermohonanMasuk['Aug'] ? dataPermohonanMasuk['Aug'].length : 0
                dataMasukFinal[8] = dataPermohonanMasuk['Sep'] ? dataPermohonanMasuk['Sep'].length : 0
                dataMasukFinal[9] = dataPermohonanMasuk['Oct'] ? dataPermohonanMasuk['Oct'].length : 0
                dataMasukFinal[10] = dataPermohonanMasuk['Nov'] ? dataPermohonanMasuk['Nov'].length : 0
                dataMasukFinal[11] = dataPermohonanMasuk['Dec'] ? dataPermohonanMasuk['Dec'].length : 0


                // for (let index = 0; index < dataMasukFinal.length; index++) {

                //     dataMasukFinal[index] = parseInt(dataProsesFinal[index]) +parseInt(dataDitolakFinal[index]) + parseInt(dataSelesaiFinal[index])

                // }

                const data = {
                    labels: labels,
                    datasets: [{
                            label: "Permohonan Masuk",
                            backgroundColor: "#7cb5ec",
                            borderColor: "#7cb5ec",
                            data: dataMasukFinal,
                        },
                        {
                            label: "Permohonan Proses",
                            backgroundColor: "#434348",
                            borderColor: "#434348",
                            data: dataProsesFinal,
                        },
                        {
                            label: "Permohonan Ditolak",
                            backgroundColor: "#da6d85",
                            borderColor: "#da6d85",
                            data: dataDitolakFinal,
                        },
                        {
                            label: "Permohonan Selesai",
                            backgroundColor: "#90ed7d",
                            borderColor: "#90ed7d",
                            data: dataSelesaiFinal,
                        },
                    ],
                };

                const config = {
                    type: "bar",
                    data: data,
                    options: {
                        scale: {
                                    ticks: {
                                        precision: 0
                                    }
                                },
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

            })
=======
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
>>>>>>> origin/main
        </script>

        <style>
            .publik .informasi_publik {
                width: 100%;
                height: 400px;
                background-size: 340px 400px;
                background-repeat: no-repeat;
<<<<<<< HEAD
                background-image: url({{ Storage::url($informasiImage?->sideimage_path ?? '') }});
=======
                background-image: url({{ asset($informasiImage->sideimage_path ?? '') }});
>>>>>>> origin/main
            }

            .publik .informasi_publik .box_publik {
                width: 100%;
                height: 351px;
                background-size: 256px 351px;
                background-repeat: no-repeat;
<<<<<<< HEAD
                background-image: url({{ Storage::url($informasiImage?->backgroundimage_path ?? '') }});
=======
                background-image: url({{ asset($informasiImage->backgroundimage_path ?? '') }});
>>>>>>> origin/main
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
    @endpush




</x-frontend.layout>
