<x-frontend.layout>
    @push('head-scripts')
        <meta name="csrf-token">
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
            .modal-backdrop {
                width: 113vw !important;
                height: 112vh !important;
            }
        </style>
        <title>Home</title>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>


        {{-- <script type="text/javascript">
            function onSubmit(token) {
                document.getElementById("demo-form").submit();
            }

            function callbackThen(response) {

                // read Promise object
                response.json().then(function(data) {
                    console.log(data);
                    if (data.success && data.score >= 0.6) {
                        console.log('valid recaptcha');
                    } else {
                        document.getElementById('contactForm').addEventListener('submit', function(event) {
                            event.preventDefault();
                            alert('recaptcha error');
                        });
                    }
                });
            }

            function callbackCatch(error) {
                console.error('Error:', error)
            }
        </script> --}}
        {{-- {!! htmlScriptTagJsApi([
            'callback_then' => 'callbackThen',
            'callback_catch' => 'callbackCatch',
        ]) !!} --}}
        {!! htmlScriptTagJsApi() !!}
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
                        @if ($errors->any())
                            <div class="alert alert-danger">

                                @foreach ($errors->all() as $error)
                                    <li>{{ htmlspecialchars($error) }}</li>
                                @endforeach

                            </div>
                        @endif
                        {{-- @php
                            dd($errors->any());
                        @endphp --}}
                        @if (\Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('error') }}
                                <button type="button" class="close" style="line-height: 0.7;" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (\Session::has('error-belum_verifikasi'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('error-belum_verifikasi') }} <br><br>
                                Silakan melakukan aktivasi di halaman <a
                                    href="{{ route('userppid.verifikasi') }}">ini</a>
                                <button type="button" class="close" style="line-height: 0.7;" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (\Session::has('register-success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('register-success') }}
                                <button type="button" class="close" style="line-height: 0.7;" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (\Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="close" style="line-height: 0.7;" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="{{ route('userppid.handleLogin') }}" id="demo-form" method="POST">
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

                                <div class="form-group">
                                    <div class="input-group d-flex align-items-center">
                                        {!! htmlFormSnippet() !!}

                                    </div>
                                </div>
                            </div>
                            <div class="lupa-password d-flex">
                                <a href="{{ route('userppid.lupa_password') }}" class="ml-auto">Lupa Password</a>
                            </div>
                            <button class="btn btn-lg btn-primary-ppid mt-3" type="submit">Login</button>
                            <div class="not-register text-center mt-3">
                                <span>Belum terdaftar?</span><a href="{{ route('signup') }}"
                                    class="font-weight-bold">
                                    Daftar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <!-- Modal -->
      <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
      data-backdrop="static">
      <div
        class="modal-dialog modal-lg modal-dialog-centered"
        role="document">
        <div class="modal-content" id="modalContent">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLongTitle">
              Pengumuman
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class=WordSection1>

                <p class=MsoNormal>Selamat datang di portal PPID Kementerian BUMN<o:p></o:p></p>
                
                <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                
                <p class=MsoNormal>Sehubungan dengan proses migrasi data, bagi Sobat BUMN yang
                telah melakukan registrasi atau </p>
                
                <p class=MsoNormal>sudah terdaftar diharapkan untuk melakukan reset password
                melalui tombol “Lupa Password” pada menu Login. </p>
                
                <p class=MsoNormal>Selanjutnya tautan reset password akan dikirim melalui email
                yang didaftarkan.<o:p></o:p></p>
                
                <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                
                <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                
                <p class=MsoNormal>Terima&nbsp;kasih!</p>
                
                </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-outline-primary-ppid"
              data-dismiss="modal">
              Tutup
            </button>            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->
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
                let error = "{{ $errors->any() }}";
                let success = "{{ Session::has('success') }}";
                let pengumuman = "{{env('PENGUMUMAN') }}";
                console.log(status);
                if (!error || !success) {
                    if (pengumuman) {
                        $('#exampleModalCenter').modal('show');                        
                    }
                }
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
