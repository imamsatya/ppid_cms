<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/informasiPublik/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Filter -->
    <section class="filter-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
<<<<<<< HEAD
                    <input type="text" id="myInput" onkeyup="myFunction()"
                        placeholder="Masukkan Kata Kunci Pencarian..." class="pl-3 filter-input" />
=======
                    <input type="text" placeholder="Masukkan Kata Kunci Pencarian..." class="pl-3 filter-input" />
>>>>>>> origin/main
                    <button class="btn btn-filter">Filter</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Filter -->

    <!-- content -->
<<<<<<< HEAD
    {{-- {{ count(app('request')->all()) }} --}}
    <section class="content">
        <div class="container bg-transparent" style="background-image: url('./storage/bg_bumn7.png');">
=======
    {{ count(app('request')->all()) }}
    <section class="content">
        <div class="container">
>>>>>>> origin/main
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{ app('request')->input('informasi_secara_berkala') ? 'active' : null }} 
                            {{ count(app('request')->all()) < 1 ? 'active' : null }}
                            "
                            id="v-pills-berkala-tab" data-toggle="pill" href="#v-pills-berkala" role="tab"
                            aria-controls="v-pills-berkala" aria-selected="true">
                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_informasi.png') }}"
                                alt="">
                            Informasi Secara Berkala</a>
                        <a class="nav-link {{ app('request')->input('informasi_setiap_saat') ? 'active' : null }}"
                            id="v-pills-setiapsaat-tab" data-toggle="pill" href="#v-pills-setiapsaat" role="tab"
                            aria-controls="v-pills-setiapsaat" aria-selected="false">
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
                        <div class="tab-pane fade show  {{ app('request')->input('informasi_secara_berkala') ? 'show active' : null }} {{ count(app('request')->all()) < 1 ? 'show active' : null }}"
                            id="v-pills-berkala" role="tabpanel" aria-labelledby="v-pills-berkala-tab">

                            <div class="row">
                                <div class="col-md-12">
                                    @if ($informasiSecaraBerkala)
                                        @foreach ($informasiSecaraBerkala as $informasiSecaraBerkala_row)
                                            <div class="data_list"
                                                style="{{ $informasiSecaraBerkala_row->url || $informasiSecaraBerkala_row->file_path ?? 'cursor: default' }}">
                                                @if ($informasiSecaraBerkala_row->url)
                                                    <span><a style="color:#104e70; font-size: 1rem;"
                                                            href="{{ $informasiSecaraBerkala_row->url }}">{{ $informasiSecaraBerkala_row->judul_informasi }}</a></span>
                                                @else
                                                    <span><a style="color:#104e70; cursor: default; font-size: 1rem;"
                                                            href="javascript:void(0)">{{ $informasiSecaraBerkala_row->judul_informasi }}</a></span>
                                                @endif
                                            </div>
                                        @endforeach
                                    @endif



                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            @if ($informasiSecaraBerkala->currentPage() - 1 != 0)
                                                <li class="page-item ">
<<<<<<< HEAD
                                                    <a class="page-link"
=======
                                                    <a class="page-link" href="javascript:void(0)"
>>>>>>> origin/main
                                                        href="{{ $informasiSecaraBerkala->previousPageUrl() }}"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($informasiSecaraBerkala->currentPage() - 1 != 0)
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSecaraBerkala->url($informasiSecaraBerkala->currentPage() - 1) }}">{{ $informasiSecaraBerkala->currentPage() - 1 }}</a>
                                                </li>
                                            @endif
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="{{ $informasiSecaraBerkala->url($informasiSecaraBerkala->currentPage()) }}">{{ $informasiSecaraBerkala->currentPage() }}
                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            @if ($informasiSecaraBerkala->currentPage() < $informasiSecaraBerkala->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSecaraBerkala->url($informasiSecaraBerkala->currentPage() + 1) }}">{{ $informasiSecaraBerkala->currentPage() + 1 }}</a>
                                                </li>
                                            @endif
                                            @if ($informasiSecaraBerkala->currentPage() != $informasiSecaraBerkala->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSecaraBerkala->nextPageUrl() }}"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade {{ app('request')->input('informasi_setiap_saat') ? 'show active' : null }}
                            "
                            id="v-pills-setiapsaat" role="tabpanel" aria-labelledby="v-pills-setiapsaat-tab">
<<<<<<< HEAD

                            <div class="row">
                                <div class="col-md-12">
                                    @if ($informasiSetiapSaat)
                                        @foreach ($informasiSetiapSaat as $informasiSetiapSaat_row)
                                            <div class="data_list">

                                                @if ($informasiSetiapSaat_row->url)
                                                    <span><a style="color:#104e70; font-size: 1rem;"
                                                            href="{{ $informasiSetiapSaat_row->url }}">{{ $informasiSetiapSaat_row->judul_informasi }}</a></span>
                                                @else
                                                    <span><a style="color:#104e70; cursor: default; font-size: 1rem;"
                                                            href="javascript:void(0)">{{ $informasiSetiapSaat_row->judul_informasi }}</a></span>
                                                @endif
                                            </div>
                                        @endforeach
                                    @endif



                                </div>
                            </div>


