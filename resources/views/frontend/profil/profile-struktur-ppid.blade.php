<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/profile/struktur/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Informasi -->
    <section class="informasi_struktur">
<<<<<<< HEAD
        <div class="container bg-transparent" style="background-image: url('./storage/bg_bumn7.png');">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_struktur">{{ $strukturOrganisasi->judul ?? '' }}</label>
                    <!-- <a href="#" download class="unduh_materi">Unduh Struktur</a> -->
=======
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_struktur">{{ $strukturOrganisasi->judul ?? '' }}</label>
                    <a href="#" download class="unduh_materi">Unduh Struktur</a>
>>>>>>> origin/main
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                    @foreach ($baganKiri as $baganKiri_row)
                        <div>

                            @if ($loop->index + 1 === count($baganKiri))
                                <div class="d-flex">
                                    <div class="bagan_box">
                                        {{-- <span>PPID <br />
                                            Kementerian BUMN</span> --}}
                                        <span>{{ $baganKiri_row->nomenklatur }}</span>
                                    </div>
                                    <div class="triangle-left_one"></div>
                                    <div class="triangle-left_two"></div>
                                    <div class="triangle-left_three"></div>
                                </div>
                            @else
                                <div>
                                    <div class="bagan_box_one">
                                        <span>{{ $baganKiri_row->nomenklatur }}</span>
                                    </div>
                                    <div class="triangle-down"></div>
                                </div>
                            @endif

                        </div>
                    @endforeach

                    {{-- <div>
                        <div class="bagan_box_one">
                            <span>Menteri BUMN</span>
                        </div>
                        <div class="triangle-down"></div>
                    </div>
                    <div>
                        <div class="bagan_box_one">
                            <span>Atasan PPID <br />
                                Kementerian BUMN</span>
                        </div>
                        <div class="triangle-down"></div>
                    </div> --}}

                </div>
                <div class="col-md-9">
                    <div class="content_struktur">
                        <ul>
                            @foreach ($baganKanan as $baganKanan_row)
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_people.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="informasi">

                                            <label for=""
                                                class="title_label">{{ $baganKanan_row->nomenklatur }}</label>
                                            <div class="description">
                                                {{ $baganKanan_row->deskripsi }}
                                            </div>


                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi -->
    <x-slot:bannerText1>
        Profil / Struktur Organisasi
        </x-slot>
        <x-slot:bannerText2>
            Struktur PPID
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
<<<<<<< HEAD
                            background-image: url({{ Storage::url($strukturOrganisasi?->banner_path ?? '') }});
=======
                            background-image: url({{ asset($strukturOrganisasi->banner_path ?? '') }});
>>>>>>> origin/main
                            background-repeat: no-repeat;
                            /*Prevent showing multiple background images*/
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>

<!DOCTYPE html>
<html lang="en">
