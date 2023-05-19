<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/standartLayanan/maklumat/index.css') }}" rel="stylesheet" />
    @endpush

    <!-- content -->
    <section class="content-maklumat">
        <div class="container">
            <div class="title-label">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">{{ $maklumat->judul ?? '' }}</label>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
            <div class="bg-transparent" style="background-image: url('./storage/bg_bumn7.png');">
                {{-- images-maklumat --}}
                <div class="row">
                    @if ($maklumat)
                        <div class="col-md-12" align="center">
                            <img class="img-fluid" src="{{ Storage::url($maklumat->direktori_image) }}" alt="">
=======
            <div class="">
                {{-- images-maklumat --}}
                <div class="row">
                    @if ($maklumat)
                        <div class="col-md-12">
                            <img class="img-fluid" src="{{ asset($maklumat->direktori_image) }}" alt="">
>>>>>>> origin/main
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- content -->


    <x-slot:bannerText1>
        Standar Layanan / Maklumat
        </x-slot>
        <x-slot:bannerText2>
            Maklumat
            </x-slot>
            <x-slot:isActiveStandarLayanan>
                active
                </x-slot>
                @push('child-scripts')
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
<<<<<<< HEAD
                            background-image: url({{ Storage::url($maklumat?->banner_path ?? '') }});
=======
                            background-image: url({{ asset($maklumat->banner_path ?? '') }});
>>>>>>> origin/main
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
