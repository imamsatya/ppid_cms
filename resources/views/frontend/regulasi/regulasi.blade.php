<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/regulasi/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Filter -->
    <section class="filter-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Pencarian..." class="pl-3 filter-input" />
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
                            <a class="nav-link active" id="pills-peraturan-tab" data-toggle="pill"
                                href="#pills-peraturan" role="tab" aria-controls="pills-peraturan"
                                aria-selected="true">Peraturan Keterbukaan Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-rancangan-tab" data-toggle="pill" href="#pills-rancangan"
                                role="tab" aria-controls="pills-rancangan" aria-selected="false">Rancangan
                                Peraturan Keterbukaan Informasi</a>
                        </li>
                    </ul>

                    <!--  -->

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-peraturan" role="tabpanel"
                            aria-labelledby="pills-peraturan-tab">
                            <div class="row">
                                @if ($peraturanKIP)
                                    @foreach ($peraturanKIP as $peraturanKIP_row)
                                        <div class="col-md-4 mt-2">
                                            <div class="card card-informasi w-100">
                                                <img class="card-img-top"
                                                    src="{{ asset('ppid_fe/assets/images/content/content-image/content_peraturan.png') }}"
                                                    alt="Card image cap" />
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        {{ $peraturanKIP_row->judul_peraturan }}
                                                    </p>
                                                    <span class="title">
                                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_title.png') }}"
                                                            class="img-fluid" alt="" />
                                                        Lihat Judul Lengkap
                                                    </span>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ asset($peraturanKIP_row->file_path) }}" download
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

                                {{-- <div class="col-md-4">
                                    <div class="card card-informasi w-100">
                                        <img class="card-img-top"
                                            src="{{ asset('ppid_fe/assets/images/content/content-image/content_peraturan.png') }}"
                                            alt="Card image cap" />
                                        <div class="card-body">
                                            <p class="card-text">
                                                Some quick example text to build on the card title
                                            </p>
                                            <span class="title">
                                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_title.png') }}"
                                                    class="img-fluid" alt="" />
                                                Lihat Judul Lengkap
                                            </span>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript(0)" download class="unduh ml-auto">
                                                    <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_download.png') }}"
                                                        class="img-fluid" alt="" />
                                                    <span>Unduh / View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-informasi w-100">
                                        <img class="card-img-top"
                                            src="{{ asset('ppid_fe/assets/images/content/content-image/content_peraturan.png') }}"
                                            alt="Card image cap" />
                                        <div class="card-body">
                                            <p class="card-text">
                                                Some quick example text to build on the card title
                                            </p>
                                            <span class="title">
                                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_title.png') }}"
                                                    class="img-fluid" alt="" />
                                                Lihat Judul Lengkap
                                            </span>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript(0)" download class="unduh ml-auto">
                                                    <img src="./assets/images/content/icon/ic_download.png"
                                                        class="img-fluid" alt="" />
                                                    <span>Unduh / View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
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
                        <div class="tab-pane fade" id="pills-rancangan" role="tabpanel"
                            aria-labelledby="pills-rancangan-tab">
                            <div class="row">
                                @if ($rancanganPeraturanKIP)
                                    @foreach ($rancanganPeraturanKIP as $rancanganPeraturanKIP_row)
                                        <div class="col-md-4 mt-2">

                                            <div class="card card-informasi w-100">
                                                <img class="card-img-top"
                                                    src="{{ asset('ppid_fe/assets/images/content/content-image/content_rancangan.png') }}"
                                                    alt="Card image cap" />
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        {{ $rancanganPeraturanKIP_row->judul_peraturan }}
                                                    </p>
                                                    <span class="title">
                                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_title.png') }}"
                                                            class="img-fluid" alt="" />
                                                        Lihat Judul Lengkap
                                                    </span>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ asset($rancanganPeraturanKIP_row->file_path) }}"
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
        Beranda / Regulasi
        </x-slot>
        <x-slot:bannerText2>
            Regulasi
            </x-slot>
            <x-slot:isActiveRegulasi>
                active
                </x-slot>
                @push('child-scripts')
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ asset($regulasiBanner->banner_path ?? '') }});
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
