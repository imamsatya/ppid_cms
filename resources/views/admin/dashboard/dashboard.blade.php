<x-admin.layout>
    <x-slot:subMenuTitle>
        Dashboard
        </x-slot>

        <x-slot:mainMenuTitle>
            Dashboard
            </x-slot>



            @if ($errors->any())
                <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
                    {{-- <span class="svg-icon svg-icon-muted svg-icon-2hx">
                </span> --}}
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                fill="currentColor" />
                            <rect x="9" y="13.0283" width="7.3536" height="1.2256" rx="0.6128"
                                transform="rotate(-45 9 13.0283)" fill="currentColor" />
                            <rect x="9.86664" y="7.93359" width="7.3536" height="1.2256" rx="0.6128"
                                transform="rotate(45 9.86664 7.93359)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-white pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h4 class="mb-2 text-white">Error !</h4>
                        <!--end::Title-->

                        <!--begin::Content-->
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button"
                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                        data-bs-dismiss="alert">
                        <span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M6 19.7C5.7 19.7 5.5 19.6 5.3 19.4C4.9 19 4.9 18.4 5.3 18L18 5.3C18.4 4.9 19 4.9 19.4 5.3C19.8 5.7 19.8 6.29999 19.4 6.69999L6.7 19.4C6.5 19.6 6.3 19.7 6 19.7Z"
                                    fill="currentColor" />
                                <path
                                    d="M18.8 19.7C18.5 19.7 18.3 19.6 18.1 19.4L5.40001 6.69999C5.00001 6.29999 5.00001 5.7 5.40001 5.3C5.80001 4.9 6.40001 4.9 6.80001 5.3L19.5 18C19.9 18.4 19.9 19 19.5 19.4C19.3 19.6 19 19.7 18.8 19.7Z"
                                    fill="currentColor" />
                            </svg></span>
                    </button>
                    <!--end::Close-->
                </div>

            @endif
            @if (\Session::has('success'))
                <!--begin::Alert-->
                <div class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row p-5 mb-10">
                    {{-- <span class="svg-icon svg-icon-muted svg-icon-2hx">
                </span> --}}
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                fill="currentColor" />
                            <path
                                d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-white pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h4 class="mb-2 text-white">Sukses !</h4>
                        <!--end::Title-->

                        <!--begin::Content-->
                        <span>{{ Session::get('success') }}</span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button"
                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                        data-bs-dismiss="alert">
                        <span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M6 19.7C5.7 19.7 5.5 19.6 5.3 19.4C4.9 19 4.9 18.4 5.3 18L18 5.3C18.4 4.9 19 4.9 19.4 5.3C19.8 5.7 19.8 6.29999 19.4 6.69999L6.7 19.4C6.5 19.6 6.3 19.7 6 19.7Z"
                                    fill="currentColor" />
                                <path
                                    d="M18.8 19.7C18.5 19.7 18.3 19.6 18.1 19.4L5.40001 6.69999C5.00001 6.29999 5.00001 5.7 5.40001 5.3C5.80001 4.9 6.40001 4.9 6.80001 5.3L19.5 18C19.9 18.4 19.9 19 19.5 19.4C19.3 19.6 19 19.7 18.8 19.7Z"
                                    fill="currentColor" />
                            </svg></span>
                    </button>
                    <!--end::Close-->
                </div>
                <!--end::Alert-->
            @endif
            <h1>Dashboard</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="statistik">
                        <br>
                        <h3 for="">Statistik Permohonan Informasi Publik Tahun {{ date('Y') }}</h3>

                        <div class="card">
                            <div class="card-top">

                            </div>
                            <div class="card-body">
                                <canvas height="180vh" id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="card-title">Rata - rata waktu untuk Konfirmasi Permohonan</h3>

                        </div>
                        <div class="card-body">
                            <h1> {{ $rata2konfirmasiDisplay }} </h1>
                        </div>

                    </div>


                </div>

                <div class="col-md-6 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="card-title">Rata - rata waktu untuk Proses Permohonan</h3>

                        </div>
                        <div class="card-body">
                            <h1> {{ $rata2SelesaiDisplay }} </h1>
                        </div>

                    </div>


                </div>
            </div>
            @push('child-scripts')
                <script>
                    $(document).ready(function() {
                        const labels = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", 'Juli', 'Agustus', 'September',
                            'Oktober',
                            'November', 'Desember'
                        ];


                        // const dataStatistik = () => {
                        //     return $.ajax({
                        //         type: 'GET',
                        //         url: "data-statistik",
                        //         dataType: 'json'
                        //     });
                        // }

                        const dataStatistik = {{ Js::from($dataStatistik) }};


                        // console.log('dataS', dataStatistik)
                        let dataMasuk = dataStatistik.filter(item => item.status_final == 'masuk')
                        let dataProses = dataStatistik.filter(item => item.status_final == 'proses')
                        let dataSelesai = dataStatistik.filter(item => item.status_final == 'selesai')
                        // console.log('datamasuk', dataMasuk)
                        // console.log('dataproses', dataProses)
                        // console.log('dataselesai', dataSelesai)
                        let dataMasukFinal = [0, 0, 0, 0,
                            0, 0, 0, 0,
                            0, 0, 0, 0
                        ];

                        let dataProsesFinal = [0, 0, 0, 0,
                            0, 0, 0, 0,
                            0, 0, 0, 0
                        ];

                        let dataSelesaiFinal = [0, 0, 0, 0,
                            0, 0, 0, 0,
                            0, 0, 0, 0
                        ];



                        dataProses.forEach(element => {
                            dataProsesFinal[element.bulan - 1] = element.permohonan
                        });

                        dataSelesai.forEach(element => {
                            dataSelesaiFinal[element.bulan - 1] = element.permohonan
                        });


                        for (let index = 0; index < dataMasukFinal.length; index++) {

                            dataMasukFinal[index] = parseInt(dataProsesFinal[index]) + parseInt(dataSelesaiFinal[index])

                        }

                        const data = {
                            labels: labels,
                            datasets: [{
                                    label: "Permohonan Masuk",
                                    backgroundColor: "#7cb5ec",
                                    borderColor: "#7cb5ec",
                                    data: dataMasukFinal,
                                },
                                {
                                    label: "Permohonan Proses",
                                    backgroundColor: "#434348",
                                    borderColor: "#434348",
                                    data: dataProsesFinal,
                                },
                                {
                                    label: "Permohonan Selesai",
                                    backgroundColor: "#90ed7d",
                                    borderColor: "#90ed7d",
                                    data: dataSelesaiFinal,
                                },
                            ],
                        };

                        const config = {
                            type: "bar",
                            data: data,
                            options: {
                                responsive: true,
                                plugins: {
                                    htmlLegend: {
                                        // ID of the container to put the legend in
                                        containerID: "legend-container",
                                    },
                                    legend: {
                                        position: "bottom",
                                    },
                                },
                            },
                        };

                        const myChart = new Chart(document.getElementById("myChart"), config);

                    })
                </script>
            @endpush


</x-admin.layout>
