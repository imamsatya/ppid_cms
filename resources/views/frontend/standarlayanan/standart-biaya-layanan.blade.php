<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/standartLayanan/biaya/index.css') }}" rel="stylesheet" />
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
                        <p>

                            {!! $biayaLayanan->deskripsi !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="images">
                <div class="row">
                    @if ($biayaLayanan)
                        <div class="col-md-12">
                            <img src="{{ asset($biayaLayanan->direktori_image) }}" alt="">
                        </div>
                    @endif
                </div>
            </div>
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
</x-frontend.layout>
