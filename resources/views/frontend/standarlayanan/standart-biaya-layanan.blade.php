<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/standartLayanan/biaya/index.css') }}" rel="stylesheet" />
    @endpush
    <!-- content -->
    <section class="content-biaya">
        <div class="container">
            <div class="title-label ml-5 mr-5 text-center">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Bebas Biaya</label>
                    </div>
                </div>
            </div>

            <div class="informasi ml-5 mr-5 text-center">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Pelayanan informasi publik di lingkungan Kementerian BUMN
                            <strong>tidak dipungut biaya</strong> Adapun biaya penggandaan
                            atau perekaman yang timbul ditanggung oleh Pemohon Informasi
                            Publik, kecuali untuk informasi yang telah ditentukan biaya
                            Penerimaan Negara Bukan Pajak (PNBP).
                        </p>
                    </div>
                </div>
            </div>

            <div class="images">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('ppid_fe/assets/images/content/content-image/content_biaya.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->



    <x-slot:bannerText1>
        Standar Layanan / Biaya
        </x-slot>
        <x-slot:bannerText2>
            Biaya Layanan
            </x-slot>
            <x-slot:isActiveStandarLayanan>
                active
                </x-slot>
</x-frontend.layout>
