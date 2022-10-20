<x-layout>
    <x-slot:subMenuTitle>
        Data Permohonan
        </x-slot>

        <x-slot:mainMenuTitle>
            Layanan PPID
            </x-slot>


            <h1>Daftar Permohonan Masuk</h1>


            <br>
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Sosial Media</h3>
                    <div class="card-toolbar">
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Tambah
                        </button>
                    </div>
                </div>
                <div class="card-body py-5">
                    <div class="col-3">
                        <div class="mb-0">
                            <label class="form-label">Periode Tanggal Masuk</label>
                            <input class="form-control form-control-solid" placeholder="Pick date rage"
                                id="kt_daterangepicker_2" />
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



                    <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>No</th>
                                <th>icon Social Media</th>
                                <th>URL</th>
                                <th>Urutan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#" class="btn btn-icon btn-instagram me-5 "><i
                                            class="fab fa-instagram fs-4"></i></a></td>
                                <td>https://www.instagram.com/
                                    kementerianbumn/?hl=en</td>
                                <td>1</td>
                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#" class="btn btn-icon btn-twitter me-5 "><i
                                            class="fab fa-twitter fs-4"></i></a></td>
                                <td>https://twitter.com/
                                    kemenbumn?lang=en</td>
                                <td>2</td>
                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="#" class="btn btn-icon btn-youtube me-5 "><i
                                            class="fab fa-youtube fs-4"></i></a></td>
                                <td>https://www.youtube.com/c/
                                    KEMENTERIANBUMNRI/videos</td>
                                <td>3</td>
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


</x-layout>
