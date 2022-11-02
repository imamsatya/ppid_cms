<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/profile/tentangPPID/index.css') }}" rel="stylesheet" />
    @endpush
    <section class="informasi_tentang_ppid">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="" class="title_tentang_ppid">Tentang PPID Kementerian BUMN</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p class="informasi">
                        Sejalan dengan semangat Undang-Undang Nomor 14 Tahun 2008 tentang
                        Keterbukaan Informasi Publik, Pelayanan Informasi Publik di
                        lingkungan Kementerian BUMN mengacu pada Peraturan Menteri BUMN
                        Nomor: PER-09/MBU/08/2020 tentang Perubahan Kedua Atas Peraturan
                        Menteri BUMN Nomor: PER-08/MBU/2014 tanggal 30Juni 2014 tentang
                        Pedoman Pengelolaan Informasi dan Dokumentasi di lingkungan
                        Kementerian BUMN, yang di dalamnya mencakup ruang lingkup
                        kewenangan Pelayanan Informasi Publik Kementerian BUMN serta
                        penunjukan Pejabat Pengelola Informasi dan Dokumentasi (PPID)
                        Kementerian BUMN. Pemenuhan Pelayanan Informasi Publik di
                        Kementerian BUMN juga mengacu pada Keputusan Pejabat Pengelola
                        Informasi dan Dokumentasi (PPID) Nomor KEP-01/PPID.KBUMN/09/2020
                        tanggal 8 September 2020 tentang Daftar Informasi Publik di
                        Lingkungan Kementerian BUMN serta Keputusan PPID Nomor
                        KEP-02/PPID.KBUMN/12/2018 Tanggal 21 Desember 2018 dan Daftar
                        Informasi Dikecualikan di lingkungan Kementerian BUMN. Dalam
                        rangka penilaian implementasi keterbukaan informasi Badan Publik
                        tahun 2020, PPID Kementerian BUMN mendapat nilai skor 85.27 dengan
                        kategori Keterbukaan Badan Publik “Menuju Informatif”. Tentunya
                        hal ini semakin memacu PPID Kementerian BUMN untuk terus
                        meningkatkan kualitas pelayanan informasi publik yang sejalan
                        dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan
                        Informasi Publik. Selain menerima permohonan secara langsung, PPID
                        Kementerian BUMN juga melayani permohonan informasi yang
                        disampaikan secara tidak langsung. Pada Februari 2021, PPID
                        Kementerian BUMN resmi meluncurkan Aplikasi Mobile PPID sehingga
                        memperkaya kanal informasi yang dapat dimanfaatkan oleh masyarakat
                        untuk mendapatkan informasi publik Kementerian BUMN.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="images">
                        <img src="{{ asset('ppid_fe/assets/images/content/content-image/content_tentang_ppid.png') }}"
                            class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-slot:bannerText1>
        Profil / Profil Singkat
        </x-slot>
        <x-slot:bannerText2>
            Profil Singkat
            </x-slot>
            <x-slot:isActiveProfil>
                active
                </x-slot>
</x-frontend.layout>
