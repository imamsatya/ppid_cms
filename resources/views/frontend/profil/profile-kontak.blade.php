<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/profile/kontak/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- Informasi -->
    <section class="informasi_kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="images">
                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_marker.png') }}" class="img-fluid"
                            alt="" />
                    </div>
                    <label class="mt-3">Alamat</label>
                    <p for="">Jl. Medan Merdeka Selatan No. 13 Gambir, Jakarta 10110</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="images">
                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_telp.png') }}" class="img-fluid"
                            alt="" />
                    </div>
                    <label class="mt-3">Telepon</label>
                    <p for="">(021) 29935678</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="images">
                        <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_email.png') }}" class="img-fluid"
                            alt="" />
                    </div>
                    <label class="mt-3">Pesan</label>
                    <p for="">ppid@bumn.go.id</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi -->

    <!-- Map -->
    <section class="mapping">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <label for="">Waktu Pelayanan Informasi Publik</label>
                    <ul class="pl-3">
                        <li class="d-flex align-items-center">
                            <div class="square"></div>
                            <div class="informasi_datetime"> Senin - Kamis : Pukul 08.00 - 16.00 WIB
                                <br />
                                Istirahat : Pukul 12.00 - 13.00 WIB
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="square"></div>
                            <div class="informasi_datetime">
                                Jumat Pukul 08.00 - 16.00
                                <br />
                                Istirahat : Pukul 11.30 - 13.30 WIB
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.619850991507!2d106.82548799999999!3d-6.181607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42e9e42817d%3A0xeec68bcf239dda0!2sJl.%20Medan%20Merdeka%20Sel.%20No.13%2C%20RT.11%2FRW.2%2C%20Gambir%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010110!5e0!3m2!1sid!2sid!4v1662772084242!5m2!1sid!2sid"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map -->

    <!-- Ruang Pelayanan -->
    <section class="ruang_pelayanan text-center">
        <div class="container">
            <label class="mb-4" for="">Ruang Pelayanan Informasi</label>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('ppid_fe/assets/images/content/content-image/content_kontak_1.png') }}"
                        alt="" />
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('ppid_fe/assets/images/content/content-image/content_kontak_2.png') }}"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Ruang Pelayanan -->
    <x-slot:bannerText1>
        Profil / Kontak
        </x-slot>
        <x-slot:bannerText2>
            Kontak
            </x-slot>
            <x-slot:isActiveProfil>
                active
                </x-slot>
</x-frontend.layout>
