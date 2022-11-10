<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/standartLayanan/maklumat/index.css') }}" rel="stylesheet" />
    @endpush

    <!-- content -->
    <section class="content-maklumat">
        <div class="container">
            <div class="title-label">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Maklumat PPID Kementerian BUMN</label>
                    </div>
                </div>
            </div>

            <div class="images-maklumat">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-fluid%"
                            src="{{ asset('ppid_fe/assets/images/content/content-image/content_maklumat.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->


    <x-slot:bannerText1>
        Standar Layanan / Maklumat
        </x-slot>
        <x-slot:bannerText2>
            Maklumat
            </x-slot>
            <x-slot:isActiveStandarLayanan>
                active
                </x-slot>
</x-frontend.layout>
