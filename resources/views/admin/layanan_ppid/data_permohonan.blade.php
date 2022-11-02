<x-admin.layout>
    <x-slot:isShowAccordion_layananPPID>
        show
        </x-slot>
        <x-slot:isActiveLink_layananPPID>
            active
            </x-slot>
            <x-slot:isActiveLink_dataPermohonan>
                active
                </x-slot>
                <x-slot:subMenuTitle>
                    Data Permohonan
                    </x-slot>

                    <x-slot:mainMenuTitle>
                        Layanan PPID
                        </x-slot>

                        @push('child-scripts')
                            <script>
                                $("#kt_datatable_dom_positioning_daftarPermohonanMasuk").DataTable({
                                    "language": {
                                        "lengthMenu": "Show _MENU_",
                                    },
                                    "dom": "<'row'" + "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                                        "<'col-sm-6 d-flex align-items-center justify-content-end'f>" + ">" + "<'table-responsive'tr>" +
                                        "<'row'" +
                                        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                                        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                                        ">"
                                });

                                $("#kt_datatable_dom_positioning_daftarPermohonanSelesai").DataTable({
                                    "language": {
                                        "lengthMenu": "Show _MENU_",
                                    },
                                    "dom": "<'row'" + "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                                        "<'col-sm-6 d-flex align-items-center justify-content-end'f>" + ">" + "<'table-responsive'tr>" +
                                        "<'row'" +
                                        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                                        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                                        ">"
                                });

                                $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").daterangepicker({
                                    timePicker: true,
                                    startDate: moment().startOf("hour"),
                                    endDate: moment().startOf("hour").add(32, "hour"),
                                    locale: {
                                        format: "M/DD hh:mm A"
                                    }
                                });

                                $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").daterangepicker({
                                    timePicker: true,
                                    startDate: moment().startOf("hour"),
                                    endDate: moment().startOf("hour").add(32, "hour"),
                                    locale: {
                                        format: "M/DD hh:mm A"
                                    }
                                });
                            </script>
                        @endpush
                        <h1>Daftar Permohonan </h1>


                        <br>
                        <div class="card card-flush shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Permohonan Masuk </h3>
                                <div class="card-toolbar">

                                </div>
                            </div>
                            <div class="card-body py-5">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mb-0">
                                        <label class="form-label">Periode Tanggal Masuk</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage"
                                            id="kt_daterangepicker_tanggalMasuk_permohonanMasuk" />
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <select class="form-select" aria-label="Select Asal Permohonan">
                                            <option> Asal Permohonan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <select class="form-select" aria-label="Select Asal Permohonan">
                                            <option> Status Permohonan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>



                                <table id="kt_datatable_dom_positioning_daftarPermohonanMasuk"
                                    class="table table-striped table-row-bordered gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Tanggal Masuk</th>
                                            <th>No Registrasi</th>
                                            <th>Nama Pemohon</th>
                                            <th>Sumber</th>
                                            <th> Batas Waktu </th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>11 Oktober 2022</td>
                                            <td>---</td>
                                            <td>Pemohon A</td>
                                            <td>Apps</td>
                                            <td> --- </td>
                                            <td>Belum diverifikasi</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <br>
                        <div class="card card-flush shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Permohonan Selesai </h3>
                                <div class="card-toolbar">

                                </div>
                            </div>
                            <div class="card-body py-5">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mb-0">
                                        <label class="form-label">Periode Tanggal Masuk</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage"
                                            id="kt_daterangepicker_tanggalMasuk_permohonanSelesai" />
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <select class="form-select" aria-label="Select Asal Permohonan">
                                            <option> Asal Permohonan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <select class="form-select" aria-label="Select Asal Permohonan">
                                            <option> Status Permohonan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>



                                <table id="kt_datatable_dom_positioning_daftarPermohonanSelesai"
                                    class="table table-striped table-row-bordered gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Tanggal Masuk</th>
                                            <th>No Registrasi</th>
                                            <th>Nama Pemohon</th>
                                            <th>Sumber</th>
                                            <th> Batas Waktu </th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>11 Oktober 2022</td>
                                            <td>---</td>
                                            <td>Pemohon A</td>
                                            <td>Apps</td>
                                            <td> --- </td>
                                            <td>Belum diverifikasi</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>


</x-admin.layout>
