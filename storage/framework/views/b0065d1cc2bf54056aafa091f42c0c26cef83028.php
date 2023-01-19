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
    <link href="<?php echo e(asset('ppid_fe/assets/css/navbar/index.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ppid_fe/assets/css/navbar/animate.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ppid_fe/assets/css/footer/index.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('ppid_fe/assets/float/float.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('ppid_fe/assets/float/fab.css')); ?>" />
    
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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

        .custom-logo {
            margin-right: 200px;
        }

        .btn_login-custom {
            font-size: 28px;
            margin: 10px 0px 18px 0px;
            padding: 20px 20px 20px 20px;
            color: #ffffff;
            font-family: "Lato", sans-serif;
            /* display: block; */
            font-weight: 300;
            height: 30px;
            background: #104e70;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        @media only screen and (max-width: 600px) {
            .custom-logo {
                margin-right: 0px;
            }
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
    <?php echo $__env->yieldPushContent('head-scripts'); ?>
</head>

<body class="zoomed">
    <!-- navbar -->
    <section>
        <header id="headerNav" class="blackw ">
            
            <div class="logo">
                <a href="<?php echo e(route('index')); ?>">
                    <img src="<?php echo e(asset('ppid_fe/assets/images/content//logo/logo_ppid2.png')); ?>" height="54"
                        width="151" alt="" />
                </a>
                <a href="https://bumn.go.id/">
                    <img src="<?php echo e(asset('ppid_fe/assets/images/content//logo/logo_bumn.png')); ?>" height="54"
                        width="151" alt="" />
                </a>
            </div>

            <input type="checkbox" id="menu-bar" />
            <label for="menu-bar">Menu</label>
            <nav class="navbar_custom">
                <ul>
                    <?php if($menus): ?>
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                <?php if($menu->routing): ?>
                                    <a href="<?php echo e(route($menu->routing)); ?>" id="titleNavProfile"
                                        class="<?php echo e($isActive ?? ''); ?>"><?php echo e($menu->nama_menu); ?>

                                    </a>
                                <?php else: ?>
                                    <a href="" id="titleNavProfile"
                                        class="<?php echo e($isActive ?? ''); ?>"><?php echo e($menu->nama_menu); ?>

                                    </a>
                                <?php endif; ?>
                                <ul>
                                    <?php $__currentLoopData = $menu['submenus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($submenu->is_active): ?>
                                            <li>
                                                <a class="dropdown_menu"
                                                    href="<?php echo e(route($submenu->routing) ?? ''); ?>"><?php echo e($submenu->nama_menu); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>



                    <?php if(Auth::guard('usersppid')->check()): ?>
                        <li>




                            <button type="button" class="btn btn-sm btn_login-custom  text-white"><i
                                    class="fa fa-user  " aria-hidden="true"></i></button>

                            <ul>
                                <li>
                                    <a class="dropdown_menu" href="<?php echo e(route('dashboard.index')); ?>">Dashboard</a>
                                </li>
                                <li>
                                    <a class="dropdown_menu" href="<?php echo e(route('userppid.ganti_password')); ?>">Ganti
                                        Password</a>
                                </li>

                                <li>
                                    <form action="<?php echo e(route('userppid.logout')); ?>" method="post" id="logout-form">
                                        <?php echo csrf_field(); ?>

                                        <a href=""
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="dropdown_menu"> Logout
                                        </a>
                                    </form>
                                </li>

                            </ul>

                            
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(route('userppid.login')); ?>" class="btn btn-sm btn_login"> Login
                            </a>
                        </li>
                    <?php endif; ?>





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
    <?php if(substr(URL::current(), -5) != 'login' &&
        Route::current()->getName() != 'index' &&
        Route::current()->getName() != 'dashboard.index' &&
        Route::current()->getName() != 'register' &&
        Route::current()->getName() != 'signup' &&
        Route::current()->getName() != 'userppid.lupa_password' &&
        Route::current()->getName() != 'userppid.ganti_password' &&
        Route::current()->getName() != 'userppid.verifikasi' &&
        Route::current()->getName() != 'reset.password.get'): ?>
        <!-- Banner -->
        <section class="banner blackw magnif">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="data_banner p-">
                            <div class="informasi text-center">
                                <p><?php echo e($bannerText1 ?? ''); ?></p>
                                <label for=""><?php echo e($bannerText2 ?? ''); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banner -->
    <?php endif; ?>
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
        <?php echo e($slot); ?>

    </div>
    <!-- Content -->

    <?php if(substr(URL::current(), -5) != 'login' &&
        Route::current()->getName() != 'index' &&
        Route::current()->getName() != 'dashboard.index' &&
        Route::current()->getName() != 'register' &&
        Route::current()->getName() != 'signup' &&
        Route::current()->getName() != 'userppid.lupa_password' &&
        Route::current()->getName() != 'userppid.ganti_password' &&
        Route::current()->getName() != 'userppid.verifikasi' &&
        Route::current()->getName() != 'reset.password.get'): ?>
        <!-- Button Back -->
        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo e(route('index')); ?>">
                        <button class="btn btn-back">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </button>
                    </a>
                    <label for="" class="btn-back-info">Kembali </label>
                </div>
            </div>
        </div>
        <!-- Button Back -->
    <?php endif; ?>


    <!-- Footer -->
    <footer class="footer blackw">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="content">
                        <img class="img-fluid"
                            src="<?php echo e(asset('ppid_fe/assets/images/content/logo/logo_ppid_white.png')); ?>"
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
                                        <?php $__currentLoopData = $sosialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosialMedia_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e($sosialMedia_row->url); ?>" target="_blank">
                                                <img class="img-fluid"
                                                    src="<?php echo e('storage/' . $sosialMedia_row->icon); ?>" alt=""
                                                    style="width: 40px;height:40px">
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="detail_footer">
                                <ul>
                                    <li>Unduh Aplikasi Mobile melalui :</li>
                                    <?php $__currentLoopData = $linkApp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linkApp_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e($linkApp_row->url); ?>"
                                                title="Image from freepnglogos.com"><img
                                                    src="<?php echo e(asset('storage/' . $linkApp_row->icon)); ?>" width="200"
                                                    alt="play store logo black background hd picture" /></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
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
                                @2023 - PPID Kementerian Badan Usaha Milik Negara
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

    <script src="<?php echo e(asset('ppid_fe/assets/float/fab.js')); ?>"></script>
    <!-- <img src="assets/images/content/icon/difable.png" width="75%"> -->
    <script type="text/javascript">
        var fab = new Fab({
            selector: "#cont",
            button: {
                style: "large teal",
                html: "",
            },
            icon: {
                style: `<?php echo e(URL::asset('ppid_fe/assets/images/content/icon/difable.png')); ?>  " width="75%`,
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
                        style: `<?php echo e(URL::asset('ppid_fe/assets/images/content/icon/mag-zin.png')); ?> " width="55%'`,
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
                        style: `<?php echo e(URL::asset('ppid_fe/assets/images/content/icon/mag-zout.png')); ?>" width="55%`,
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
                        style: `<?php echo e(URL::asset('ppid_fe/assets/images/content/icon/eye.png')); ?>" width="75%'`,
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
    <?php echo $__env->yieldPushContent('child-scripts'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/components/frontend/layout.blade.php ENDPATH**/ ?>