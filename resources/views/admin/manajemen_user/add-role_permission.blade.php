<x-admin.layout>

    <div id="roleVue">
        <template id="my-template">
            <swal-title>
                Save changes to "Untitled 1" before closing?
            </swal-title>
            <swal-icon type="warning" color="red"></swal-icon>
            <swal-button type="confirm">
                Save As
            </swal-button>
            <swal-button type="cancel">
                Cancel
            </swal-button>
            <swal-button type="deny">
                Close without Saving
            </swal-button>
            <swal-param name="allowEscapeKey" value="false" />
            <swal-param name="customClass" value='{ "popup": "my-popup" }' />
            <swal-function-param name="didOpen" value="popup => console.log(popup)" />
        </template>
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
        <br>
        <h1>Add Role Permission </h1>
        <br>
        <!--begin::Row-->




        <div class="card card-flush shadow-sm">

            <div class="card-body py-5">




                <div class="modal-body  mx-lg-5 my-0">
                    <!--begin::Form-->
<<<<<<< HEAD
                    <form id="kt_modal_add_role_form" action="{{ route('manajemen-ppid.role_permission.store') }}" class="form"
=======
                    <form id="kt_modal_add_role_form" action="{{ route('admin.role_permission.store') }}" class="form"
>>>>>>> origin/main
                        method="POST">
                        @csrf
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">
                                    <span class="required">Role name</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="Enter a role name"
                                    name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Permissions-->
                            <div class="fv-row" id="addRolePermissionOptions">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">Role
                                    Permissions</label>
                                <!--end::Label-->
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-semibold">
                                            <!--begin::Super row-->
                                            <tr>
                                                <td class="text-gray-800">
                                                    Super Access
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Allows a full access to the system"></i>
                                                </td>
                                                <td>
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-9">
                                                        <input class="form-check-input " type="checkbox"
                                                            id="addSelectAll"
                                                            onclick="selectAllPermissions('.addCheck', 'addSelectAll')"
                                                            value="" id="kt_roles_select_all" />
                                                        <span class="form-check-label"
                                                            for="kt_roles_select_all">Select
                                                            all</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </td>
                                            </tr>
                                            <!--end::Super row-->

                                            <!--begin::Dashboard row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Dashboard</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="dashboard.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="dashboard.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="dashboard.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="dashboard.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Dashboard row-->

                                            <!--begin::Layanan PPID row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Layanan PPID</td>
                                                <!--end::Label-->
                                            </tr>

                                            <!--begin::Sub Layanan PPID row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Data Permohonan</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="data permohonan.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="data permohonan.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="data permohonan.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="data permohonan.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Data Keberatan</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="data keberatan.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="data keberatan.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="data keberatan.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="data keberatan.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Sub Layanan PPID row-->

                                            <!--end::Layanan PPID row-->

                                            <!--begin::Profil row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Profil</td>
                                                <!--end::Label-->
                                            </tr>

                                            <!--begin::Sub Profil row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Profil Singkat PPID</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="profil singkat ppid.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="profil singkat ppid.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="profil singkat ppid.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="profil singkat ppid.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Tugas dan Fungsi</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="tugas dan fungsi ppid.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="tugas dan fungsi ppid.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="tugas dan fungsi ppid.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="tugas dan fungsi ppid.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Struktur Organisasi</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="struktur organisasi.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="struktur organisasi.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="struktur organisasi.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="struktur organisasi.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Visi dan Misi</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="visi dan misi.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="visi dan misi.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="visi dan misi.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="visi dan misi.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Kontak</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="kontak.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="kontak.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="kontak.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="kontak.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Sosial Media</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="sosial media.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="sosial media.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="sosial media.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="sosial media.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Sub Profil row-->

                                            <!--end::Profil row-->

                                            <!--begin::Regulasi row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Regulasi</td>
                                                <!--end::Label-->
                                            </tr>

                                            <!--begin::Sub Regulasi row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Peraturan KIP</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="peraturan kip.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="peraturan kip.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="peraturan kip.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="peraturan kip.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Rancangan Peraturan KIP</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="rancangan peraturan kip.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="rancangan peraturan kip.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="rancangan peraturan kip.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="rancangan peraturan kip.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Sub Regulasi row-->
                                            <!--end::Regulasi row-->

                                            <!--begin::Informasi Publik row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Informasi Publik</td>
                                                <!--end::Label-->
                                            </tr>

                                            <!--begin::Sub Informasi Publik row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Informasi Secara Berkala</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi secara berkala.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi secara berkala.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi secara berkala.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi secara berkala.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Informasi Serta Merta</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi serta merta.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi serta merta.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi serta merta.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi serta merta.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Informasi Setiap Saat</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi setiap saat.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi setiap saat.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi setiap saat.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi setiap saat.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Sub Informasi Publik row-->
                                            <!--end::Informasi Publik row-->

                                            <!--begin::Laporan row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Laporan</td>
                                                <!--end::Label-->
                                            </tr>

                                            <!--begin::Sub Laporan row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Laporan Triwulanan PIP</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan triwulanan pip.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan triwulanan pip.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan triwulanan pip.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan triwulanan pip.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Laporan Tahunan PIP</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan tahunan pip.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan tahunan pip.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan tahunan pip.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan tahunan pip.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Laporan Hasil Survei</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan hasil survei.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan hasil survei.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan hasil survei.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="laporan hasil survei.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Sub Laporan row-->
                                            <!--end::Laporan row-->

                                            <!--begin::Standar Layanan row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Standar Layanan</td>
                                                <!--end::Label-->
                                            </tr>

                                            <!--begin::Sub Standar Layanan row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Maklumat Pelayanan</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="maklumat pelayanan.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="maklumat pelayanan.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="maklumat pelayanan.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="maklumat pelayanan.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Prosedur Pelayanan</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="prosedur pelayanan.create"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="prosedur pelayanan.view"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="prosedur pelayanan.edit"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="prosedur pelayanan.delete"
                                                                name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Biaya Pelayanan</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="biaya pelayanan.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="biaya pelayanan.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="biaya pelayanan.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="biaya pelayanan.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Sub Standar Layanan row-->
                                            <!--end::Standar Layanan row-->

                                            <!--begin::FAQ row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    FAQ</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="faq.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="faq.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="faq.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="faq.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>


                                            <!--end::FAQ row-->

                                            <!--begin::Manajemen User row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Manajemen User</td>
                                                <!--end::Label-->
                                            </tr>

                                            <!--begin::Sub Manajemen User row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    User Pemohon</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="user pemohon.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="user pemohon.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="user pemohon.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="user pemohon.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    User Admin</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="user admin.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="user admin.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="user admin.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="user admin.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Role Permission</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="role permission.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="role permission.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="role permission.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="role permission.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Sub Manajemen User row-->
                                            <!--end::Manajemen User row-->

                                            <!--begin::Manajemen User row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Manajemen Home</td>
                                                <!--end::Label-->
                                            </tr>

                                            <!--begin::Sub Manajemen Home row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Slider</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="slider.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="slider.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="slider.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="slider.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Informasi</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="informasi.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Video</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="video.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="video.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="video.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="video.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Footer</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="footer.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="footer.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="footer.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="footer.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Sub Manajemen User row-->
                                            <!--end::Manajemen User row-->


