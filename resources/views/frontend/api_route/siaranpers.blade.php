<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/profile/tentangPPID/index.css') }}" rel="stylesheet" />
    @endpush
    <section class="informasi_tentang_ppid">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_tentang_ppid">{{ $selectedSiaran['title'] }}</label>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="images">
                        {{-- <img src="{{ asset('ppid_fe/assets/images/content/content-image/content_tentang_ppid.png') }}"
                            class="img-fluid" alt="" /> --}}
                        <img src="{{ 'https://bumn.go.id/storage/' . $selectedSiaran['image_path'] }}" class="img-fluid"
                            alt="" />
                    </div>
                </div>
                <div class="col-md-8" id="konten">


                    {!! $selectedSiaran['description'] !!}



                </div>
            </div>
        </div>
    </section>
    <x-slot:bannerText1>
        Beranda / Siaran Pers
        </x-slot>
        <x-slot:bannerText2>
            Siaran Pers
            </x-slot>

            @push('child-scripts')
                <style>
                    .banner .data_banner {
                        padding-bottom: 80px;
                        margin-top: 80px;
<<<<<<< HEAD
                        background-image: url({{ asset($regulasiBanner?->banner_path ?? '') }});
=======
                        background-image: url({{ asset($regulasiBanner->banner_path) }});
>>>>>>> origin/main
                        background-repeat: no-repeat;
                        /*Prevent showing multiple background images*/
                        background-size: 100% 300px;
                        height: 300px;
                        padding: 100px 100px 100px 100px;
                    }
                </style>
            @endpush
</x-frontend.layout>
