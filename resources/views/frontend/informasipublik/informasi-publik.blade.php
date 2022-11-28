<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/informasiPublik/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Filter -->
    <section class="filter-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Masukkan Kata Kunci Pencarian..." class="pl-3 filter-input" />
                    <button class="btn btn-filter">Filter</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Filter -->

    <!-- content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-berkala-tab" data-toggle="pill" href="#v-pills-berkala"
                            role="tab" aria-controls="v-pills-berkala" aria-selected="true">
                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi.png') }}"
                                alt="">
                            Informasi Secara Berkala</a>
                        <a class="nav-link" id="v-pills-setiapsaat-tab" data-toggle="pill" href="#v-pills-setiapsaat"
                            role="tab" aria-controls="v-pills-setiapsaat" aria-selected="false">
                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi.png') }}"
                                alt="">

                            Informasi Setiap Saat</a>
                        <a class="nav-link" id="v-pills-sertamerta-tab" data-toggle="pill" href="#v-pills-sertamerta"
                            role="tab" aria-controls="v-pills-sertamerta" aria-selected="false">
                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi.png') }}"
                                alt="">

                            Informasi Serta Merta</a>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-berkala" role="tabpanel"
                            aria-labelledby="v-pills-berkala-tab">

                            <div class="row">
                                <div class="col-md-12">
                                    @if ($informasiSecaraBerkala)
                                        @foreach ($informasiSecaraBerkala as $informasiSecaraBerkala_row)
                                            <div class="data_list">
                                                <span><a
                                                        href="{{ $informasiSecaraBerkala_row->url }}">{{ $informasiSecaraBerkala_row->judul_informasi }}</a></span>
                                            </div>
                                        @endforeach
                                    @endif

                                    {{-- <div class="data_list">
                                        <span>Daftar Rancangan Peraturan tentang Kementerian BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Daftar Informasi Publik yang Wajib Disediakan dan Diumumkan Secara
                                            Berkala</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian
                                            BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian
                                            BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Daftar Rancangan Peraturan tentang Kementerian BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Daftar Informasi Publik yang Wajib Disediakan dan Diumumkan Secara
                                            Berkala</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian
                                            BUMN</span>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-setiapsaat" role="tabpanel"
                            aria-labelledby="v-pills-setiapsaat-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if ($informasiSetiapSaat)
                                                @foreach ($informasiSetiapSaat as $informasiSetiapSaat_row)
                                                    <div class="data_list">
                                                        <span><a
                                                                href="{{ $informasiSetiapSaat_row->url }}">{{ $informasiSetiapSaat_row->judul_informasi }}</a></span>
                                                    </div>
                                                @endforeach
                                            @endif



                                        </div>
                                    </div>
                                    {{-- <div class="data_list">
                                        <span>Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian
                                            BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Daftar Rancangan Peraturan tentang Kementerian BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Daftar Informasi Publik yang Wajib Disediakan dan Diumumkan Secara
                                            Berkala</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian
                                            BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian
                                            BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Daftar Rancangan Peraturan tentang Kementerian BUMN</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Daftar Informasi Publik yang Wajib Disediakan dan Diumumkan Secara
                                            Berkala</span>
                                    </div>
                                    <div class="data_list">
                                        <span>Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian
                                            BUMN</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="v-pills-sertamerta" role="tabpanel"
                            aria-labelledby="v-pills-sertamerta-tab">

                            <div class="row">
                                <div class="col-md-12">
                                    @if ($informasiSertaMerta)
                                        @foreach ($informasiSertaMerta as $informasiSertaMerta_row)
                                            <div class="data_list">
                                                <span><a
                                                        href="{{ $informasiSertaMerta_row->url }}">{{ $informasiSertaMerta_row->judul_informasi }}</a></span>
                                            </div>
                                        @endforeach
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
        Beranda / Informasi Publik
        </x-slot>
        <x-slot:bannerText2>
            Informasi Publik
            </x-slot>
            <x-slot:isActiveInformasiPublik>
                active
                </x-slot>
                @push('child-scripts')
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ asset($informasiPublikBanner->banner_path ?? '') }});
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
