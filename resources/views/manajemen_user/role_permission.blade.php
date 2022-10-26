<x-layout>
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

                                $('body').on('click', '#btn-edit-role', function() {


                                    //...
                                    console.log('halo');
                                    let edit = document.getElementById('btn-edit-role').getAttribute('data-value')
                                    console.log(edit)

                                });
                            </script>
                        @endpush
                        <h1>Daftar Role Permission </h1>


                        <br>
                        <div class="card card-flush shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Role </h3>
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_role">Tambah</a>
                                </div>
                            </div>
                            <div class="card-body py-5">

                                <table id="kt_datatable_dom_positioning_role"
                                    class="table table-striped table-row-bordered gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Guard Name</th>
                                            <th>Permission</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ $role->guard_name }}</td>
                                                <td>
                                                    @if (count($role->permissions) > 0)
                                                        <ul>
                                                            @foreach ($role->permissions as $permission)
                                                                <li>{{ $permission->name }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        -
                                                    @endif

                                                </td>

                                                <td><a href="javascript:void(0)" data-value="{{ $role->id }}"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_edit_role"
                                                        class="btn btn-icon btn-primary me-2"><i
                                                            class="bi bi-pencil fs-4 "></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i
                                                            class="bi bi-x-lg fs-4 "></i></a>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <br>
                        <br>
                        <div class="card card-flush shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Permission </h3>
                                <div class="card-toolbar">
                                    {{-- <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_role">Tambah</a> --}}
                                </div>
                            </div>
                            <div class="card-body py-5">

                                <table id="kt_datatable_dom_positioning_permission"
                                    class="table table-striped table-row-bordered gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Name</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $permission->name }}</td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!--begin::Modal - Tambah Role-->
                        <div class="modal fade" id="kt_modal_create_role" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-900px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2>Tambah Role</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                            data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                        height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                        fill="currentColor" />
                                                    <rect x="7.41422" y="6" width="16" height="2"
                                                        rx="1" transform="rotate(45 7.41422 6)"
                                                        fill="currentColor" />
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
                                        <form id="kt_account_profile_details_form" class="form"
                                            action="{{ route('role_permission.store') }}" method="POST">
                                            @csrf
                                            <!--begin::Card body-->
                                            <div class="card-body  p-9">


                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="name"
                                                            class="form-control form-control-lg form-control-solid"
                                                            placeholder="Name" value="" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Guard
                                                        Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input readonly type="text" name="guard_name"
                                                            class="form-control  form-control-lg form-control-solid"
                                                            placeholder="web" value="web" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Permissions</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            data-control="select2" data-close-on-select="false"
                                                            data-placeholder="Pilih Permission" data-allow-clear="true"
                                                            multiple="multiple" name="permissions[]">
                                                            <option></option>
                                                            @foreach ($permissions as $permission)
                                                                <option value="{{ $permission->name }}">
                                                                    {{ $permission->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
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
                                                    id="kt_account_profile_details_submit">Tambah
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
                        <!--end::Modal - Tambah Role-->

                        <!--begin::Modal - Edit Role-->
                        <div class="modal fade" id="kt_modal_edit_role" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-900px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2>Update Role</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                            data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="6" y="17.3137"
                                                        width="16" height="2" rx="1"
                                                        transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                    <rect x="7.41422" y="6" width="16"
                                                        height="2" rx="1"
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
                                        <form id="kt_account_profile_details_form" class="form"
                                            action="{{ route('role_permission.store') }}" method="POST">
                                            @csrf
                                            <!--begin::Card body-->
                                            <div class="card-body  p-9">


                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="name"
                                                            class="form-control form-control-lg form-control-solid"
                                                            placeholder="Name" value="" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Guard
                                                        Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input readonly type="text" name="guard_name"
                                                            class="form-control  form-control-lg form-control-solid"
                                                            placeholder="web" value="web" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Permissions</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            data-control="select2" data-close-on-select="false"
                                                            data-placeholder="Pilih Permission"
                                                            data-allow-clear="true" multiple="multiple"
                                                            name="permissions[]">
                                                            <option></option>
                                                            @foreach ($permissions as $permission)
                                                                <option value="{{ $permission->name }}">
                                                                    {{ $permission->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
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
                                                    id="kt_account_profile_details_submit">Update
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
                        <!--end::Modal - Edit Role-->
                        <br>



</x-layout>
