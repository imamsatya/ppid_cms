<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/login/index.css') }}" rel="stylesheet" />

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
            <div class="row">
                <div class="col-md-6">
                    <div class="information">
                        <div class="d-flex align-items-center mb-4">
                            <div class="circle-one"></div>
                            <div class="circle-two"></div>
                        </div>
                        <p class="detail">
                            Silahkan Login untuk mengajukan permohonan informasi, keberatan
                            informasi, atau untuk mengetahui status permohonan informasi dan
                            keberatan informasi yang sudah diajukan.
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
                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_people.svg') }}" alt="" />
                            <span class="ml-2">Login</span>
                        </div>
                         @if ($errors)
                            {{$errors}}
                            <div class="alert alert-danger">
                                <ul>
                                
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('userppid.handleLogin') }}" method="POST">
                            @csrf
                            <div class="form-data">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" autocapitalize="off"
                                        placeholder="Alamat Email" name="email" value="{{ old('email') }}" />
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group d-flex align-items-center" id="show_hide_password">
                                        <input
                                            class="form-control  @error('password') is-invalid @enderror input-password"
                                            placeholder="Password" type="password" autocapitalize="none"
                                            name="password" />
                                        <div class="input-group-addon text-center">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="lupa-password d-flex">
                                <a href="#" class="ml-auto">Lupa Password</a>
                            </div>
                            <button class="btn btn-lg btn-primary-ppid mt-3" type="submit">Login</button>
                            <div class="not-register text-center mt-3">
                                <span>Belum terdaftar?</span><a href="{{ route('signup') }}"
                                    class="font-weight-bold">Daftar</a>
                            </div>
                        </form>
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


        <!-- <img src="assets/images/content/icon/difable.png" width="75%"> -->

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
