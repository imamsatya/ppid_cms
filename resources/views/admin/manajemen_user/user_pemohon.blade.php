<x-admin.layout>


<<<<<<< HEAD

=======
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

            function editDialog(index) {
                let usersPPID = {{ Js::from($usersPPID) }}
                let user = usersPPID[index]
                console.log('user', user)
                document.getElementById('editName').value = user.nama_lengkap
                document.getElementById('editEmail').value = user.email


                document.getElementById('editForm').setAttribute('action', 'user_admin/' + user.id)
            };

            function deleteDialog(index) {
                let usersPPID = {{ Js::from($usersPPID) }}
                let user = usersPPID[index]
                Swal.fire({
                    html: `Apakah yakin akan <strong>menghapus</strong> user <span class="badge badge-primary"> ${user.name}</span> ?`,
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
                            url: "/admin/user_admin/" + user.id,
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
>>>>>>> origin/main
    <h1>Daftar User Pemohon </h1>
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

    <br>
<<<<<<< HEAD
    {{-- {{ $usersPPID }} --}}
=======
>>>>>>> origin/main
    <div class="card card-flush shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Daftar User Pemohon </h3>
            <div class="card-toolbar">
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_tambahAdmin">Tambah</a>
            </div>
        </div>
        <div class="card-body py-5">

            <table id="kt_datatable_dom_positioning_role" class="table table-striped table-row-bordered gy-5 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800">
                        <th>No</th>
                        <th>Name</th>
<<<<<<< HEAD
                        <th>Identitas</th>
                        <th>Email</th>
                        <th>Pekerjaan</th>
                        <th>Token Aktivasi</th>

=======
                        <th>Email</th>
                        <th>Pekerjaan</th>
>>>>>>> origin/main
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usersPPID as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->nama_lengkap }}</td>
<<<<<<< HEAD

                            <td> <img width="100" height="100"
                                    src="{{ asset('storage/' . $user->identitas_file_path) }}" />
                            </td>

                            <td>{{ $user->email }}</td>
                            <td>{{ $user->pekerjaan }}</td>
                            @if ($user->isVerified)
                                <td> <span class="badge py-3 px-4 fs-7 badge-light-success">Verified</span> </td>
                            @else
                                <td> {{ $user->token_activation }}</td>
                            @endif

=======
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->pekerjaan }}</td>
>>>>>>> origin/main
                            <td><a href="javascript:void(0)" class="btn btn-icon btn-primary me-2"
                                    data-bs-toggle="modal" data-bs-target="#kt_modal_editAdmin"
                                    onclick="editDialog({{ $loop->index }})"><i class="bi bi-pencil fs-4 "></i></a>
                                <a href="javascript:void(0)" onclick="deleteDialog({{ $loop->index }})"
                                    class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a>

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>

    <!--begin::Modal - Tambah User Admin-->
    <div class="modal fade" id="kt_modal_tambahAdmin" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
<<<<<<< HEAD
                    <h2>Tambah User Pemohon</h2>
=======
                    <h2>Tambah User Admin</h2>
>>>>>>> origin/main
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
<<<<<<< HEAD
                    <form id="kt_account_profile_details_form" action="{{ route('manajemen-ppid.user_pemohon.store') }}"
                        method="POST" class="form" enctype="multipart/form-data">
=======
                    <form id="kt_account_profile_details_form" action="{{ route('admin.user_admin.store') }}"
                        method="POST" class="form">
>>>>>>> origin/main
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body  p-9">


                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