=======
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if ($informasiSetiapSaat)
                                                @foreach ($informasiSetiapSaat as $informasiSetiapSaat_row)
                                                    <div class="data_list">

                                                        @if ($informasiSetiapSaat_row->url)
                                                            <span><a style="color:#104e70; font-size: 1rem;"
                                                                    href="{{ $informasiSetiapSaat_row->url }}">{{ $informasiSetiapSaat_row->judul_informasi }}</a></span>
                                                        @else
                                                            <span><a style="color:#104e70; cursor: default; font-size: 1rem;"
                                                                    href="javascript:void(0)">{{ $informasiSetiapSaat_row->judul_informasi }}</a></span>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @endif



                                        </div>
                                    </div>

                                </div>
                            </div>
>>>>>>> origin/main
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            @if ($informasiSetiapSaat->currentPage() - 1 != 0)
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="{{ $informasiSetiapSaat->previousPageUrl() }}"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($informasiSetiapSaat->currentPage() - 1 != 0)
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSetiapSaat->url($informasiSetiapSaat->currentPage() - 1) }}">{{ $informasiSetiapSaat->currentPage() - 1 }}</a>
                                                </li>
                                            @endif
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="{{ $informasiSetiapSaat->url($informasiSetiapSaat->currentPage()) }}">{{ $informasiSetiapSaat->currentPage() }}
                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            @if ($informasiSetiapSaat->currentPage() < $informasiSetiapSaat->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSetiapSaat->url($informasiSetiapSaat->currentPage() + 1) }}">{{ $informasiSetiapSaat->currentPage() + 1 }}</a>
                                                </li>
                                            @endif
                                            @if ($informasiSetiapSaat->currentPage() != $informasiSetiapSaat->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSetiapSaat->nextPageUrl() }}"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade {{ app('request')->input('informasi_serta_merta') ? 'show active' : null }}"
                            id="v-pills-sertamerta" role="tabpanel" aria-labelledby="v-pills-sertamerta-tab">

                            <div class="row">
                                <div class="col-md-12">
                                    @if ($informasiSertaMerta)
                                        @foreach ($informasiSertaMerta as $informasiSertaMerta_row)
                                            <div class="data_list">
                                                @if ($informasiSertaMerta_row->url)
                                                    <span><a style="color:#104e70; font-size: 1rem;"
                                                            href="{{ $informasiSertaMerta_row->url }}">{{ $informasiSertaMerta_row->judul_informasi }}</a></span>
                                                @else
                                                    <span><a style="color:#104e70; cursor: default; font-size: 1rem;"
                                                            href="javascript:void(0)">{{ $informasiSertaMerta_row->judul_informasi }}</a></span>
                                                @endif
                                            </div>
                                        @endforeach
                                    @endif



                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            @if ($informasiSertaMerta->currentPage() - 1 != 0)
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="{{ $informasiSertaMerta->previousPageUrl() }}"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($informasiSertaMerta->currentPage() - 1 != 0)
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSertaMerta->url($informasiSertaMerta->currentPage() - 1) }}">{{ $informasiSertaMerta->currentPage() - 1 }}</a>
                                                </li>
                                            @endif
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="#">{{ $informasiSertaMerta->currentPage() }}
                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            @if ($informasiSertaMerta->currentPage() < $informasiSertaMerta->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSertaMerta->url($informasiSertaMerta->currentPage() + 1) }}">{{ $informasiSertaMerta->currentPage() + 1 }}</a>
                                                </li>
                                            @endif
                                            @if ($informasiSertaMerta->currentPage() != $informasiSertaMerta->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $informasiSertaMerta->nextPageUrl() }}"><i
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
        Beranda / Informasi Publik
        </x-slot>
        <x-slot:bannerText2>
            Informasi Publik
            </x-slot>
            <x-slot:isActiveInformasiPublik>
                active
                </x-slot>
                @push('child-scripts')
<<<<<<< HEAD
                    <script type="text/javascript">
                        function myFunction() {
                            var input, filter, ul, li, a, i, txtValue;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            ul = document.getElementsByClassName("show active");
                            console.log('ul', ul)
                            //children 3
                            li = ul[0].children[0].children[0].children[0].children[0].innerText;
                            // li2 = ul[0].children[0].children[0].children[1].children[0].innerText
                            // console.log('li', li)
                            // console.log('li2', li2)
                            for (i = 0; i < ul[0].children[0].children[0].children.length; i++) {
                                a = ul[0].children[0].children[0].children[i].children[0];
                                txtValue = a.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    ul[0].children[0].children[0].children[i].style.display = "";
                                } else {
                                    ul[0].children[0].children[0].children[i].style.display = "none";
                                }
                            }
                        }
                    </script>
=======
>>>>>>> origin/main
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
<<<<<<< HEAD
                            background-image: url({{ Storage::url($informasiPublikBanner?->banner_path ?? '') }});
=======
                            background-image: url({{ asset($informasiPublikBanner->banner_path ?? '') }});
>>>>>>> origin/main
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
