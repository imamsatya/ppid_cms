<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>PPID KBUMN</title>

    <!-- Favicon -->
    <link href="assets/images/content/logo/favicon.ico" rel="icon" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="{{ asset('ppid_fe/assets/css/navbar/index.css') }}" rel="stylesheet" />
    <link href="{{ asset('ppid_fe/assets/css/navbar/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('ppid_fe/assets/css/footer/index.css') }}" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('head-scripts')
</head>

<body class="zoomed">
    <!-- navbar -->
    <section>
        <header id="headerNav" class="blackw ">
            <a href="{{ route('index') }}" class="logo">
                <img src="{{ asset('ppid_fe/assets/images/content//logo/logo_ppid.png') }}" alt="" />
            </a>

            <input type="checkbox" id="menu-bar" />
            <label for="menu-bar">Menu</label>
            <nav class="navbar_custom">
                <ul>
                    @if ($menus)
                        @foreach ($menus as $menu)
                            <li>
                                <?php
                                $isActive = null;
                                $currentRoute = Route::currentRouteName();
                                if ($currentRoute == $menu->routing) {
                                    $isActive = 'active';
                                }
                                foreach ($menu['submenus'] as $key => $submenu) {
                                    if ($submenu['routing'] == Route::currentRouteName()) {
                                        $isActive = 'active';
                                    }
                                }
                                ?>
                                @if ($menu->routing)
                                    <a href="{{ route($menu->routing) }}" id="titleNavProfile"
                                        class="{{ $isActive ?? '' }}">{{ $menu->nama_menu }}
                                    </a>
                                @else
                                    <a href="" id="titleNavProfile"
                                        class="{{ $isActive ?? '' }}">{{ $menu->nama_menu }}
                                    </a>
                                @endif
                                <ul>
                                    @foreach ($menu['submenus'] as $submenu)
                                        @if ($submenu->is_active)
                                            <li>
                                                <a class="dropdown_menu"
                                                    href="{{ route($submenu->routing) ?? '' }}">{{ $submenu->nama_menu }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    @endif
                    {{-- <li>
                        <a href="#" id="titleNavProfile" class="{{ $isActiveProfil ?? '' }}">Profil </a>
                        <ul>
                            <li>
                                <a class="dropdown_menu" href="{{ route('tentangppid.index') }}">Tentang PPID</a>
                            </li>

                            <li>
                                <a class="dropdown_menu" href="{{ route('tugasdanfungsi.index') }}">Tugas dan
                                    Fungsi</a>
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
                    </li> --}}



                    @if (Auth::guard('usersppid')->check())
                        <li>
                            <form action="{{ route('userppid.logout') }}" method="post" id="logout-form">
                                @csrf

                                <a href=""
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-sm btn_login"> Logout
                                </a>
                            </form>

                            {{-- <form action="{{ route('userppid.logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    Sign Out
                                </button>
                            </form> --}}
                        </li>
                    @else
                        <li>
                            <a href="{{ route('userppid.login') }}" class="btn btn-sm btn_login"> Login
                            </a>
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

    <!-- Banner -->
    @if (substr(URL::current(), -5) != 'login' &&
        Route::current()->getName() != 'index' &&
        Route::current()->getName() != 'dashboard.index' &&
        Route::current()->getName() != 'register' &&
        Route::current()->getName() != 'signup')
        <!-- Banner -->
        <section class="banner blackw magnif">
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

    <!-- Content -->
    <div class="blackw magnif">
        {{ $slot }}
    </div>
    <!-- Content -->

    @if (substr(URL::current(), -5) != 'login' &&
        Route::current()->getName() != 'index' &&
        Route::current()->getName() != 'dashboard.index' &&
        Route::current()->getName() != 'register' &&
        Route::current()->getName() != 'signup')
        <!-- Button Back -->
        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('index') }}">
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
                                        @foreach ($sosialMedia as $sosialMedia_row)
                                            <a href="{{ $sosialMedia_row->url }}" target="_blank">
                                                <img class="img-fluid" src="{{ $sosialMedia_row->icon }}"
                                                    alt="" style="width: 40px;height:40px">
                                            </a>
                                        @endforeach
                                        {{-- <div class="d-flex align-items-center">
                                            @foreach ($sosialMedia as $sosialMedia_row)
                                                <i class="{{ $sosialMedia_row->icon }}" aria-hidden="true"></i>
                                            @endforeach
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
                                        </div> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="detail_footer">
                                <ul>
                                    <li>Unduh Aplikasi Mobile melalui :</li>
                                    @foreach ($linkApp as $linkApp_row)
                                        <li>
                                            <a href="{{ $linkApp_row->url }}"
                                                title="Image from freepnglogos.com"><img
                                                    src="{{ asset($linkApp_row->icon) }}" width="200"
                                                    alt="play store logo black background hd picture" /></a>
                                        </li>
                                    @endforeach
                                    {{-- <li>
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
                                    </li> --}}
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
    <div id="cont" class="posfix"></div>

    <!-- script bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- <script src="assets/js/homepage/wow.min.js"></script> -->

    <!--  -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script> -->

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





    <!-- Banner script -->
    <!-- Banner script  -->
    @stack('child-scripts')
</body>

</html>
