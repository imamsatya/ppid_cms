<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/standartLayanan/biaya/index.css') }}" rel="stylesheet" />
        <style>
            p::first-letter {
                text-transform: none;
            }

            span {
                text-transform: none;
            }
        </style>
    @endpush
    <!-- content -->
    <section class="content-biaya">
        <div class="container">
            <div class="title-label ml-5 mr-5 text-center">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">{{ $biayaLayanan->judul ?? '' }}</label>
                    </div>
                </div>
            </div>

            <div class="informasi ml-5 mr-5 text-center">
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-transform: none;">

                            {!! $biayaLayanan->deskripsi ?? '' !!}
                        </p>
                    </div>
                </div>
            </div>
            @if ($biayaLayanan->is_active)
            <div class="images">
                <div class="row">
                    @if ($biayaLayanan)
                        <div class="col-md-12">
                            <img src="{{ Storage::url($biayaLayanan->direktori_image) }}" alt="">
                        </div>
                    @endif
                </div>
            </div>                
            @endif
        </div>
    </section>
    <!-- content -->



    <x-slot:bannerText1>
        Standar Layanan / Biaya
        </x-slot>
        <x-slot:bannerText2>
            Biaya Layanan
            </x-slot>
            <x-slot:isActiveStandarLayanan>
                active
                </x-slot>
                @push('child-scripts')
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ Storage::url($biayaLayanan?->banner_path ?? '') }});
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                            border-radius: 20px;
                            
                        }
                    </style>
                @endpush
</x-frontend.layout>
