<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/laporan/index.css') }}" rel="stylesheet" />
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
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-triwulan-tab" data-toggle="pill" href="#pills-triwulan"
                                role="tab" aria-controls="pills-triwulan" aria-selected="true">Laporan Pelayanan
                                Informasi Triwulan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-tahunan-tab" data-toggle="pill" href="#pills-tahunan"
                                role="tab" aria-controls="pills-tahunan" aria-selected="false">Laporan Pelayanan
                                Informasi Tahunan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-survey-tab" data-toggle="pill" href="#pills-survey"
                                role="tab" aria-controls="pills-survey" aria-selected="false">Laporan Hasil
                                Survei Pelayanan Informasi</a>
                        </li>
                    </ul>

                    <!--  -->

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-triwulan" role="tabpanel"
                            aria-labelledby="pills-triwulan-tab">
                            <div class="row">
                                @if ($laporanTriwulanan)
                                    @foreach ($laporanTriwulanan as $laporanTriwulanan_row)
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                @if ($laporanTriwulanan_row->thumbnail_path)
                                                    <img class="card-img-top"
                                                        src="{{ asset($laporanTriwulanan_row->thumbnail_path) }}"
                                                        alt="Card image cap" />
                                                @else
                                                    <img class="card-img-top"
                                                        src="{{ asset('ppid_fe/assets/images/content/content-image/content_laporan.png') }}"
                                                        alt="Card image cap" />
                                                @endif
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        {{ $laporanTriwulanan_row->judul_laporan }}
                                                    </p>

                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ asset($laporanTriwulanan_row->file_path) }}"
                                                            download class="unduh ml-auto">
                                                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_download.png') }}"
                                                                class="img-fluid" alt="" />
                                                            <span>Unduh / View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif


                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">
                                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fa fa-chevron-right"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-tahunan" role="tabpanel"
                            aria-labelledby="pills-tahunan-tab">
                            <div class="row">
                                @if ($laporanTahunan)
                                    @foreach ($laporanTahunan as $laporanTahunan_row)
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                @if ($laporanTahunan_row->thumbnail_path)
                                                    <img class="card-img-top"
                                                        src="{{ asset($laporanTahunan_row->thumbnail_path) }}"
                                                        alt="Card image cap" />
                                                @else
                                                    <img class="card-img-top"
                                                        src="{{ asset('ppid_fe/assets/images/content/content-image/content_laporan.png') }}"
                                                        alt="Card image cap" />
                                                @endif
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        {{ $laporanTahunan_row->judul_laporan }}
                                                    </p>

                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ asset($laporanTahunan_row->file_path) }}" download
                                                            class="unduh ml-auto">
                                                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_download.png') }}"
                                                                class="img-fluid" alt="" />
                                                            <span>Unduh / View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">
                                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fa fa-chevron-right"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-survey" role="tabpanel"
                            aria-labelledby="pills-survey-tab">
                            <div class="row">
                                @if ($laporanHasilSurvei)
                                    @foreach ($laporanHasilSurvei as $laporanHasilSurvei_row)
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                @if ($laporanHasilSurvei_row->thumbnail_path)
                                                    <img class="card-img-top"
                                                        src="{{ asset($laporanHasilSurvei_row->thumbnail_path) }}"
                                                        alt="Card image cap" />
                                                @else
                                                    <img class="card-img-top"
                                                        src="{{ asset('ppid_fe/assets/images/content/content-image/content_laporan.png') }}"
                                                        alt="Card image cap" />
                                                @endif
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        {{ $laporanHasilSurvei_row->judul_laporan }}
                                                    </p>

                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ asset($laporanHasilSurvei_row->file_path) }}"
                                                            download class="unduh ml-auto">
                                                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_download.png') }}"
                                                                class="img-fluid" alt="" />
                                                            <span>Unduh / View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">
                                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fa fa-chevron-right"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
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
        Beranda / Laporan
        </x-slot>
        <x-slot:bannerText2>
            Laporan Pelayanan Informasi
            </x-slot>
            <x-slot:isActiveLaporan>
                active
                </x-slot>
                @push('child-scripts')
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ asset($laporanBanner->banner_path) }});
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
