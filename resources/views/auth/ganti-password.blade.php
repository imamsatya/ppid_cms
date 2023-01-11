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
                            {{-- Silahkan Lengkapi Formulir Pendaftaran untuk mengajukan
                            permohonan informasi, keberatan informasi, atau untuk mengetahui
                            status permohonan informasi dan keberatan informasi yang sudah
                            diajukan. --}}
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                        </p>
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('index') }}">
                                    <button class="btn btn-back">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <label for="" class="btn-back-info">Kembali</label>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('userppid.ganti_password.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-login">
                            <div class="label-login d-flex align-items-center">
                                <img src="/assets/images/content/icon/ic_people.svg" alt="" />
                                <span class="ml-2">Ganti Password</span>
                            </div>
                            <div class="form-data">

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <div class="input-group d-flex align-items-center" id="show_hide_password">
                                        <input class="form-control input-password" placeholder="Password Lama"
                                            name="old_password" type="password" />
                                        <div class="input-group-addon text-center">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="input-group d-flex align-items-center" id="show_hide_password">
                                        <input class="form-control input-password" placeholder="Password Baru"
                                            name="new_password" type="password" />
                                        <div class="input-group-addon text-center">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group d-flex align-items-center" id="show_hide_password">
                                        <input class="form-control input-password" placeholder="Ulangi Password Baru"
                                            type="password" name="new_password_confirmation" />
                                        <div class="input-group-addon text-center">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <button class="btn btn-lg btn-primary-ppid mt-3" type="submit">Simpan</button>
                            {{-- <a href="./dashboard-pemohon.html" class="btn btn-lg btn-primary-ppid mt-3">Daftar</a> --}}
                        </div>
                    </form>
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
            const $input = document.querySelector("#noidentitas");
            const IDENTITASNUMBER_ALLOWED_CHARS_REGEXP = /[0-9.-]+/;
            $input.addEventListener("keypress", event => {
                if (!IDENTITASNUMBER_ALLOWED_CHARS_REGEXP.test(event.key)) {
                    event.preventDefault();
                }
            });
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

            function PreviewImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                oFReader.onload = function(oFREvent) {
                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                    document.getElementById("uploadPreview").removeAttribute("hidden");

                };
            }

            function selectJenisPemohon() {

                console.log(document.getElementById('inputJenisIdentitas'))
                document.getElementById('jenisidentitas').value = document.getElementById('jenispemohon').value
                document.getElementById('inputJenisIdentitas').value = document.getElementById('jenisidentitas').value

                if (document.getElementById('jenispemohon').value == '1') {
                    document.getElementById('dokumenText').textContent = 'Upload KTP'
                } else {
                    document.getElementById('dokumenText').textContent = 'Upload Dokumen'
                }
            }

            // $(function() {
            //     $("input[name=noidentitas]")[0].oninvalid = function() {
            //         this.setCustomValidity("KTP harus 16 digit");
            //     };
            // });
        </script>
    @endpush

</x-frontend.layout>
