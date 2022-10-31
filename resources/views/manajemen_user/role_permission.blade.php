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

                                function editDialog(index) {
                                    let app = {{ Js::from($roles) }}
                                    let role = app[index]
                                    document.getElementById('editName').value = role.name
                                    document.getElementById('editGuardName').value = role.guard_name
                                    let node;
                                    let textnode
                                    let permissions = {{ Js::from($permissions) }}

                                    //untuk reset option
                                    document.getElementById("editPermissions").innerHTML = '';

                                    //untuk set option
                                    permissions.forEach(element => {
                                        node = document.createElement("option");
                                        node.setAttribute('value', element.name)
                                        let obj = role.permissions.find(permission => permission.name === element.name);

                                        if (obj) {
                                            node.setAttribute('selected', 'selected')
                                        } else {
                                            document.getElementById("editPermissions").removeAttribute("selected");
                                        }

                                        textnode = document.createTextNode(element.name);
                                        node.appendChild(textnode);
                                        document.getElementById("editPermissions").appendChild(node);
                                    });
                                    document.getElementById('editForm').setAttribute('action', 'role_permission/' + role.id)
                                };

                                function selectAllPermissions() {
                                    document.getElementById("editPermissions").innerHTML = '';
                                    if (document.getElementById('selectAll').checked) {
                                        let node;
                                        let textnode
                                        let permissions = {{ Js::from($permissions) }}

                                        //untuk reset option
                                        document.getElementById("editPermissions").innerHTML = '';

                                        //untuk set option
                                        permissions.forEach(element => {
                                            node = document.createElement("option");
                                            node.setAttribute('value', element.name)
                                            node.setAttribute('selected', 'selected')
                                            textnode = document.createTextNode(element.name);
                                            node.appendChild(textnode);
                                            document.getElementById("editPermissions").appendChild(node);
                                        });
                                    } else {
                                        document.getElementById("editPermissions").innerHTML = '';

                                        let node;
                                        let textnode
                                        let permissions = {{ Js::from($permissions) }}

                                        //untuk reset option
                                        document.getElementById("editPermissions").innerHTML = '';

                                        //untuk set option
                                        permissions.forEach(element => {
                                            node = document.createElement("option");
                                            node.setAttribute('value', element.name)
                                            textnode = document.createTextNode(element.name);
                                            node.appendChild(textnode);
                                            document.getElementById("editPermissions").appendChild(node);
                                        });
                                    }
                                };

                                function deleteDialog(index) {
                                    let app = {{ Js::from($roles) }}
                                    let role = app[index]

                                    Swal.fire({
                                        html: `Apakah yakin akan <strong>menghapus</strong> role <span class="badge badge-primary"> ${role.name}</span> ?`,
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
                                            activateLoadingButton('.swal2-confirm')
                                            console.log('delete confirmed')
                                            $.ajax({
                                                type: "DELETE",
                                                url: "/admin/role_permission/" + role.id,
                                                cache: false,
                                                success: function(html) {

                                                    window.location.reload();

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
                            <h1>Daftar Role Permission </h1>
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
                                            <rect x="9" y="13.0283" width="7.3536" height="1.2256"
                                                rx="0.6128" transform="rotate(-45 9 13.0283)" fill="currentColor" />
                                            <rect x="9.86664" y="7.93359" width="7.3536" height="1.2256"
                                                rx="0.6128" transform="rotate(45 9.86664 7.93359)"
                                                fill="currentColor" />
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
                                        <span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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
                                <div
                                    class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row p-5 mb-10">
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
                                    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                                        <!--begin::Title-->
                                        <h4 class="mb-2 light">Sukses !</h4>
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
                                        <span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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

                                                    <td><a href="javascript:void(0)" data-value="{{ $loop->index }}"
                                                            onclick="editDialog({{ $loop->index }})"
                                                            id="btn-edit-role" data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_role" {{-- v-on:click="editDialog({{ $loop->index }})" --}}
                                                            class="btn btn-icon btn-primary me-2"><i
                                                                class="bi bi-pencil fs-4 "></i></a>


                                                        <a href="javascript:void(0)"
                                                            onclick="deleteDialog({{ $loop->index }})"
                                                            id="kt_docs_sweetalert_html"
                                                            class="btn btn-icon btn-danger"><i
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
                                                action="{{ route('admin.role_permission.store') }}" method="POST">
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
                                                                placeholder="Name" value="{{ old('name') }}" />
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
                                                            <select
                                                                class="form-select form-select-sm form-select-solid"
                                                                id="addP" data-control="select2"
                                                                data-close-on-select="false"
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
                                                        id="buttonTambahRole"
                                                        onclick="activateLoadingButton('#buttonTambahRole')">
                                                        <span class="indicator-label">
                                                            Tambah
                                                        </span>
                                                        <span class="indicator-progress">
                                                            Mohon Menunggu... <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
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
                                            <form id="editForm" class="form" {{-- action="{{ route('role_permission.store') }}" --}} method="POST">
                                                @csrf
                                                @method('PATCH')
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
                                                            <input type="text" name="edit_name" id="editName"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="Name" />
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
                                                            <input readonly type="text" name="edit_guard_name"
                                                                id="editGuardName"
                                                                class="form-control  form-control-lg form-control-solid"
                                                                placeholder="web" />
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
                                                            {{-- @{{ editFormRole.permissions }} --}}
                                                            <select
                                                                class="form-select form-select-sm form-select-solid"
                                                                id="editPermissions" data-control="select2"
                                                                data-close-on-select="false"
                                                                data-placeholder="Pilih Permission"
                                                                data-allow-clear="true" multiple="multiple"
                                                                name="edit_permissions[]">

                                                                <option></option>
                                                                {{-- @foreach ($permissions as $permission)
                                                                    <option value="{{ $permission->name }}">
                                                                        {{ $permission->name }}
                                                                    </option>
                                                                @endforeach --}}
                                                            </select>
                                                            <br><br>
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="selectAll"
                                                                    onclick="selectAllPermissions()" />
                                                                <label class="form-check-label" for="selectAll">
                                                                    Pilih Semua Permissions
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                    {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                                                    <button type="submit" class="btn btn-primary" id="updateButton"
                                                        onclick="activateLoadingButton('#updateButton')">
                                                        <span class="indicator-label">
                                                            Update
                                                        </span>
                                                        <span class="indicator-progress">
                                                            Mohon Menunggu... <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
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
                        </div>
                        @push('child-scripts')
                            <script>
                                const {
                                    createApp
                                } = Vue

                                createApp({
                                    data() {
                                        return {
                                            message: 'Hello Vue!',
                                            editFormRole: {
                                                name: null,
                                                guardName: null,
                                                permissions: []
                                            },
                                            np: document.getElementById('np')
                                        }
                                    },
                                    // watch(np, async (newx, oldx) => {
                                    //     console.log('newx', newx)
                                    //     console.log('oldx', oldx)
                                    // }),
                                    methods: {
                                        editDialog($index) {
                                            let app = {{ Js::from($roles) }}
                                            let role = app[$index]

                                            this.editFormRole.name = role.name
                                            this.editFormRole.guardName = role.guard_name
                                            this.editFormRole.permissions = role.permissions



                                        }
                                    }
                                }).mount('#roleVue')
                            </script>
                        @endpush


</x-layout>