<<<<<<< HEAD
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama</label>
=======
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
>>>>>>> origin/main
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="name"
<<<<<<< HEAD
                                        class="form-control form-control-lg form-control-solid" placeholder="Nama"
                                        value="{{ old('name') }}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Pemohon</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-lg form-control-solid"
                                        aria-label="Select example" onchange="selectJenisPemohon()" id="jenispemohon"
                                        name="jenispemohon">
                                        <option selected value="">Jenis Pemohon</option>
                                        <option value="1">Perorangan</option>
                                        <option value="2">Kelompok</option>
                                        <option value="3">Badan Hukum</option>
                                    </select>
                                    {{-- <input type="text" name="jenis_pemohon"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Jenis Pemohon" value="" /> --}}
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis
                                    Identitas</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-lg form-control-solid"
                                        aria-label="Select example" disabled id="jenisidentitas"
                                        name="jenisidentitas">
                                        <option selected>Jenis Identitas</option>
                                        <option value="1">KTP/NPWP</option>
                                        <option value="2">Surat Kuasa</option>
                                        <option value="3">Anggaran Dasar</option>
                                    </select>
                                    <input type="text" hidden name="jenisidentitas" id="inputJenisIdentitas"
=======
                                        class="form-control form-control-lg form-control-solid" placeholder="Name"
>>>>>>> origin/main
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
<<<<<<< HEAD
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">No Identitas</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="noidentitas"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="No Identitas" value="{{ old('noidentitas') }}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="alamat"
                                        class="form-control form-control-lg form-control-solid" placeholder="Alamat"
                                        value="{{ old('alamat') }}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">No Handphone</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="nohp"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="No Handphone" value="{{ old('nohp') }}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->



                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">NPWP</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="npwp"
                                        class="form-control form-control-lg form-control-solid" placeholder="NPWP"
                                        value="{{ old('npwp') }}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Pekerjaan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="pekerjaan"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Pekerjaan" value="{{ old('pekerjaan') }}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">KTP</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">

                                        <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                        </div>


                                        <!--begin::Edit button-->
                                        <label
                                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            data-bs-dismiss="click" title="Change Image">
                                            <i class="bi bi-pencil-fill fs-7"></i>

                                            <!--begin::Inputs-->
                                            <input type="file" name="identitasfile" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="identitasfile_remove" />
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

                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
=======
>>>>>>> origin/main
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="email" name="email"
                                        class="form-control form-control-lg form-control-solid" placeholder="Email"
<<<<<<< HEAD
                                        value="{{ old('email') }}" />
=======
                                        value="" />
>>>>>>> origin/main
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Password</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="password" name="password"
                                        class="form-control form-control-lg form-control-solid" placeholder="Password"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

<<<<<<< HEAD
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Ulangi
                                    Password</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="password" name="password_confirmation"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Konfirmasi Password" value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
=======

                            <!--end::Input group-->

>>>>>>> origin/main
                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                            <button type="submit" class="btn btn-primary" id="addButton"
                                onclick="activateLoadingButton('#addButton')"><span class="indicator-label">
                                    Simpan
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
    <!--end::Modal - Tambah User Admin-->

<<<<<<< HEAD
    <!--begin::Modal - Edit User Pemohon-->
=======
    <!--begin::Modal - Edit User Admin-->
>>>>>>> origin/main
    <div class="modal fade" id="kt_modal_editAdmin" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
<<<<<<< HEAD
                    <h2>Edit User Pemohon</h2>
=======
                    <h2>Edit User Admin</h2>
>>>>>>> origin/main
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
<<<<<<< HEAD
                    <form id="editForm" method="POST" class="form" enctype="multipart/form-data">
=======
                    <form id="editForm" method="POST" class="form">
>>>>>>> origin/main
                        @csrf
                        @method('PATCH')
                        <!--begin::Card body-->
                        <div class="card-body  p-9">


<<<<<<< HEAD

=======
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text"name="edit_name" id="editName"
                                        class="form-control form-control-lg form-control-solid" placeholder="Name"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="email" name="edit_email" id="editEmail"
                                        class="form-control form-control-lg form-control-solid" placeholder="Email"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
>>>>>>> origin/main

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Password</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
<<<<<<< HEAD
                                    <input type="password" name="password" id="editPassword"
=======
                                    <input type="password" name="edit_password" id="editPassword"
>>>>>>> origin/main
                                        class="form-control form-control-lg form-control-solid" placeholder="Password"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

<<<<<<< HEAD
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Ulangi
                                    Password</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="password" name="password_confirmation" id="editPasswordConfirmation"
                                        class="form-control form-control-lg form-control-solid" placeholder="Password"
                                        value="" />
=======
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Role</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-select-sm form-select-solid"
                                        data-control="select2" data-close-on-select="false"
                                        data-placeholder="Pilih Role" name="edit_roles[]" id="editRoles">
                                        <option></option>

                                    </select>
>>>>>>> origin/main
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

<<<<<<< HEAD
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                                <button type="submit" class="btn btn-primary" id="updateButton"
                                    onclick="activateLoadingButton('#updateButton')"><span class="indicator-label">
                                        Update
                                    </span>
                                    <span class="indicator-progress">
                                        Mohon Menunggu... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                            <!--end::Actions-->
=======
                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                            <button type="submit" class="btn btn-primary" id="updateButton"
                                onclick="activateLoadingButton('#updateButton')"><span class="indicator-label">
                                    Update
                                </span>
                                <span class="indicator-progress">
                                    Mohon Menunggu... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
>>>>>>> origin/main
                    </form>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
<<<<<<< HEAD
    <!--end::Modal - Edit User Pemohon-->
    <br>

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

            function editDialog(index) {
                let usersPPID = {{ Js::from($usersPPID) }}
                let user = usersPPID[index]
                document.getElementById('editForm').setAttribute('action', 'update/' + user.id)
            };

            function deleteDialog(index) {
                let usersPPID = {{ Js::from($usersPPID) }}
                let user = usersPPID[index]
                Swal.fire({
                    html: `Apakah yakin akan <strong>menghapus</strong> user <span class="badge badge-primary"> ${user.nama_lengkap}</span> ?`,
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
                        $.ajax({
                            type: "post",
                            url: "{{route('manajemen-ppid.user_pemohon.delete')}}",
                            data:{
                                    "id": user.id
                                },
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
                    } else {
                        console.log('delete canceled')
                    }
                });

                // Swal.fire({
                //     template: '#my-template'
                // })
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

            function selectJenisPemohon() {


                document.getElementById('jenisidentitas').value = document.getElementById('jenispemohon').value
                document.getElementById('inputJenisIdentitas').value = document.getElementById('jenisidentitas').value
            }

            function selectJenisPemohonEdit() {
                document.getElementById('editJenisIdentitas').value = document.getElementById('edit-jenispemohon').value
                document.getElementById('editInputJenisIdentitas').value = document.getElementById('editJenisIdentitas')
                    .value
            }
        </script>
    @endpush
=======
    <!--end::Modal - Edit User Admin-->
    <br>

>>>>>>> origin/main

    <x-slot:isShowAccordion_manajemenUser>
        show
        </x-slot>
        <x-slot:isActiveLink_manajemenUser>
            active
            </x-slot>
<<<<<<< HEAD
            <x-slot:isActiveLink_userPemohon>
=======
            <x-slot:isActiveLink_userAdmin>
>>>>>>> origin/main
                active
                </x-slot>
                <x-slot:subMenuTitle>
                    User Pemohon
                    </x-slot>

                    <x-slot:mainMenuTitle>
                        Manajemen User
                        </x-slot>
</x-admin.layout>
