<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/regulasi/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Filter -->
    <!-- <section class="filter-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Masukkan Kata Kunci Pencarian..." class="pl-3 filter-input" />
                    <button class="btn btn-filter">Filter</button>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Filter -->
    <br><br><br>
    <!-- content -->
    <section class="content">
        <div class="container bg-transparent" style="background-image: url('./storage/bg_bumn7.png');">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-peraturan-tab" data-toggle="pill"
                                href="#pills-peraturan" role="tab" aria-controls="pills-peraturan"
                                aria-selected="true">Prosedur Permohonan Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-rancangan-tab" data-toggle="pill" href="#pills-rancangan"
                                role="tab" aria-controls="pills-rancangan" aria-selected="false">Prosedur
                                Keberatan Informasi</a>
                        </li>
                    </ul>

                    <!--  -->

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-peraturan" role="tabpanel"
                            aria-labelledby="pills-peraturan-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($prosedurLayanan)
                                        <img src="{{ asset('storage/' . $prosedurLayanan->permohonan_direktori_image) }}"
                                            class="w-100 img-fluid" alt="">
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-rancangan" role="tabpanel"
                            aria-labelledby="pills-rancangan-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($prosedurLayanan)
                                        <img src="{{ asset('storage/' . $prosedurLayanan->keberatan_direktori_image) }}"
                                            class="w-100 img-fluid" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->



    <x-slot:bannerText1>
        Standar Layanan / Prosedur
        </x-slot>
        <x-slot:bannerText2>
            Prosedur Pelayanan
            </x-slot>
            <x-slot:isActiveStandarLayanan>
                active
                </x-slot>
                @push('child-scripts')
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ asset('storage/' . $prosedurLayanan->banner_path ?? '') }});
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush

</x-frontend.layout>
