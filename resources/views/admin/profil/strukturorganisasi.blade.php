<x-admin.layout>
    <x-slot:subMenuTitle>
        Struktur Organisasi
        </x-slot>

        <x-slot:mainMenuTitle>
            Profil
            </x-slot>


            <h1>Pengelolaan Struktur Organisasi</h1>
            <br>
            <div class="card card-flush shadow-sm">

                <div class="card-body py-5">


                    <label for="" class="required form-label">Ubah Banner</label>
                    <br>
                    <div class="image-input image-input-outline" data-kt-image-input="true"
                        style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">
                        <!--begin::Image preview wrapper-->
                        <div class="image-input-wrapper w-250px  h-125px"
                            style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                        </div>
                        <!--end::Image preview wrapper-->

                        <!--begin::Edit button-->
                        <label
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Change Banner">
                            <i class="bi bi-pencil-fill fs-7"></i>

                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Edit button-->

                        <!--begin::Cancel button-->
                        <span
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Cancel Banner">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel button-->

                        <!--begin::Remove button-->
                        <span
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Remove Banner">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove button-->
                    </div>
                </div>

            </div>
            <br>
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Bagan Kiri</h3>
                    <div class="card-toolbar">

                    </div>
                </div>
                <div class="card-body py-5">


                    <br>
                    <div class="mb-10 col-lg-6">
                        <div class="d-flex">

                            <input type="text" class="form-control form-control-solid me-4"
                                placeholder="Nama Struktur" value="Menteri BUMN" />
                            <a href="#" class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a>
                        </div> <br>

                        <div class="d-flex">

                            <input type="text" class="form-control form-control-solid me-4"
                                placeholder="Nama Struktur" value="Atasan PPID" />
                            <a href="#" class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a>
                        </div> <br>

                        <div class="d-flex">

                            <input type="text" class="form-control form-control-solid me-4"
                                placeholder="Nama Struktur" value="PPID" />
                            <a href="#" class="btn btn-icon btn-danger me-2"><i class="bi bi-x-lg fs-4 "></i></a>
                            <a href="#" class="btn btn-icon btn-primary"><i class="bi bi-plus-lg fs-4 "></i></a>
                        </div> <br>
                    </div>
                    <br><br>


                </div>





            </div>
            <br>
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Bagan Kanan</h3>
                    <div class="card-toolbar">
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Tambah
                        </button>
                    </div>
                </div>
                <div class="card-body py-5">


                    <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>No</th>
                                <th>Nomenklatur</th>
                                <th>Deskripsi</th>
                                <th>Urutan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Atasan PPID</td>
                                <td>Atasan PPID adalah Pimpinan Tinggi Madya yang merupakan atasan langsung pejabat yang
                                    menjadi PPID</td>
                                <td>1</td>

                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PPID</td>
                                <td>PPID merupakan pejabat struktural yang ditunjuk untuk melaksanakan tugas Pelayanan
                                    Informasi kepada publik, PPID memiliki kompetensi di bidang pengelolaan dokumen,
                                    pengolahan data, pelayanan informasi dan kehumasan</td>
                                <td>2</td>

                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PPID Pelaksana</td>
                                <td>PPID Pelaksana dijabat oleh pejabat di masing-masing unit kerja/satuan kerja/unit
                                    organisasi/organisasi perangkat daerah/sebutan lainnya </td>
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
            <a href="#" class="btn btn-primary">Simpan</a>

            {{-- ckeditor --}}
            {{-- <script src="{{ asset('template/dist/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script> --}}


</x-admin.layout>