<<<<<<< HEAD
                                            <!--begin::Manajemen Menu row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">
                                                    Manajemen Menu</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="manajemen menu.create" name="permissions[]" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="manajemen menu.view" name="permissions[]" />
                                                            <span class="form-check-label">View</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="manajemen menu.edit" name="permissions[]" />
                                                            <span class="form-check-label">Edit</span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input addCheck" type="checkbox"
                                                                value="manajemen menu.delete" name="permissions[]" />
                                                            <span class="form-check-label">Delete</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>


                                            <!--end::Manajemen Menu row-->


=======
>>>>>>> origin/main
                                            <!--begin::Table row-->



                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">

                            <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>


                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>

            </div>

        </div>

        <!--end::Row-->

        <!--begin::Modals-->
        <!--begin::Modal - Add role-->
        <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Add a Role</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal"
                            data-kt-roles-modal-action="close">
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
                    <div class="modal-body scroll-y mx-lg-5 my-0">
                        <!--begin::Form-->
<<<<<<< HEAD
                        <form id="kt_modal_add_role_form" action="{{ route('manajemen-ppid.role_permission.store') }}"
=======
                        <form id="kt_modal_add_role_form" action="{{ route('admin.role_permission.store') }}"
>>>>>>> origin/main
                            class="form" method="POST">
                            @csrf
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll"
                                data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_modal_add_role_header"
                                data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="200px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-2">
                                        <span class="required">Role name</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter a role name"
                                        name="name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Permissions-->
                                <div class="fv-row" id="addRolePermissionOptions">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-2">Role
                                        Permissions</label>
                                    <!--end::Label-->
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                                            <!--begin::Table body-->
                                            <tbody class="text-gray-600 fw-semibold">
                                                <!--begin::Super row-->
                                                <tr>
                                                    <td class="text-gray-800">
                                                        Super Access
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Allows a full access to the system"></i>
                                                    </td>
                                                    <td>
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-9">
                                                            <input class="form-check-input " type="checkbox"
                                                                id="addSelectAll"
                                                                onclick="selectAllPermissions('.addCheck', 'addSelectAll')"
                                                                value="" id="kt_roles_select_all" />
                                                            <span class="form-check-label"
                                                                for="kt_roles_select_all">Select
                                                                all</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </td>
                                                </tr>
                                                <!--end::Super row-->

                                                <!--begin::Dashboard row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Dashboard</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="dashboard.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="dashboard.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="dashboard.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="dashboard.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Dashboard row-->

                                                <!--begin::Layanan PPID row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Layanan PPID</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Layanan PPID row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Data Permohonan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data permohonan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data permohonan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data permohonan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data permohonan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Data Keberatan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data keberatan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data keberatan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data keberatan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data keberatan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Layanan PPID row-->

                                                <!--end::Layanan PPID row-->

                                                <!--begin::Profil row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Profil</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Profil row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Profil Singkat PPID</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="profil singkat ppid.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="profil singkat ppid.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="profil singkat ppid.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="profil singkat ppid.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Tugas dan Fungsi</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Struktur Organisasi</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="struktur organisasi.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="struktur organisasi.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="struktur organisasi.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="struktur organisasi.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Visi dan Misi</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="visi dan misi.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="visi dan misi.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="visi dan misi.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="visi dan misi.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Kontak</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="kontak.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="kontak.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="kontak.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="kontak.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Sosial Media</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="sosial media.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="sosial media.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="sosial media.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="sosial media.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Profil row-->

                                                <!--end::Profil row-->

                                                <!--begin::Regulasi row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Regulasi</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Regulasi row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Peraturan KIP</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="peraturan kip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="peraturan kip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="peraturan kip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="peraturan kip.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Rancangan Peraturan KIP</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Regulasi row-->
                                                <!--end::Regulasi row-->

                                                <!--begin::Informasi Publik row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Informasi Publik</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Informasi Publik row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Informasi Secara Berkala</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Informasi Serta Merta</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Informasi Setiap Saat</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Informasi Publik row-->
                                                <!--end::Informasi Publik row-->

                                                <!--begin::Laporan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Laporan</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Laporan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Laporan Triwulanan PIP</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Laporan Tahunan PIP</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan tahunan pip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="laporan tahunan pip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="laporan tahunan pip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan tahunan pip.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Laporan Hasil Survei</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Laporan row-->
                                                <!--end::Laporan row-->

                                                <!--begin::Standar Layanan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Standar Layanan</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Standar Layanan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Maklumat Pelayanan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="maklumat pelayanan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="maklumat pelayanan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="maklumat pelayanan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="maklumat pelayanan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Prosedur Pelayanan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="prosedur pelayanan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="prosedur pelayanan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="prosedur pelayanan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="prosedur pelayanan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Biaya Pelayanan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="biaya pelayanan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="biaya pelayanan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="biaya pelayanan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="biaya pelayanan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Standar Layanan row-->
                                                <!--end::Standar Layanan row-->

                                                <!--begin::FAQ row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        FAQ</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="faq.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="faq.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="faq.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="faq.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>


                                                <!--end::FAQ row-->

                                                <!--begin::Standar Layanan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Manajemen User</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Standar Layanan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        User Pemohon</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user pemohon.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user pemohon.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user pemohon.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user pemohon.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        User Admin</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user admin.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user admin.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user admin.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user admin.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Role Permission</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="role permission.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="role permission.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="role permission.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="role permission.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Standar Layanan row-->
                                                <!--end::Standar Layanan row-->


                                                <!--begin::Table row-->



                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Permissions-->
                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-15">

                                <button type="submit" class="btn btn-primary"
                                    data-kt-roles-modal-action="submit">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>


                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Add role-->
        <!--begin::Modal - Update role-->
        <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Update Role</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal"
                            data-kt-roles-modal-action="close">
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
                    <div class="modal-body scroll-y mx-lg-5 my-0">
                        <!--begin::Form-->
                        <!--begin::Form-->
