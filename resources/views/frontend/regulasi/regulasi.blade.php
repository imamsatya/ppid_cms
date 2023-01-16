<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/regulasi/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Filter -->
    <!-- <section class="filter-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" onkeyup="myFunction()" placeholder="Pencarian..." id="myInput"
                        class="pl-3 filter-input" />
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
                            <a class="nav-link {{ count(app('request')->all()) < 1 ? 'active' : null }} {{ app('request')->input('peraturan_kip') ? 'active' : null }}"
                                id="pills-peraturan-tab" data-toggle="pill" href="#pills-peraturan" role="tab"
                                aria-controls="pills-peraturan" aria-selected="true">Peraturan
                                Keterbukaan Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ app('request')->input('rancangan_peraturan_kip') ? 'active' : null }}"
                                id="pills-rancangan-tab" data-toggle="pill" href="#pills-rancangan" role="tab"
                                aria-controls="pills-rancangan" aria-selected="false">Rancangan
                                Peraturan Keterbukaan Informasi</a>
                        </li>
                    </ul>

                    <!--  -->

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade {{ app('request')->input('peraturan_kip') ? 'show active' : null }} {{ count(app('request')->all()) < 1 ? 'show active' : null }}""
                            id="pills-peraturan" role="tabpanel" aria-labelledby="pills-peraturan-tab">
                            <div class="row">
                                @if ($peraturanKIP)
                                    @foreach ($peraturanKIP as $peraturanKIP_row)
                                        <div class="col-md-4 mt-2">
                                            <div class="card card-informasi w-100">
                                                @if ($regulasiBanner->thumbnail_path)
                                                    <img class="card-img-top"
                                                        src="{{ asset('storage/' . $regulasiBanner->thumbnail_path) }}"
                                                        alt="Card image cap" />
                                                @else
                                                    <img class="card-img-top"
                                                        src="{{ asset('ppid_fe/assets/images/content/content-image/content_peraturan.png') }}"
                                                        alt="Card image cap" />
                                                @endif

                                                <div class="card-body">
                                                    <p class="card-text" id="textKIP{{ $loop->index }}">
                                                        @if (strlen($peraturanKIP_row->judul_peraturan) <= 70)
                                                            {{ $peraturanKIP_row->judul_peraturan }}
                                                        @else
                                                            {{ substr($peraturanKIP_row->judul_peraturan, 0, 70) . '...' }}
                                                        @endif
                                                    </p>
                                                    <a href="javascript:void(0)"
                                                        onclick="seeMoreJudulRegulasi({{ $loop->index }})"
                                                        class="title">
                                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_title.png') }}"
                                                            class="img-fluid" alt="" />
                                                        Lihat Judul Lengkap
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ asset('storage/' . $peraturanKIP_row->file_path) }}"
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
                                            @if ($peraturanKIP->currentPage() - 1 != 0)
                                                <li class="page-item ">
                                                    <a class="page-link" href="{{ $peraturanKIP->previousPageUrl() }}"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($peraturanKIP->currentPage() - 1 != 0)
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $peraturanKIP->url($peraturanKIP->currentPage() - 1) }}">{{ $peraturanKIP->currentPage() - 1 }}</a>
                                                </li>
                                            @endif
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="{{ $peraturanKIP->url($peraturanKIP->currentPage()) }}">{{ $peraturanKIP->currentPage() }}
                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            @if ($peraturanKIP->currentPage() < $peraturanKIP->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $peraturanKIP->url($peraturanKIP->currentPage() + 1) }}">{{ $peraturanKIP->currentPage() + 1 }}</a>
                                                </li>
                                            @endif
                                            @if ($peraturanKIP->currentPage() != $peraturanKIP->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $peraturanKIP->nextPageUrl() }}"><i
                                                            class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade {{ app('request')->input('rancangan_peraturan_kip') ? 'show active' : null }}"
                            id="pills-rancangan" role="tabpanel" aria-labelledby="pills-rancangan-tab">
                            <div class="row">
                                @if ($rancanganPeraturanKIP)
                                    @foreach ($rancanganPeraturanKIP as $rancanganPeraturanKIP_row)
                                        <div class="col-md-4 mt-2">

                                            <div class="card card-informasi w-100">
                                                @if ($regulasiBanner->thumbnail_rancangan_path)
                                                    <img class="card-img-top"
                                                        src="{{ asset('storage/' . $regulasiBanner->thumbnail_rancangan_path) }}"
                                                        alt="Card image cap" />
                                                @else
                                                    <img class="card-img-top"
                                                        src="{{ asset('ppid_fe/assets/images/content/content-image/content_peraturan.png') }}"
                                                        alt="Card image cap" />
                                                @endif
                                                <div class="card-body">
                                                    <p class="card-text" id="textRancanganKIP{{ $loop->index }}">
                                                        @if (strlen($rancanganPeraturanKIP_row->judul_peraturan) <= 70)
                                                            {{ $rancanganPeraturanKIP_row->judul_peraturan }}
                                                        @else
                                                            {{ substr($rancanganPeraturanKIP_row->judul_peraturan, 0, 70) . '...' }}
                                                        @endif
                                                    </p>
                                                    <a href="javascript:void(0)"
                                                        onclick="seeMoreJudulRancanganRegulasi({{ $loop->index }})"
                                                        class="title">
                                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_title.png') }}"
                                                            class="img-fluid" alt="" />
                                                        Lihat Judul Lengkap
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ asset('storage/' . $rancanganPeraturanKIP_row->file_path) }}"
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
                                            @if ($rancanganPeraturanKIP->currentPage() - 1 != 0)
                                                <li class="page-item ">
                                                    <a class="page-link"
                                                        href="{{ $rancanganPeraturanKIP->previousPageUrl() }}"
                                                        tabindex="-1">
                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($rancanganPeraturanKIP->currentPage() - 1 != 0)
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $rancanganPeraturanKIP->url($rancanganPeraturanKIP->currentPage() - 1) }}">{{ $rancanganPeraturanKIP->currentPage() - 1 }}</a>
                                                </li>
                                            @endif
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="{{ $rancanganPeraturanKIP->url($rancanganPeraturanKIP->currentPage()) }}">{{ $rancanganPeraturanKIP->currentPage() }}
                                                    <span class="sr-only">(current)</span></a>
                                            </li>
                                            @if ($rancanganPeraturanKIP->currentPage() < $rancanganPeraturanKIP->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $rancanganPeraturanKIP->url($rancanganPeraturanKIP->currentPage() + 1) }}">{{ $rancanganPeraturanKIP->currentPage() + 1 }}</a>
                                                </li>
                                            @endif
                                            @if ($rancanganPeraturanKIP->currentPage() != $rancanganPeraturanKIP->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="{{ $rancanganPeraturanKIP->nextPageUrl() }}"><i
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
        Beranda / Regulasi
        </x-slot>
        <x-slot:bannerText2>
            Regulasi
            </x-slot>
            <x-slot:isActiveRegulasi>
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

                        function seeMoreJudulRegulasi(index) {
                            let peraturanKIP = {{ Js::from($peraturanKIP) }}

                            peraturanKIP = peraturanKIP['data']

                            let htmlLength = document.getElementById(`textKIP${index}`)
                                .innerHTML.trim().length
                            let realLength = peraturanKIP[index]['judul_peraturan'].length

                            if ((htmlLength < 74) && (realLength > 70)) {
                                console.log('halo')
                                document.getElementById('textKIP' + index).innerHTML = peraturanKIP[index]['judul_peraturan']
                                return;
                            }

                            if ((realLength > 70) && (htmlLength > 70)) {
                                document.getElementById('textKIP' + index).innerHTML = peraturanKIP[index]['judul_peraturan']
                                    .substring(0, 70) + '...'
                                return;
                            }



                        }

                        function seeMoreJudulRancanganRegulasi(index) {

                            let rancanganPeraturanKIP = {{ Js::from($rancanganPeraturanKIP) }}
                            rancanganPeraturanKIP = rancanganPeraturanKIP['data']
                            let htmlLength = document.getElementById('textRancanganKIP' + index)
                                .innerHTML.trim().length
                            let realLength = rancanganPeraturanKIP[index]['judul_peraturan'].length

                            if ((htmlLength < 74) && (realLength > 70)) {
                                console.log('halo')
                                document.getElementById('textRancanganKIP' + index).innerHTML = rancanganPeraturanKIP[index][
                                    'judul_peraturan'
                                ]
                                return;
                            }

                            if ((realLength > 70) && (htmlLength > 70)) {
                                document.getElementById('textRancanganKIP' + index).innerHTML = rancanganPeraturanKIP[index][
                                        'judul_peraturan'
                                    ]
                                    .substring(0, 70) + '...'
                                return;
                            }



                        }
                    </script>
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ asset('storage/' . $regulasiBanner->banner_path ?? '') }});
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
