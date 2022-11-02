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
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-berkala" role="tabpanel"
                            aria-labelledby="v-pills-berkala-tab">

                            <div class="row">
                                <div class="col-md-12">
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
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-setiapsaat" role="tabpanel"
                            aria-labelledby="v-pills-setiapsaat-tab">
                            <div class="row">
                                <div class="col-md-12">
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
                                    </div>
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
</x-frontend.layout>
