<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/faq/index.css') }}" rel="stylesheet" />
<<<<<<< HEAD
        <style>
            p::first-letter {
                text-transform: none;
            }

            p {
                text-transform: none;
            }

            span {
                text-transform: none;
            }
        </style>
    @endpush  
=======
    @endpush
>>>>>>> origin/main
    <!-- Content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pl-5 pr-5">
<<<<<<< HEAD
                    <!-- <p class="informasi_title">
=======
                    <p class="informasi_title">
>>>>>>> origin/main
                        Dibawah ini adalah beberapa pertanyaan umum dan beberapa prosedur
                        dalam pengajuan permohonan informasi publik atau pengajuan
                        keberatan atas informasi publik di lingkup Kementerian Badan Usaha
                        Milik Negara.
<<<<<<< HEAD
                    </p> -->
=======
                    </p>
>>>>>>> origin/main
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 pl-5 pr-5">
                    <div id="accordion">
                        @if ($faq)
                            @foreach ($faq as $faq_row)
                                <div class="card">
                                    <div class="card-header" id="{{ 'heading' . $loop->index }}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link w-100 d-flex align-items-center"
                                                data-toggle="collapse" data-target="{{ '#collapse' . $loop->index }}"
                                                aria-expanded="true" aria-controls="{{ 'collapse' . $loop->index }}">
                                                {{ $faq_row->pertanyaan }}

                                                <span class="ml-auto">+</span>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="{{ 'collapse' . $loop->index }}" class="collapse show"
                                        aria-labelledby="{{ 'heading' . $loop->index }}" data-parent="#accordion">
                                        <div class="card-body">
<<<<<<< HEAD
                                            {!! $faq_row->jawaban !!}
=======
                                            {{ $faq_row->jawaban }}
>>>>>>> origin/main
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->



    <x-slot:bannerText1>
        Beranda / FAQ
        </x-slot>
        <x-slot:bannerText2>
            FAQ
            </x-slot>
            <x-slot:isActiveFaq>
                active
                </x-slot>
                @push('child-scripts')
                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
<<<<<<< HEAD
                            background-image: url({{ asset($faqBanner?->banner_path ?? '') }});
=======
                            background-image: url({{ asset($faqBanner->banner_path ?? '') }});
>>>>>>> origin/main
                            background-repeat: no-repeat;
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                @endpush
</x-frontend.layout>
