<x-admin.layout>
    <x-slot:subMenuTitle>
        Struktur Organisasi
        </x-slot>

        <x-slot:mainMenuTitle>
            Profil
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

            <h1>Pengelolaan Struktur Organisasi</h1>
            <br>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-flush shadow-sm">

                    <div class="card-body py-5">


                        <label for="" class="required form-label">Ubah Banner</label>
                        <br>
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">
                            <!--begin::Image preview wrapper-->
                            @if ($strukturOrganisasi)
                                @if ($strukturOrganisasi->banner_path)
                                    <div class="image-input-wrapper w-250px  h-125px"
                                        style="background-image: url({{ asset($strukturOrganisasi->banner_path) }})">
                                    </div>
                                @else
                                    <div class="image-input-wrapper w-250px  h-125px"
                                        style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                    </div>
                                @endif
                            @else
                                <div class="image-input-wrapper w-250px  h-125px"
                                    style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                </div>

                            @endif
                            <!--end::Image preview wrapper-->

                            @can('struktur organisasi.edit')
                                <!--begin::Edit button-->
                                <label
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Change Banner">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="banner" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="banner_remove" />
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
                            @endcan
                        </div>
                    </div>

                </div>
                <br>
                <div class="card card-flush shadow-sm">

                    {{-- <div class="card-header">
                    <h3 class="card-title">Bagan Kiri</h3>
                    <div class="card-toolbar">

                    </div>
                </div> --}}
                    <div class="card-body py-5">


                        <br>

                        <div class="mb-10 col-lg-6">
                            <div class="mb-10">
                                <label for="" class="required form-label">Judul</label>
                                @if ($strukturOrganisasi)
                                    @if (auth()->user()->can('struktur organisasi.edit'))
                                        <input type="text" name="judul" class="form-control form-control-solid"
                                            placeholder="Judul Struktur PPID"
                                            value="{{ $strukturOrganisasi->judul }}" />
                                    @else
                                        <input type="text" readonly name="judul"
                                            class="form-control form-control-solid" placeholder="Judul Struktur PPID"
                                            value="{{ $strukturOrganisasi->judul }}" />
                                    @endif
                                @else
                                    @if (auth()->user()->can('struktur organisasi.edit'))
                                        <input type="text" name="judul" class="form-control form-control-solid"
                                            placeholder="Judul Struktur PPID" value="" />
                                    @else
                                        <input type="text" readonly name="judul"
                                            class="form-control form-control-solid" placeholder="Judul Struktur PPID"
                                            value="" />
                                    @endif
                                @endif

                            </div>
                            <br>
                            <h3>Bagan Kiri</h3>
                            <br>


                            <!--begin::Repeater-->
                            <div id="nomenklaturRepeater">
                                <!--begin::Form group-->
                                <div class="form-group">

                                    <div data-repeater-list="nomenklaturRepeater">
                                        @if ($baganKiri)
                                            @foreach ($baganKiri as $baganKiri_row)
                                                @if (auth()->user()->can('struktur organisasi.edit'))
                                                    <div>
                                                        <div class="form-group row">
                                                            <div class="d-flex mb-4" data-repeater-item>
                                                                <input type="text"
                                                                    class="form-control form-control-solid me-4"
                                                                    placeholder="Nama Struktur"
                                                                    value="{{ $baganKiri_row->nomenklatur }}"
                                                                    name="nomenklatur" />
                                                                @can('struktur organisasi.edit')
                                                                    <a href="javascript:;" data-repeater-delete
                                                                        class="btn btn-icon btn-danger"><i
                                                                            class="bi bi-x-lg fs-4 "></i></a>
                                                                @endcan
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div>
                                                        <div class="form-group row">
                                                            <div class="d-flex mb-4" data-repeater-item>
                                                                <input type="text" readonly
                                                                    class="form-control form-control-solid me-4"
                                                                    placeholder="Nama Struktur"
                                                                    value="{{ $baganKiri_row->nomenklatur }}"
                                                                    name="nomenklatur" />
                                                                @can('struktur organisasi.edit')
                                                                    <a href="javascript:;" data-repeater-delete
                                                                        class="btn btn-icon btn-danger"><i
                                                                            class="bi bi-x-lg fs-4 "></i></a>
                                                                @endcan
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            @if (auth()->user()->can('struktur organisasi.edit'))
                                                <div>
                                                    <div class="form-group row">
                                                        <div class="d-flex mb-4" data-repeater-item>
                                                            <input type="text"
                                                                class="form-control form-control-solid me-4"
                                                                placeholder="Nama Struktur" value=""
                                                                name="nomenklatur" />
                                                            @can('struktur organisasi.edit')
                                                                <a href="javascript:;" data-repeater-delete
                                                                    class="btn btn-icon btn-danger"><i
                                                                        class="bi bi-x-lg fs-4 "></i></a>
                                                            @endcan
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div>
                                                    <div class="form-group row">
                                                        <div class="d-flex mb-4" data-repeater-item>
                                                            <input type="text" readonly
                                                                class="form-control form-control-solid me-4"
                                                                placeholder="Nama Struktur" value=""
                                                                name="nomenklatur" />
                                                            @can('struktur organisasi.edit')
                                                                <a href="javascript:;" data-repeater-delete
                                                                    class="btn btn-icon btn-danger"><i
                                                                        class="bi bi-x-lg fs-4 "></i></a>
                                                            @endcan
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    </div>


                                </div>
                                <!--end::Form group-->

                                <!--begin::Form group-->
                                <div class="form-group mt-5">
                                    @can('struktur organisasi.edit')
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary me-2">
                                            <i class="la la-plus"></i>Add
                                        </a>
                                    @endcan

                                    @can('struktur organisasi.create')
                                        <button type="submit" class="btn btn-primary" id="addStrukturButton"
                                            onclick="activateLoadingButton('#addStrukturButton')"><span
                                                class="indicator-label">
                                                Simpan
                                            </span>
                                            <span class="indicator-progress">
                                                Mohon Menunggu... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    @endcan
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Repeater-->


                            {{-- <div class="d-flex">

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
                                <a href="#" class="btn btn-icon btn-danger me-2"><i
                                        class="bi bi-x-lg fs-4 "></i></a>
                                <a href="#" class="btn btn-icon btn-primary"><i
                                        class="bi bi-plus-lg fs-4 "></i></a>
                            </div> --}}


                        </div>





                    </div>





                </div>
            </form>
            <br>
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Bagan Kanan</h3>
                    <div class="card-toolbar">
                        @can('struktur organisasi.create')
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_tambahBaganKanan">Tambah</a>
                        @endcan
                    </div>
                </div>
                <div class="card-body py-5">


                    <table id="kt_datatable_dom_positioning_baganKanan"
                        class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>No</th>
                                <th>Nomenklatur</th>
                                <th style="width: 70%">Deskripsi</th>
                                <th>Urutan</th>
                                @canany(['struktur organisasi.edit', 'struktur organisasi.delete'])
                                    <th>Aksi</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @if ($baganKanan)
                                @foreach ($baganKanan as $baganKanan_row)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $baganKanan_row->nomenklatur }}</td>
                                        <td>{{ $baganKanan_row->deskripsi }}</td>
                                        <td>{{ $baganKanan_row->urutan }}</td>
                                        @canany(['struktur organisasi.edit', 'struktur organisasi.delete'])
                                            <td>
                                                @can('struktur organisasi.edit')
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_editBaganKanan"
                                                        onclick="editDialog({{ $loop->index }})"
                                                        class="btn btn-icon btn-primary me-2"><i
                                                            class="bi bi-pencil fs-4 "></i></a>
                                                @endcan
                                                @can('struktur organisasi.delete')
                                                    <a href="javascript:void(0)" onclick="deleteDialog({{ $loop->index }})"
                                                        class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a>
                                                @endcan

                                            </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            @endif



                        </tbody>
                    </table>
                </div>

            </div>

            <!--begin::Modal - Tambah Bagan Kanan-->
            <div class="modal fade" id="kt_modal_tambahBaganKanan" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Tambah Bagan Kanan</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <form id="kt_account_profile_details_form"
                                action="{{ route('admin.strukturorganisasi.bagankanan.store') }}" method="POST"
                                class="form">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body  p-9">


                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label required fw-semibold fs-6">Nomenklatur</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="nomenklatur"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Nomenklatur" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label required fw-semibold fs-6">Deskripsi</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="deskripsi"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Deskripsi" value="" />
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
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Urutan" value="" />
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
                                    @can('struktur organisasi.create')
                                        <button type="submit" class="btn btn-primary" id="addButton"
                                            onclick="activateLoadingButton('#addButton')"><span class="indicator-label">
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
            <!--end::Modal - Tambah Bagan Kanan-->

            <!--begin::Modal - Edit Bagan Kanan-->
            <div class="modal fade" id="kt_modal_editBaganKanan" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Edit Bagan Kanan</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <form id="editForm" method="POST" class="form">
                                @method('PATCH')
                                @csrf

                                <!--begin::Card body-->
                                <div class="card-body  p-9">


                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label required fw-semibold fs-6">Nomenklatur</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="editNomenklatur" name="nomenklatur"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Nomenklatur" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label required fw-semibold fs-6">Deskripsi</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="editDeskripsi" name="deskripsi"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Deskripsi" value="" />
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
                                            <input type="number" id="editUrutan" min=1 name="urutan"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Urutan" value="" />
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
                                    @can('struktur organisasi.create')
                                        <button type="submit" class="btn btn-primary" id="updateButton"
                                            onclick="activateLoadingButton('#updateButton')"><span
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
            <!--end::Modal - Edit Bagan Kanan-->
            @push('child-scripts')
                <script src="{{ asset('template/dist/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>

                <script>
                    $("#kt_datatable_dom_positioning_baganKanan").DataTable({
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
                    $('#nomenklaturRepeater').repeater({
                        initEmpty: false,

                        defaultValues: {
                            'text-input': 'foo'
                        },

                        show: function() {
                            $(this).slideDown();
                        },

                        hide: function(deleteElement) {
                            $(this).slideUp(deleteElement);
                        }
                    });

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

                    function deleteDialog(index) {
                        console.log(index)
                        let baganKanan = {{ Js::from($baganKanan) }}
                        console.log('baganKanan 1', baganKanan)
                        baganKanan = baganKanan[index]
                        console.log('baganKanan 2', baganKanan)
                        Swal.fire({
                            html: `Apakah yakin akan <strong>menghapus</strong> nomenklatur <span class="badge badge-primary"> ${baganKanan.nomenklatur}</span> ?`,
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
                                    url: "/admin/strukturorganisasi/bagan_kanan/delete/" + baganKanan.id,
                                    cache: false,
                                    success: function(html) {
                                        Swal.fire({

                                            icon: 'success',
                                            title: 'Berhasil menghapus User',
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

                    function editDialog(index) {

                        let baganKanan = {{ Js::from($baganKanan) }}
                        baganKanan = baganKanan[index]
                        document.getElementById('editNomenklatur').value = baganKanan.nomenklatur
                        document.getElementById('editDeskripsi').value = baganKanan.deskripsi
                        document.getElementById('editUrutan').value = baganKanan.urutan


                        document.getElementById('editForm').setAttribute('action', 'strukturorganisasi/bagan_kanan/update/' +
                            baganKanan.id)
                    };
                </script>
            @endpush






            {{-- ckeditor --}}
            {{-- <script src="{{ asset('template/dist/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script> --}}


</x-admin.layout>
