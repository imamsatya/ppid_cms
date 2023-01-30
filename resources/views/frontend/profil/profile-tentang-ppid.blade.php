<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/profile/tentangPPID/index.css') }}" rel="stylesheet" />
    @endpush
    <section class="informasi_tentang_ppid">
        <div class="container bg-transparent" style="background-image: url('./storage/bg_bumn7.png');">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_tentang_ppid">{{ $profilSingkat->judul ?? '' }}</label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8" id="konten">


                    {!! $profilSingkat->konten ?? '' !!}



                </div>
                <div class="col-md-4">
                    <div class="images">
                        {{-- <img src="{{ asset('ppid_fe/assets/images/content/content-image/content_tentang_ppid.png') }}"
                            class="img-fluid" alt="" /> --}}
                        <img src="{{ asset('storage/'.$profilSingkat->side_image_path ?? '') }}" class="img-fluid"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-slot:bannerText1>
        Profil / Profil Singkat
        </x-slot>
        <x-slot:bannerText2>
            Profil Singkat
            </x-slot>
            <x-slot:isActiveProfil>
                active
                </x-slot>
                @push('child-scripts')
                    <script>
                        // document.getElementById('konten').childNodes[1].className = 'informasi'
                    </script>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ asset('storage/'.$profilSingkat?->banner_path ?? '') }});
                            background-repeat: no-repeat;
                            /*Prevent showing multiple background images*/
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
