<x-layout>
    <x-slot:subMenuTitle>
        Informasi Secara Berkala
        </x-slot>

        <x-slot:mainMenuTitle>
            Informasi Publik
            </x-slot>


            <h1>Pengelolaan Informasi Publik</h1>



            <br>
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Informasi Secara Berkala</h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app">Tambah</a>
                    </div>
                </div>
                <div class="card-body py-5">


                    <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>No</th>
                                <th>Judul Informasi</th>
                                <th>URL</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rencana Strategis (Renstra)
                                    Kementerian BUMN</td>
                                <td>https://bumn.go.id/about/report</td>
                                <td></td>
                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Daftar Isian Pelaksanan
                                    Anggaran (DIPA)</td>
                                <td>https://bumn.go.id/about/report</td>
                                <td>pdf</td>
                                <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                            class="bi bi-pencil fs-4 "></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i
                                            class="bi bi-x-lg fs-4 "></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Profil Singkat Pejabat Struktural</td>
                                <td>https://bumn.go.id/about/report</td>
                                <td></td>
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

            <!--begin::Modal - Create App-->
            <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Tambah Informasi</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-10 px-lg-10">
                            {{-- Content Modal --}}
                            <form id="kt_account_profile_details_form" class="form">
                                <!--begin::Card body-->
                                <div class="card-body  p-9">


                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Judul
                                            Informasi</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="company"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Judul Informasi" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">URL</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="company"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="URL" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">File
                                            Pendukung</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="file" name="company"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="File Pendukung" value="" />

                                            <p>jika ada dan tidak mandatory</p>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                                    <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Simpan
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create App-->

</x-layout>
