<x-layout>
    <x-slot:subMenuTitle>
        Kontak
        </x-slot>

        <x-slot:mainMenuTitle>
            Profil
            </x-slot>

            @push('child-scripts')
                <script src="{{ asset('template/dist/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#kt_docs_ckeditor_classic_waktuPelayanan'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            @endpush


            <h1>Pengelolaan Kontak</h1>
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
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                    aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Kontak PPID</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="kt_account_profile_details_form" class="form">
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">


                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="company"
                                        class="form-control form-control-lg form-control-solid" placeholder="Alamat"
                                        value="Alamat Kantor Kementrian BUMN" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Telepon</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="company"
                                        class="form-control form-control-lg form-control-solid" placeholder="Telepon"
                                        value="Telepon Kantor Kementrian BUMN" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Waktu Pelayanan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea name="kt_docs_ckeditor_classic_waktuPelayanan" id="kt_docs_ckeditor_classic_waktuPelayanan">
                                        <p></p>
                                        </textarea>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->



                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Latitude</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="company"
                                        class="form-control form-control-lg form-control-solid" placeholder="Latitude"
                                        value="-6.1814988" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Longitude</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="company"
                                        class="form-control form-control-lg form-control-solid" placeholder="Longitude"
                                        value="106.82522458349823" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->



                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-start py-6 px-9">
                            {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>

            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Dokumentasi Ruang PPID</h3>
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
                                <th>Image</th>
                                <th>Keterangan</th>
                                <th>Urutan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>image 1</td>
                                <td>ruang utama</td>
                                <td>1</td>
                                <td><a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>image 2</td>
                                <td>ruang multimedia</td>
                                <td>2</td>
                                <td><a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>image 3</td>
                                <td>ruang tunggu</td>
                                <td>3</td>
                                <td><a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <br>

</x-layout>
