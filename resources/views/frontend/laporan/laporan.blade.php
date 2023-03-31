<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/laporan/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Filter -->
    <!-- <section class="filter-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" onkeyup="myFunction()" id="myInput"
                        placeholder="Masukkan Kata Kunci Pencarian..." class="pl-3 filter-input" />
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
                            <a class="nav-link {{ count(app('request')->all()) < 1 ? 'active' : null }} {{ app('request')->input('laporan_triwulanan') ? 'active' : null }}"
                                id="pills-triwulan-tab" data-toggle="pill" href="#pills-triwulan" role="tab"
                                aria-controls="pills-triwulan" aria-selected="true">Laporan Pelayanan
                                Informasi Triwulan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ app('request')->input('laporan_tahunan') ? 'active' : null }}"
                                id="pills-tahunan-tab" data-toggle="pill" href="#pills-tahunan" role="tab"
                                aria-controls="pills-tahunan" aria-selected="false">Laporan Pelayanan
                                Informasi Tahunan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ app('request')->input('laporan_hasil_survei') ? 'active' : null }}"
                                id="pills-survey-tab" data-toggle="pill" href="#pills-survey" role="tab"
                                aria-controls="pills-survey" aria-selected="false">Laporan Hasil
                                Survei Pelayanan Informasi</a>
                        </li>
                    </ul>

                    <!--  -->

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade {{ count(app('request')->all()) < 1 ? 'show active' : null }} {{ app('request')->input('laporan_triwulanan') ? 'show active' : null }}"
                            id="pills-triwulan" role="tabpanel" aria-labelledby="pills-triwulan-tab">
                            <div class="row">
                                @if ($laporanTriwulanan)
                                    @foreach ($laporanTriwulanan as $laporanTriwulanan_row)
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                @if ($laporanTriwulanan_row->thumbnail_path)
                                                    <img class="card-img-top isw-cardImage"
                                                        src="{{ Storage::url($laporanTriwulanan_row->thumbnail_path) }}"
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
                                                        <a href="{{ Storage::url($laporanTriwulanan_row->file_path) }}"
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
                                            @if ($laporanTriwulanan->currentPage() - 1 != 0)
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="{{ $laporanTriwulanan->previousPageUrl() }}"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($laporanTriwulanan->currentPage() - 1 != 0)
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanTriwulanan->url($laporanTriwulanan->currentPage() - 1) }}">{{ $laporanTriwulanan->currentPage() - 1 }}</a>
                                                </li>
                                            @endif
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="{{ $laporanTriwulanan->url($laporanTriwulanan->currentPage()) }}">{{ $laporanTriwulanan->currentPage() }}
                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            @if ($laporanTriwulanan->currentPage() < $laporanTriwulanan->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanTriwulanan->url($laporanTriwulanan->currentPage() + 1) }}">{{ $laporanTriwulanan->currentPage() + 1 }}</a>
                                                </li>
                                            @endif
                                            @if ($laporanTriwulanan->currentPage() != $laporanTriwulanan->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanTriwulanan->nextPageUrl() }}"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade {{ app('request')->input('laporan_tahunan') ? 'show active' : null }}"
                            id="pills-tahunan" role="tabpanel" aria-labelledby="pills-tahunan-tab">
                            <div class="row">
                                @if ($laporanTahunan)
                                    @foreach ($laporanTahunan as $laporanTahunan_row)
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                @if ($laporanTahunan_row->thumbnail_path)
                                                    <img class="card-img-top isw-cardImage"
                                                        src="{{ Storage::url($laporanTahunan_row->thumbnail_path) }}"
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
                                                        <a href="{{ Storage::url($laporanTahunan_row->file_path) }}"
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
                                            @if ($laporanTahunan->currentPage() - 1 != 0)
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="{{ $laporanTahunan->previousPageUrl() }}"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($laporanTahunan->currentPage() - 1 != 0)
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanTahunan->url($laporanTahunan->currentPage() - 1) }}">{{ $laporanTahunan->currentPage() - 1 }}</a>
                                                </li>
                                            @endif
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="{{ $laporanTahunan->url($laporanTahunan->currentPage()) }}">{{ $laporanTahunan->currentPage() }}
                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            @if ($laporanTahunan->currentPage() < $laporanTahunan->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanTahunan->url($laporanTahunan->currentPage() + 1) }}">{{ $laporanTahunan->currentPage() + 1 }}</a>
                                                </li>
                                            @endif
                                            @if ($laporanTahunan->currentPage() != $laporanTahunan->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanTahunan->nextPageUrl() }}"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade {{ app('request')->input('laporan_hasil_survei') ? 'show active' : null }}"
                            id="pills-survey" role="tabpanel" aria-labelledby="pills-survey-tab">
                            <div class="row">
                                @if ($laporanHasilSurvei)
                                    @foreach ($laporanHasilSurvei as $laporanHasilSurvei_row)
                                        <div class="col-md-4 mb-4">
                                            <div class="card card-informasi w-100">
                                                @if ($laporanHasilSurvei_row->thumbnail_path)
                                                    <img class="card-img-top isw-cardImage"
                                                        src="{{ Storage::url($laporanHasilSurvei_row->thumbnail_path) }}"
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
                                                        <a href="{{ Storage::url($laporanHasilSurvei_row->file_path) }}"
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
                                            @if ($laporanHasilSurvei->currentPage() - 1 != 0)
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="{{ $laporanHasilSurvei->previousPageUrl() }}"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($laporanHasilSurvei->currentPage() - 1 != 0)
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanHasilSurvei->url($laporanHasilSurvei->currentPage() - 1) }}">{{ $laporanHasilSurvei->currentPage() - 1 }}</a>
                                                </li>
                                            @endif
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="{{ $laporanHasilSurvei->url($laporanHasilSurvei->currentPage()) }}">{{ $laporanHasilSurvei->currentPage() }}
                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            @if ($laporanHasilSurvei->currentPage() < $laporanHasilSurvei->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanHasilSurvei->url($laporanHasilSurvei->currentPage() + 1) }}">{{ $laporanHasilSurvei->currentPage() + 1 }}</a>
                                                </li>
                                            @endif
                                            @if ($laporanHasilSurvei->currentPage() != $laporanHasilSurvei->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $laporanHasilSurvei->nextPageUrl() }}"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif

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
                    <script type="text/javascript">
                        function myFunction() {
                            var input, filter, ul, li, a, i, txtValue;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            ul = document.getElementsByClassName("show active");
                            console.log('ul', ul)
                            li = ul[0].children[0].children[0].children[0].children[1].children[0].innerText;
                            // li2 = ul[0].children[0].children[1].children[0].children[1].children[0].innerText;
                            console.log('li', li)
                            // console.log('li2', li2)
                            for (i = 0; i < ul[0].children[0].children.length; i++) {
                                a = ul[0].children[0].children[i].children[0].children[1].children[0];
                                txtValue = a.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    ul[0].children[0].children[i].style.display = "";
                                } else {
                                    ul[0].children[0].children[i].style.display = "none";
                                }
                            }
                        }
                    </script>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ Storage::url($laporanBanner?->banner_path ?? '') }});
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }

                        .isw-cardImage {
                            width: 100%;
                            height: 184px;
                            object-fit: cover;
                        }
                    </style>
                @endpush
</x-frontend.layout>
