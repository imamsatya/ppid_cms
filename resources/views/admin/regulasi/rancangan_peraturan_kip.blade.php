<x-admin.layout>
    <x-slot:subMenuTitle>
        Rancangan Peraturan KIP
        </x-slot>

        <x-slot:mainMenuTitle>
            Regulasi
            </x-slot>


            <h1>Pengelolaan Regulasi</h1>


            <br>
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Peraturan KIP</h3>
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
                                <th>Judul Peraturan</th>
                                <th>File PDF</th>
                                <th>Urutan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Peraturan no 1</td>
                                <td>peraturan1.pdf</td>
                                <td>1</td>
                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Peraturan no 2</td>
                                <td>peraturan2.pdf</td>
                                <td>2</td>
                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Peraturan no 3</td>
                                <td>peraturan3.pdf</td>
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
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Rancangan Peraturan KIP</h3>
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
                                <th>Judul Peraturan</th>
                                <th>File PDF</th>
                                <th>Urutan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Peraturan no 1</td>
                                <td>peraturan1.pdf</td>
                                <td>1</td>
                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Peraturan no 2</td>
                                <td>peraturan2.pdf</td>
                                <td>2</td>
                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Peraturan no 3</td>
                                <td>peraturan3.pdf</td>
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
            <div class="card card-flush shadow-sm">

                <div class="card-body py-5">


                    <label for="" class="required form-label">Side Image</label>
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
                            title="Change Side Image">
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
                            title="Cancel Side Image">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel button-->

                        <!--begin::Remove button-->
                        <span
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Remove Side Image">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove button-->
                    </div>
                    <p>minimal dimensi 369x454 pixel</p>
                </div>

            </div>
            <br>
            <a href="#" class="btn btn-primary">Simpan</a>
</x-admin.layout>