<<<<<<< HEAD
                        <form id="kt_modal_add_role_form" action="{{ route('manajemen-ppid.role_permission.store') }}"
=======
                        <form id="kt_modal_add_role_form" action="{{ route('admin.role_permission.store') }}"
>>>>>>> origin/main
                            class="form" method="POST">
                            @csrf
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll"
                                data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_modal_add_role_header"
                                data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="200px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-2">
                                        <span class="required">Role name</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter a role name"
                                        name="name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Permissions-->
                                <div class="fv-row" id="addRolePermissionOptions">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-2">Role
                                        Permissions</label>
                                    <!--end::Label-->
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                                            <!--begin::Table body-->
                                            <tbody class="text-gray-600 fw-semibold">
                                                <!--begin::Super row-->
                                                <tr>
                                                    <td class="text-gray-800">
                                                        Super Access
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Allows a full access to the system"></i>
                                                    </td>
                                                    <td>
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-9">
                                                            <input class="form-check-input " type="checkbox"
                                                                id="addSelectAll"
                                                                onclick="selectAllPermissions('.addCheck', 'addSelectAll')"
                                                                value="" id="kt_roles_select_all" />
                                                            <span class="form-check-label"
                                                                for="kt_roles_select_all">Select
                                                                all</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </td>
                                                </tr>
                                                <!--end::Super row-->

                                                <!--begin::Dashboard row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Dashboard</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="dashboard.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="dashboard.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="dashboard.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="dashboard.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Dashboard row-->

                                                <!--begin::Layanan PPID row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Layanan PPID</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Layanan PPID row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Data Permohonan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data permohonan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data permohonan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data permohonan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data permohonan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Data Keberatan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data keberatan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data keberatan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data keberatan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="data keberatan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Layanan PPID row-->

                                                <!--end::Layanan PPID row-->

                                                <!--begin::Profil row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Profil</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Profil row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Profil Singkat PPID</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="profil singkat ppid.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="profil singkat ppid.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="profil singkat ppid.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="profil singkat ppid.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Tugas dan Fungsi</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Struktur Organisasi</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="struktur organisasi.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="struktur organisasi.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="struktur organisasi.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="struktur organisasi.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Visi dan Misi</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="visi dan misi.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="visi dan misi.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="visi dan misi.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="visi dan misi.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Kontak</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="kontak.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="kontak.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="kontak.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="kontak.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Sosial Media</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="sosial media.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="sosial media.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="sosial media.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="sosial media.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Profil row-->

                                                <!--end::Profil row-->

                                                <!--begin::Regulasi row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Regulasi</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Regulasi row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Peraturan KIP</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="peraturan kip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="peraturan kip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="peraturan kip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="peraturan kip.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Rancangan Peraturan KIP</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Regulasi row-->
                                                <!--end::Regulasi row-->

                                                <!--begin::Informasi Publik row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Informasi Publik</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Informasi Publik row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Informasi Secara Berkala</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Informasi Serta Merta</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Informasi Setiap Saat</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Informasi Publik row-->
                                                <!--end::Informasi Publik row-->

                                                <!--begin::Laporan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Laporan</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Laporan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Laporan Triwulanan PIP</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Laporan Tahunan PIP</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan tahunan pip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="laporan tahunan pip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="laporan tahunan pip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan tahunan pip.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Laporan Hasil Survei</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Laporan row-->
                                                <!--end::Laporan row-->

                                                <!--begin::Standar Layanan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Standar Layanan</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Standar Layanan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Maklumat Pelayanan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="maklumat pelayanan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="maklumat pelayanan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="maklumat pelayanan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="maklumat pelayanan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Prosedur Pelayanan</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="prosedur pelayanan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="prosedur pelayanan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="prosedur pelayanan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox"
                                                                    value="prosedur pelayanan.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Standar Layanan row-->
                                                <!--end::Standar Layanan row-->

                                                <!--begin::FAQ row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        FAQ</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="faq.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="faq.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="faq.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="faq.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>


                                                <!--end::FAQ row-->

                                                <!--begin::Standar Layanan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Manajemen User</td>
                                                    <!--end::Label-->
                                                </tr>

                                                <!--begin::Sub Standar Layanan row-->
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        User Pemohon</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user pemohon.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user pemohon.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user pemohon.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user pemohon.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        User Admin</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user admin.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user admin.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user admin.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="user admin.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>

                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">
                                                        Role Permission</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="role permission.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="role permission.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="role permission.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="role permission.delete"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Delete</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                                <!--end::Sub Standar Layanan row-->
                                                <!--end::Standar Layanan row-->


                                                <!--begin::Table row-->



                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Permissions-->
                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-15">
                                <button type="reset" class="btn btn-light me-3"
                                    data-kt-roles-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="submit" class="btn btn-primary"
                                    data-kt-roles-modal-action="submit">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>


                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Update role-->
        <!--end::Modals-->


        <x-slot:isShowAccordion_manajemenUser>
            show
            </x-slot>
            <x-slot:isActiveLink_manajemenUser>
                active
                </x-slot>
                <x-slot:isActiveLink_rolePermission>
                    active
                    </x-slot>
                    <x-slot:subMenuTitle>
                        Role Permission
                        </x-slot>

                        <x-slot:mainMenuTitle>
                            Manajemen User
                            </x-slot>
                            @push('head-scripts')
                                <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
                            @endpush

                            @push('child-scripts')
                                <script>
                                    $("#kt_datatable_dom_positioning_role").DataTable({
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
                                    $("#kt_datatable_dom_positioning_permission").DataTable({
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




                                    function selectAllPermissions(className, classId) {
                                        let checkBox = document.getElementById(classId)
                                        console.log('checked', checkBox.checked)
                                        let formCheck = document.querySelectorAll(className)
                                        if (checkBox.checked == true) {
                                            console.log('formCheck', formCheck)
                                            formCheck.forEach(element => {
                                                element.setAttribute('checked', 'checked')
                                            });
                                        } else {
                                            formCheck.forEach(element => {
                                                element.removeAttribute('checked')
                                            });
                                        }

                                    };

                                    function successAlert() {
                                        Swal.fire({
                                            html: `A SweetAlert content with <strong>bold text</strong>, <a href="#">links</a>
                                            or any of our available <span class="badge badge-primary">components</span>`,
                                            icon: "error",
                                            buttonsStyling: false,
                                            showCancelButton: true,
                                            confirmButtonText: "Ok, got it!",
                                            cancelButtonText: 'Nope, cancel it',
                                            customClass: {

                                                cancelButton: 'btn btn-danger',
                                                confirmButton: "btn btn-primary",
                                            }
                                        });

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
