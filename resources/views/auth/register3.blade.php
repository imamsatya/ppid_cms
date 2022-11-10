<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/registrasi/index.css') }}" rel="stylesheet" />
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
                position: fixed;
            }
        </style>
        <title>Home</title>
    @endpush
    <!-- content -->
    <section class="content-login">
        <div class="bg-bumn"></div>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="information">
                        <img src="{{ asset('ppid_fe/assets/images/content/content-image/content_register.png') }}"
                            alt="" class="img-fluid img-register" />

                        <div class="d-flex align-items-center mb-4">
                            <div class="circle-one"></div>
                            <div class="circle-two"></div>
                        </div>
                        <p class="detail">
                            Silahkan Lengkapi Formulir Pendaftaran untuk mengajukan
                            permohonan informasi, keberatan informasi, atau untuk mengetahui
                            status permohonan informasi dan keberatan informasi yang sudah
                            diajukan.
                        </p>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="./index.html">
                                    <button class="btn btn-back">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <label for="" class="btn-back-info">Kembali</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-login">
                        <div class="label-login d-flex align-items-center">
                            <img src="/assets/images/content/icon/ic_people.svg" alt="" />
                            <span class="ml-2">Registrasi Pemohon Informasi</span>
                        </div>
                        <div class="form-data">
                            <div class="form-group">
                                <select class="custom-select" placeholder="">
                                    <option selected>Jenis Pemohon</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="custom-select" placeholder="">
                                    <option selected>Jenis Identitas</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="No Identitas (KTP)" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Alamat" />
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="No Handphone" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="NPWP" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select" placeholder="">
                                    <option selected>Pekerjaan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="form-group d-flex align-items-start">
                                <div class="upload-btn-wrapper">
                                    <button class="btn">
                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_file.svg') }}"
                                            alt="" />
                                        Upload KTP
                                    </button>
                                    <input type="file" name="myfile" />
                                </div>
                                <span class="ml-3 file-format">Format JPG/PDF maksimal 500KB</span>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Alamat Email" />
                            </div>

                            <div class="form-group">
                                <div class="input-group d-flex align-items-center" id="show_hide_password">
                                    <input class="form-control input-password" placeholder="Password" type="password" />
                                    <div class="input-group-addon text-center">
                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group d-flex align-items-center" id="show_hide_password">
                                    <input class="form-control input-password" placeholder="Ulangi Password"
                                        type="password" />
                                    <div class="input-group-addon text-center">
                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="./dashboard-pemohon.html" class="btn btn-lg btn-primary-ppid mt-3">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
    @push('child-scripts')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!--  -->

        <script src="assets/float/fab.js"></script>
        <!-- <img src="assets/images/content/icon/difable.png" width="75%"> -->
        <script type="text/javascript">
            var fab = new Fab({
                selector: "#cont",
                button: {
                    style: "large teal",
                    html: "",
                },
                icon: {
                    style: 'assets/images/content/icon/difable.png" width="75%',
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
                            style: 'assets/images/content/icon/mag-zin.png" width="55%',
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
                            style: 'assets/images/content/icon/mag-zout.png" width="55%',
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
                            style: 'assets/images/content/icon/eye.png" width="75%',
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
                            var element = document.getElementById("bwStyle");
                            element.classList.add("bwstyle");
                            console.log("ice");
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
        <!-- <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                    '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script> -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".increaseFont,.decreaseFont").click(function() {
                    var type = $(this).val();
                    var curFontSize = $(".magnify").css("zoom");

                    if (type == "increase") {
                        $(".magnify").css("zoom", parseFloat(curFontSize) + 0.01);
                    } else {
                        $(".magnify").css("zoom", parseFloat(curFontSize) - 0.01);
                    }
                    // alert($('.magnify').css('font-size'));
                });
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
            $(document).ready(function() {
                $("#show_hide_password a").on("click", function(event) {
                    event.preventDefault();
                    if ($("#show_hide_password input").attr("type") == "text") {
                        $("#show_hide_password input").attr("type", "password");
                        $("#show_hide_password i").addClass("fa-eye-slash");
                        $("#show_hide_password i").removeClass("fa-eye");
                    } else if (
                        $("#show_hide_password input").attr("type") == "password"
                    ) {
                        $("#show_hide_password input").attr("type", "text");
                        $("#show_hide_password i").removeClass("fa-eye-slash");
                        $("#show_hide_password i").addClass("fa-eye");
                    }
                });
            });
        </script>
    @endpush

</x-frontend.layout>
