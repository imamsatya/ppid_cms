<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/profile/struktur/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Informasi -->
    <section class="informasi_struktur">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_struktur">Struktur PPID Kementerian BUMN</label>
                    <a href="#" download class="unduh_materi">Unduh Struktur</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div>
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
                    </div>
                    <div class="d-flex">
                        <div class="bagan_box">
                            <span>PPID <br />
                                Kementerian BUMN</span>
                        </div>
                        <div class="triangle-left_one"></div>
                        <div class="triangle-left_two"></div>
                        <div class="triangle-left_three"></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="content_struktur">
                        <ul>
                            <li>
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_people.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="informasi">
                                        <label for="" class="title_label">Atasan PPID Kementerian</label>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            In nec malesuada arcu. Etiam auctor lobortis elit ut
                                            interdum. Sed nec nibh sit amet magna scelerisque
                                            pellentesque vitae vel enim. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. In nec malesuada arcu.
                                            Etiam auctor lobortis elit ut interdum. Sed nec nibh sit
                                            amet magna scelerisque pellentesque vitae vel enim
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_people.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="informasi">
                                        <label for="" class="title_label">PPID Pelaksana</label>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            In nec malesuada arcu. Etiam auctor lobortis elit ut
                                            interdum. Sed nec nibh sit amet magna scelerisque
                                            pellentesque vitae vel enim. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. In nec malesuada arcu.
                                            Etiam auctor lobortis elit ut interdum. Sed nec nibh sit
                                            amet magna scelerisque pellentesque vitae vel enim
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_people.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="informasi">
                                        <label for="" class="title_label">
                                            PPID Kementerian</label>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            In nec malesuada arcu. Etiam auctor lobortis elit ut
                                            interdum. Sed nec nibh sit amet magna scelerisque
                                            pellentesque vitae vel enim. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. In nec malesuada arcu.
                                            Etiam auctor lobortis elit ut interdum. Sed nec nibh sit
                                            amet magna scelerisque pellentesque vitae vel enim
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_people.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="informasi">
                                        <label for="" class="title_label">PPID Tingkat I</label>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            In nec malesuada arcu. Etiam auctor lobortis elit ut
                                            interdum. Sed nec nibh sit amet magna scelerisque
                                            pellentesque vitae vel enim. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. In nec malesuada arcu.
                                            Etiam auctor lobortis elit ut interdum. Sed nec nibh sit
                                            amet magna scelerisque pellentesque vitae vel enim
                                        </div>
                                    </div>
                                </div>
                            </li>
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
</x-frontend.layout>

<!DOCTYPE html>
<html lang="en">
