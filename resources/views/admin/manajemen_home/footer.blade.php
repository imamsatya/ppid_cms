<x-admin.layout>


    @if ($errors->any())
        <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
            {{-- <span class="svg-icon svg-icon-muted svg-icon-2hx">
                     </span> --}}
            <!--begin::Icon-->
            <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                <!--begin::Title-->
                <h4 class="mb-2 light">Error !</h4>
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
                <span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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

    <h1>Pengelolaan Footer</h1>
    <br>


    <div class="card card-flush shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Sosial Media</h3>
            <div class="card-toolbar">
                @can('kontak.create')
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_tambahSosialMedia">Tambah</a>
                @endcan
            </div>
        </div>
        <div class="card-body py-5">
            <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800">
                        <th>No</th>
                        <th>icon</th>
                        <th>URL</th>
                        <th>Urutan</th>
                        @can('kontak.delete')
                            <th>Aksi</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>

                    @foreach ($sosialMedia as $sosialMedia_row)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>

                            <td><a href="{{ $sosialMedia_row->url }}" target="_blank">
                                    <img class="img-fluid" src="{{ asset($sosialMedia_row->icon) }}" alt=""
                                        style="width: 40px;height:40px">
                                </a></i></td>
                            <td>{{ $sosialMedia_row->url }}</td>
                            <td>{{ $sosialMedia_row->urutan }}</td>
                            @canany(['peraturan kip.edit', 'peraturan kip.delete'])
                                <td>
                                    @can('peraturan kip.edit')
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_editSosialMedia"
                                            onclick="editSosialMediaDialog({{ $loop->index }})"
                                            class="btn btn-icon btn-primary me-2"><i class="bi bi-pencil fs-4 "></i></a>
                                    @endcan
                                    @can('kontak.delete')
                                        <a href="javascript:void(0)" onclick="deleteSosialMediaDialog({{ $loop->index }})"
                                            class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a>
                                    @endcan
                                </td>
                            @endcan

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    <br><br>
    <div class="card card-flush shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Link Apps</h3>
            <div class="card-toolbar">
                @can('kontak.create')
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_tambahLinkApp">Tambah</a>
                @endcan
            </div>
        </div>
        <div class="card-body py-5">
            <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800">
                        <th>No</th>
                        <th>icon</th>
                        <th>URL</th>

                        @can('kontak.delete')
                            <th>Aksi</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>

                    @foreach ($linkApp as $linkApp_row)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>

                            <td><a href="{{ $linkApp_row->url }}" title="Image from freepnglogos.com"><img
                                        src="{{ asset($linkApp_row->icon) }}" width="200"
                                        alt="play store logo black background hd picture" /></a></td>
                            <td>{{ $linkApp_row->url }}</td>

                            @canany(['peraturan kip.edit', 'peraturan kip.delete'])
                                <td>
                                    @can('peraturan kip.edit')
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_editLinkApp"
                                            onclick="editLinkAppDialog({{ $loop->index }})"
                                            class="btn btn-icon btn-primary me-2"><i class="bi bi-pencil fs-4 "></i></a>
                                    @endcan
                                    @can('kontak.delete')
                                        <a href="javascript:void(0)" onclick="deleteLinkAppDialog({{ $loop->index }})"
                                            class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a>
                                    @endcan
                                </td>
                            @endcan

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    <!--begin::Modal - Tambah Sosial Media-->
    <div class="modal fade" id="kt_modal_tambahSosialMedia" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Tambah Sosial Media</h2>
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
                    <form id="kt_account_profile_details_form" enctype="multipart/form-data"
                        action="{{ route('admin.footer.sosialmedia.store') }}" method="POST" class="form">
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body  p-9">




                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">icon</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">
                                        <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                        </div>

                                        @can('kontak.edit')
                                            <!--begin::Edit button-->
                                            <label
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Change Image">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="icon" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="icon_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit button-->

                                            <!--begin::Cancel button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Cancel Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel button-->

                                            <!--begin::Remove button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Remove Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove button-->
                                        @endcan
                                    </div>
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
                                    <input type="text" name="url"
                                        class="form-control form-control-lg form-control-solid" placeholder="url"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->


                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Urutan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="number" min=1 name="urutan"
                                        class="form-control form-control-lg form-control-solid" placeholder="Urutan"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->


                            <!--end::Input group-->

                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                            @can('kontak.create')
                                <button type="submit" class="btn btn-primary" id="addSosialMediaButton"
                                    onclick="activateLoadingButton('#addSosialMediaButton')"><span
                                        class="indicator-label">
                                        Tambah
                                    </span>
                                    <span class="indicator-progress">
                                        Mohon Menunggu... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            @endcan
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
    <!--end::Modal - Tambah Sosial Media-->

    <!--begin::Modal - Edit Sosial Media-->
    <div class="modal fade" id="kt_modal_editSosialMedia" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Edit Sosial Media</h2>
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
                    <form id="editForm" method="POST" enctype="multipart/form-data" class="form">
                        @method('PATCH')
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body  p-9">



                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Icon</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">


                                        {{-- <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url({{ asset($informasi->banner_path) }})">
                                        </div> --}}

                                        <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                        </div>


                                        @can('kontak.edit')
                                            <!--begin::Edit button-->
                                            <label
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Change Image">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="icon" id="editLinkAppIcon"
                                                    accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="icon_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit button-->

                                            <!--begin::Cancel button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Cancel Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel button-->

                                            <!--begin::Remove button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Remove Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove button-->
                                        @endcan
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">url</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="url" id="editUrl"
                                        class="form-control form-control-lg form-control-solid" placeholder="url"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->


                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Urutan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="number" min=1 name="urutan" id="editUrutan"
                                        class="form-control form-control-lg form-control-solid" placeholder="Urutan"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->


                            <!--end::Input group-->

                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                            @can('kontak.create')
                                <button type="submit" class="btn btn-primary" id="updateSosialMediaButton"
                                    onclick="activateLoadingButton('#updateSosialMediaButton')"><span
                                        class="indicator-label">
                                        Update
                                    </span>
                                    <span class="indicator-progress">
                                        Mohon Menunggu... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            @endcan
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
    <!--end::Modal - Edit Sosial Media-->

    <!--begin::Modal - Tambah Link App-->
    <div class="modal fade" id="kt_modal_tambahLinkApp" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Tambah Link App</h2>
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
                    <form id="kt_account_profile_details_form" enctype="multipart/form-data"
                        action="{{ route('admin.footer.linkapp.store') }}" method="POST" class="form">
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body  p-9">


                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Image</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">

                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">
                                        <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                        </div>

                                        @can('kontak.edit')
                                            <!--begin::Edit button-->
                                            <label
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Change Image">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="icon" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="icon_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit button-->

                                            <!--begin::Cancel button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Cancel Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel button-->

                                            <!--begin::Remove button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Remove Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove button-->
                                        @endcan
                                    </div>
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
                                    <input type="text" name="url"
                                        class="form-control form-control-lg form-control-solid" placeholder="url"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->





                            <!--end::Input group-->

                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                            @can('kontak.create')
                                <button type="submit" class="btn btn-primary" id="addLinkAppButton"
                                    onclick="activateLoadingButton('#addLinkAppButton')"><span class="indicator-label">
                                        Simpan
                                    </span>
                                    <span class="indicator-progress">
                                        Mohon Menunggu... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            @endcan
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
    <!--end::Modal - Tambah Link App-->

    <!--begin::Modal - Edit Link App-->
    <div class="modal fade" id="kt_modal_editLinkApp" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Edit Link App</h2>
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
                    <form id="editLinkAppForm" method="POST" enctype="multipart/form-data" class="form">
                        @method('PATCH')
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body  p-9">

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Image</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">

                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">


                                        {{-- <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url({{ asset($informasi->banner_path) }})">
                                        </div> --}}

                                        <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                        </div>


                                        @can('kontak.edit')
                                            <!--begin::Edit button-->
                                            <label
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Change Image">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="icon" id="editLinkAppIcon"
                                                    accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="icon_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit button-->

                                            <!--begin::Cancel button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Cancel Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel button-->

                                            <!--begin::Remove button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Remove Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove button-->
                                        @endcan
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->



                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">url</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="url" id="editLinkAppUrl"
                                        class="form-control form-control-lg form-control-solid" placeholder="url"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->





                            <!--end::Input group-->

                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                            @can('kontak.create')
                                <button type="submit" class="btn btn-primary" id="updateLinkAppButton"
                                    onclick="activateLoadingButton('#updateLinkAppButton')"><span class="indicator-label">
                                        Update
                                    </span>
                                    <span class="indicator-progress">
                                        Mohon Menunggu... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            @endcan
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
    <!--end::Modal - Edit Link App-->

    <br>
    <x-slot:isShowAccordion_manajemenHome>
        show
        </x-slot>
        <x-slot:isActiveLink_manajemenHome>
            active
            </x-slot>
            <x-slot:isActiveLink_video>
                active
                </x-slot>
                <x-slot:subMenuTitle>
                    Footer
                    </x-slot>

                    <x-slot:mainMenuTitle>
                        Manajemen Home
                        </x-slot>
                        @push('head-scripts')
                            <link rel="stylesheet"
                                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
                        @endpush
                        @push('child-scripts')
                            <script>
                                $("#kt_datatable_column_rendering").DataTable({
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

                                function deleteSosialMediaDialog(index) {

                                    let sosialMedia = {{ Js::from($sosialMedia) }}

                                    sosialMedia = sosialMedia[index]

                                    Swal.fire({
                                        html: `Apakah yakin akan <strong>menghapus</strong> sosialMedia <span class="badge badge-primary"> ${sosialMedia.url}</span> ?`,
                                        icon: "error",
                                        buttonsStyling: false,
                                        showCancelButton: true,
                                        reverseButtons: true,
                                        cancelButtonText: 'Batal',
                                        confirmButtonText: "Iya",
                                        customClass: {
                                            cancelButton: 'btn btn-danger',
                                            confirmButton: "btn btn-primary",
                                        }
                                    }).then((result) => {
                                        if (result.isConfirmed) {

                                            console.log('delete confirmed')
                                            $.ajax({
                                                type: "DELETE",
                                                url: "/admin/footer/sosialmedia/delete/" + sosialMedia.id,
                                                cache: false,
                                                success: function(html) {
                                                    Swal.fire({

                                                        icon: 'success',
                                                        title: 'Berhasil menghapus sosialMedia',
                                                        showConfirmButton: false,
                                                        timer: 500
                                                    }).then(() => {
                                                        window.location.reload();
                                                    })


                                                }
                                            });

                                            // window.location = '/visimisi'
                                        } else {
                                            console.log('delete canceled')
                                        }
                                    });

                                    // Swal.fire({
                                    //     template: '#my-template'
                                    // })
                                };

                                function editSosialMediaDialog(index) {

                                    let sosialMediaRow = {{ Js::from($sosialMedia) }}
                                    sosialMediaRow = sosialMediaRow[index]
                                    console.log(document.getElementById('editImage'))
                                    document.getElementById('editUrl').value = sosialMediaRow.url
                                    // document.getElementById('editFile').value = sosialMediaRow.file_path
                                    // document.getElementById('editIcon').value = sosialMediaRow.icon
                                    document.getElementById('editUrutan').value = sosialMediaRow.urutan
                                    console.log('editUrutan', document.getElementById('editUrutan').value)

                                    document.getElementById('editForm').setAttribute('action', 'footer/sosialmedia/' +
                                        sosialMediaRow.id)
                                };

                                function deleteLinkAppDialog(index) {

                                    let linkApp = {{ Js::from($linkApp) }}

                                    linkApp = linkApp[index]

                                    Swal.fire({
                                        html: `Apakah yakin akan <strong>menghapus</strong> sosialMedia <span class="badge badge-primary"> ${linkApp.url}</span> ?`,
                                        icon: "error",
                                        buttonsStyling: false,
                                        showCancelButton: true,
                                        reverseButtons: true,
                                        cancelButtonText: 'Batal',
                                        confirmButtonText: "Iya",
                                        customClass: {
                                            cancelButton: 'btn btn-danger',
                                            confirmButton: "btn btn-primary",
                                        }
                                    }).then((result) => {
                                        if (result.isConfirmed) {

                                            console.log('delete confirmed')
                                            $.ajax({
                                                type: "DELETE",
                                                url: "/admin/footer/linkapp/delete/" + linkApp.id,
                                                cache: false,
                                                success: function(html) {
                                                    Swal.fire({

                                                        icon: 'success',
                                                        title: 'Berhasil menghapus Link App',
                                                        showConfirmButton: false,
                                                        timer: 500
                                                    }).then(() => {
                                                        window.location.reload();
                                                    })


                                                }
                                            });

                                            // window.location = '/visimisi'
                                        } else {
                                            console.log('delete canceled')
                                        }
                                    });

                                    // Swal.fire({
                                    //     template: '#my-template'
                                    // })
                                };

                                function editLinkAppDialog(index) {

                                    let linkAppRow = {{ Js::from($linkApp) }}
                                    linkAppRow = linkAppRow[index]

                                    document.getElementById('editLinkAppUrl').value = linkAppRow.url
                                    // document.getElementById('editFile').value = linkAppRow.file_path
                                    // document.getElementById('editLinkAppIcon').value = linkAppRow.icon



                                    document.getElementById('editLinkAppForm').setAttribute('action', 'footer/linkapp/' +
                                        linkAppRow.id)
                                };

                                function activateLoadingButton(idButton) {
                                    console.log('active')
                                    let button = document.querySelector(`${idButton}`);
                                    button.setAttribute("data-kt-indicator", "on");
                                    // Handle button click event

                                    // // Disable indicator after 3 seconds
                                    // setTimeout(function() {
                                    //     button.removeAttribute("data-kt-indicator");
                                    // }, 3000);
                                }
                            </script>
                        @endpush

</x-admin.layout>
