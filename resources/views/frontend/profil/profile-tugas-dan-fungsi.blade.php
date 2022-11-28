<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/profile/tugasFungsi/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Informasi -->
    <section class="informasi_tugas_fungsi ">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_tugas_fungsi">{{ $tugasDanFungsi->judul ?? '' }}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="list_fungsi">
                        {{-- <ul>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="square"></div>
                                    <div class="informasi">
                                        Mengoordinasikan pengumpulan seluruh Informasi Publik
                                        secara fisik dari setiap unit kerja, meliputi informasi
                                        yang wajib disediakan dan diumumkan secara berkala, wajib
                                        tersedia setiap saat dan informasi terbuka lainnya yang
                                        diminta pemohon Informasi Publik;
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="square"></div>
                                    <div class="informasi">
                                        Mengoordinasikan pendataan Informasi Publik yang dikuasai
                                        oleh setiap unit kerja di Kementerian BUMN dalam rangka
                                        pembuatan dan pemutakhiran Daftar Informasi Publik setelah
                                        dimutakhirkan oleh pimpinan masingmasing unit kerja
                                        sekurang-kurangnya 1 (satu) kali dalam sebulan
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="square"></div>
                                    <div class="informasi">
                                        Mengoordinasikan penyediaan dan pelayanan Informasi Publik
                                        melalui pengumuman dan/atau permohonan
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="square"></div>
                                    <div class="informasi">
                                        Mengoordinasikan pengumuman Informasi Publik melalui media
                                        yang secara efektif dapat menjangkau seluruh pemangku
                                        kepentingan;
                                    </div>
                                </div>
                            </li>
                        </ul> --}}
                        {!! $tugasDanFungsi->konten ?? '' !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="images">
                        <img src="{{ asset($tugasDanFungsi->side_image_path ?? '') }}" class="img-fluid"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi -->
    <x-slot:bannerText1>
        Profil / Tugas dan Fungsi
        </x-slot>
        <x-slot:bannerText2>
            Tugas dan Fungsi
            </x-slot>
            <x-slot:isActiveProfil>
                active
                </x-slot>

                @push('child-scripts')
                    {{-- <script>
                         document.getElementById('konten').childNodes[1].className = 'informasi'
                    </script> --}}
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ asset($tugasDanFungsi->banner_path ?? '') }});
                            background-repeat: no-repeat;
                            /*Prevent showing multiple background images*/
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush


</x-frontend.layout>
