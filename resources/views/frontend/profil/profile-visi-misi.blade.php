<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/profile/visiMisi/index.css') }}" rel="stylesheet" />
    @endpush
    <section class="informasi_visi_misi">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="title_visi_misi"> Visi PPID </label>
                    <div class="visi_misi_box">
                        <div class="informasi">
                            {{-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                consequat placerat odio eget congue. Vestibulum pellentesque
                                sem eu dolor egestas pulvinar. Curabitur vitae nulla sed leo
                                semper faucibus eu non nibh. Nullam et dignissim quam. Mauris
                                at metus nisl. Phasellus consectetur, erat vel molestie
                                tristique, lacus tellus porttitor arcu,
                            </p> --}}
                            {!! $visiMisi->visi ?? '' !!}
                        </div>
                        <div class="half-circle-one"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="" class="title_visi_misi"> Misi PPID </label>
                    <div class="visi_misi_box">
                        <div class="list_visit_misi">
                            {{-- <ul>
                                <li>
                                    <div class="d-flex">
                                        <div class="square"></div>
                                        <div class="informasi">
                                            Mengoordinasikan pengumpulan seluruh Informasi Publik
                                            secara fisik dari setiap unit kerja, meliputi informasi
                                            yang wajib disediakan dan diumumkan secara berkala,
                                            wajib tersedia setiap saat dan informasi terbuka lainnya
                                            yang diminta pemohon Informasi Publik;
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="square"></div>
                                        <div class="informasi">
                                            Mengoordinasikan pendataan Informasi Publik yang
                                            dikuasai oleh setiap unit kerja di Kementerian BUMN
                                            dalam rangka pembuatan dan pemutakhiran Daftar Informasi
                                            Publik setelah dimutakhirkan oleh pimpinan masingmasing
                                            unit kerja sekurang-kurangnya 1 (satu) kali dalam
                                            sebulan
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="square"></div>
                                        <div class="informasi">
                                            Mengoordinasikan penyediaan dan pelayanan Informasi
                                            Publik melalui pengumuman dan/atau permohonan
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="square"></div>
                                        <div class="informasi">
                                            Mengoordinasikan pengumuman Informasi Publik melalui
                                            media yang secara efektif dapat menjangkau seluruh
                                            pemangku kepentingan;
                                        </div>
                                    </div>
                                </li>
                            </ul> --}}
                            {!! $visiMisi->misi ?? '' !!}
                        </div>
                        <div class="half-circle-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-slot:bannerText1>
        Profil / Visi Dan Misi
        </x-slot>
        <x-slot:bannerText2>
            Visi Dan Misi
            </x-slot>
            <x-slot:isActiveProfil>
                active
                </x-slot>
                @push('child-scripts')
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url({{ asset($visiMisi->banner_path) }});
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
