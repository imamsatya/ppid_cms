<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="{{ asset('ppid_fe/assets/css/navbar/index.css') }}" rel="stylesheet" />
    <link href="{{ asset('ppid_fe/assets/css/footer/index.css') }}" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('head-scripts')

</head>

<body class="{{ Route::current()->getName() == 'index' ? 'zoomed' : '' }} magnify" id="bwStyle">

    <!-- navbar -->
    <section>
        <header id="headerNav">
            <a href="{{ route('index') }}" class="logo">
                <img src="{{ asset('ppid_fe/assets/images/content//logo/logo_ppid.png') }}" alt="" />
            </a>

            <input type="checkbox" id="menu-bar" />
            <label for="menu-bar">Menu</label>
            <nav class="navbar_custom">
                <ul>
                    <li>
                        <a href="#" id="titleNavProfile" class="{{ $isActiveProfil ?? '' }}">Profil </a>
                        <ul>
                            <li>
                                <a class="dropdown_menu" href="{{ route('tentangppid.index') }}">Tentang PPID</a>
                            </li>

                            <li>
                                <a class="dropdown_menu" href="{{ route('tugasdanfungsi.index') }}">Tugas dan Fungsi</a>
                            </li>
                            <li>
                                <a class="dropdown_menu" href="{{ route('strukturppid.index') }}">Struktur PPID</a>
                            </li>
                            <li>
                                <a class="dropdown_menu" href="{{ route('visimisi.index') }}">Visi dan Misi</a>
                            </li>
                            <li>
                                <a class="dropdown_menu" href="{{ route('kontak.index') }}">Kontak</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('regulasi.index') }}" class="{{ $isActiveRegulasi ?? '' }}"
                            id="titleNavRegulasi">Regulasi </a>
                    </li>
                    <li>
                        <a id="titleNavInformasiPublik" class="{{ $isActiveInformasiPublik ?? '' }}"
                            href="{{ route('informasipublik.index') }}">Informasi
                            Publik</a>
                    </li>
                    <li>
                        <a id="titleNavStandarLayanan" class="{{ $isActiveStandarLayanan ?? '' }}"
                            href="#">Standar Layanan </a>
                        <ul>
                            <li>
                                <a class="dropdown_menu" href="{{ route('maklumat.index') }}">Maklumat</a>
                            </li>

                            <li>
                                <a class="dropdown_menu" href="{{ route('prosedurlayanan.index') }}">Prosedur
                                    Layanan</a>
                            </li>
                            <li>
                                <a class="dropdown_menu" href="{{ route('standarlayananbiaya.index') }}">Biaya
                                    Layanan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a id="titleNavLaporan" class="{{ $isActiveLaporan ?? '' }}"
                            href="{{ route('laporan.index') }}">Laporan </a>
                    </li>
                    <li>
                        <a id="titleNavFaq" class="{{ $isActiveFaq ?? '' }}" href="{{ route('faq.index') }}">FAQ</a>
                    </li>
                    @if (Route::current()->getName() != 'dashboard.index')
                        <li>
                            <a href="{{ route('login') }}" class="btn btn-sm btn_login"> Login
                            </a>
                            <!-- <a href="#" class="btn btn_login"> Login </a> -->
                        </li>
                    @endif

                    @if (Route::current()->getName() == 'dashboard.index')
                        <li>
                            {{-- <a href="{{ route('login') }}" class="btn btn-sm btn_login"> Logout
                            </a> --}}
                            <form action="{{ route('logout') }}" method="post" id="logout-form">
                                @csrf
                                {{-- <button type="submit" class="btn btn-sm btn_login" style="text-align: center">
                                    Logout
                                </button> --}}
                                <a href=""
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-sm btn_login"> Logout
                                </a>
                            </form>
                            <!-- <a href="#" class="btn btn_login"> Login </a> -->
                        </li>
                    @endif
                </ul>
            </nav>
        </header>
        <div id="searchComponent" class="navbar_search text-center" style="display: none">
            <div class="sb-example-1">
                <div class="search">
                    <input type="text" class="searchTerm p-2" placeholder="Pencarian... " />
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- navbar -->

    @if (substr(URL::current(), -5) != 'login' &&
        Route::current()->getName() != 'index' &&
        Route::current()->getName() != 'dashboard.index' &&
        Route::current()->getName() != 'register')
        <!-- Banner -->
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="data_banner p-">
                            <div class="informasi text-center">
                                <p>{{ $bannerText1 ?? '' }}</p>
                                <label for="">{{ $bannerText2 ?? '' }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner -->
    @endif

    <!-- Content -->
    <div>
        {{ $slot }}
    </div>
    <!-- Content -->

    @if (substr(URL::current(), -5) != 'login' &&
        Route::current()->getName() != 'index' &&
        Route::current()->getName() != 'dashboard.index' &&
        Route::current()->getName() != 'register')
        <!-- Button Back -->
        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <a href="#">
                        <button class="btn btn-back">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </button>
                    </a>
                    <label for="" class="btn-back-info">Kembali </label>
                </div>
            </div>
        </div>
        <!-- Button Back -->
    @endif

    <!-- Footer -->
    <footer class="footer blackw">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="content">
                        <img class="img-fluid"
                            src="{{ asset('ppid_fe/assets/images/content/logo/logo_ppid_white.png') }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="detail_footer">
                                <label for="">Alamat Kami</label>
                                <ul>
                                    <li>
                                        Jl. Medan Merdeka Selatan No.13 Jakarta 10110 Indonesia
                                    </li>
                                    <li>Telp : 021 - 2993 5678</li>
                                    <li>Email : ppid@bumn.go.id</li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="icon_social youtube">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon_social instagram">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon_social twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon_social facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="detail_footer">
                                <ul>
                                    <li>Unduh Aplikasi Mobile melalui :</li>
                                    <li>
                                        <a href="https://www.freepnglogos.com/pics/play-store-logo"
                                            title="Image from freepnglogos.com"><img
                                                src="https://www.freepnglogos.com/uploads/play-store-logo-png/play-store-logo-nisi-filters-australia-11.png"
                                                width="200"
                                                alt="play store logo black background hd picture" /></a>
                                    </li>
                                    <li>
                                        <a href="https://www.freepnglogos.com/pics/app-store-png-logo"
                                            title="Image from freepnglogos.com"><img
                                                src="https://www.pngmart.com/files/10/Download-On-The-App-Store-PNG-Clipart.png"
                                                width="200" alt="available the app store badge vector" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr />
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3 text-center">
                            <div class="company_name">
                                @2022 - PPID Kementerian Badan Usaha Milik Negara
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- script bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!--  -->
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

    <script>
        let url = window.location.href;
        let result = url.indexOf("profile");
        let element = document.getElementById("titleNavProfile");
        if (result > 0) {
            element.classList.add("active");
        }
    </script>
    @stack('child-scripts')
    <!-- Banner script -->
    <!-- Banner script  -->
</body>

</html>
