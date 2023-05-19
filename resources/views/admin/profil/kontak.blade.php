<x-admin.layout>
    <x-slot:subMenuTitle>
        Kontak
        </x-slot>

        <x-slot:mainMenuTitle>
            Profil
            </x-slot>

            @push('child-scripts')
                <script src="{{ asset('template/dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
                <script>
                    let options = {
                        selector: "#kt_docs_ckeditor_classic_waktuPelayanan",
                        height: "480",
                        fontsize_formats: "8pt 10pt 11pt 12pt 14pt 18pt 24pt ",
                        image_title: true,
                        /* enable automatic uploads of images represented by blob or data URIs*/
                        automatic_uploads: true,
                        /*
                          URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
                          images_upload_url: 'postAcceptor.php',
                          here we add custom filepicker only to Image dialog
                        */
                        file_picker_types: 'image',
                        /* and here's our custom image picker*/
                        file_picker_callback: function(cb, value, meta) {
                            var input = document.createElement('input');
                            input.setAttribute('type', 'file');
                            input.setAttribute('accept', 'image/*');

                            /*
                              Note: In modern browsers input[type="file"] is functional without
                              even adding it to the DOM, but that might not be the case in some older
                              or quirky browsers like IE, so you might want to add it to the DOM
                              just in case, and visually hide it. And do not forget do remove it
                              once you do not need it anymore.
                            */

                            input.onchange = function() {
                                var file = this.files[0];

                                var reader = new FileReader();
                                reader.onload = function() {
                                    /*
                                      Note: Now we need to register the blob in TinyMCEs image blob
                                      registry. In the next release this part hopefully won't be
                                      necessary, as we are looking to handle it internally.
                                    */
                                    var id = 'blobid' + (new Date()).getTime();
                                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                    var base64 = reader.result.split(',')[1];
                                    var blobInfo = blobCache.create(id, file, base64);
                                    blobCache.add(blobInfo);

                                    /* call the callback and populate the Title field with the file name */
                                    cb(blobInfo.blobUri(), {
                                        title: file.name
                                    });
                                };
                                reader.readAsDataURL(file);
                            };

                            input.click();
                        },


                        plugins: 'print preview fullpage searchreplace autolink directionality  visualblocks visualchars fullscreen image code link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  imagetools   contextmenu colorpicker textpattern help',
                        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
                        image_advtab: true,
                        templates: [{
                                title: 'Test template 1',
                                content: 'Test 1'
                            },
                            {
                                title: 'Test template 2',
                                content: 'Test 2'
                            }
                        ],
                        font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago;Lato=lato, sans-serif; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
                        content_style: [
                            "@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap'); body { font-family: 'Lato', sans-serif;font-size: 11pt; }",
                        ]

                    };

                    if (KTThemeMode.getMode() === "dark") {
                        options["skin"] = "oxide-dark";
                        options["content_css"] = "dark";
                    };

                    tinymce.init(options);

<<<<<<< HEAD
                    function editDialog(index) {
                        let dokumentasi = {{ Js::from($dokumentasi) }}
                        dokumentasi = dokumentasi[index]
                        document.getElementById('editUrutan').value = dokumentasi.urutan
                        document.getElementById('editKeterangan').value = dokumentasi.keterangan
                        document.getElementById('editImageKontak').style.cssText =
                            `background-image: url({{ asset('storage/${dokumentasi.image_path}') }})`

                        document.getElementById('editForm').setAttribute('action', 'kontak/dokumentasi_ruang/update/' +
                            dokumentasi.id)
                    };

=======
>>>>>>> origin/main
                    function deleteDialog(index) {
                        let dokumentasi = {{ Js::from($dokumentasi) }}
                        dokumentasi = dokumentasi[index]
                        Swal.fire({
                            html: `Apakah yakin akan <strong>menghapus</strong> dokumentasi <span class="badge badge-primary"> ${dokumentasi.keterangan}</span> ?`,
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
<<<<<<< HEAD
                                    type: "post",
                                    url: "{{route('manajemen-ppid.kontak.dokumentasi.delete')}}",
                                    data:{
                                            "id": dokumentasi.id
                                        },
=======
                                    type: "DELETE",
                                    url: "/admin/kontak/dokumentasi_ruang/delete/" + dokumentasi.id,
>>>>>>> origin/main
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

            <h1>Pengelolaan Kontak</h1>
            <br>
<<<<<<< HEAD
            <form action="{{route('manajemen-ppid.kontak.store')}}" method="POST" enctype="multipart/form-data">
=======
            <form action="" method="POST" enctype="multipart/form-data">
>>>>>>> origin/main
                @csrf
                <div class="card card-flush shadow-sm">

                    <div class="card-body py-5">


                        <label for="" class="required form-label">Ubah Banner</label>
                        <br>
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">
                            <!--begin::Image preview wrapper-->
                            @if ($kontak)
                                @if ($kontak->banner_path)
                                    <div class="image-input-wrapper w-250px  h-125px"
<<<<<<< HEAD
                                        style="background-image: url({{ asset('storage/' . $kontak->banner_path) }})">
=======
                                        style="background-image: url({{ asset($kontak->banner_path) }})">
>>>>>>> origin/main
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

                            @can('kontak.edit')
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

                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">


                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    @if ($kontak)
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="text" name="alamat"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Alamat Kantor Kementrian BUMN"
                                                value="{{ $kontak->alamat }}" />
                                        @else
                                            <input readonly type="text" name="alamat"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Alamat Kantor Kementrian BUMN"
                                                value="{{ $kontak->alamat }}" />
                                        @endif
                                    @else
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="text" name="alamat"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Alamat Kantor Kementrian BUMN" value="" />
                                        @else
                                            <input readonly type="text" name="alamat"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Alamat Kantor Kementrian BUMN" value="" />
                                        @endif

                                    @endif
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
                                    @if ($kontak)
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="text" name="telepon"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="nomor telepon PPID KBUMN"
                                                value="{{ $kontak->telepon }}" />
                                        @else
                                            <input readonly type="text" name="telepon"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="nomor telepon PPID KBUMN"
                                                value="{{ $kontak->telepon }}" />
                                        @endif
                                    @else
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="text" name="telepon"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="nomor telepon PPID KBUMN" value="" />
                                        @else
                                            <input readonly type="text" name="telepon"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="nomor telepon PPID KBUMN" value="" />
                                        @endif

                                    @endif
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
                                    @if ($kontak)
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="email" name="email"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="email resmi PPID KBUMN" value="{{ $kontak->email }}" />
                                        @else
                                            <input readonly type="email" name="email"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="email resmi PPID KBUMN" value="{{ $kontak->email }}" />
                                        @endif
                                    @else
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="email" name="email"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="email resmi PPID KBUMN" value="" />
                                        @else
                                            <input readonly type="email" name="email"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="email resmi PPID KBUMN" value="" />
                                        @endif
                                    @endif

                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Waktu
                                    Pelayanan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    @if ($kontak)
                                        @if (auth()->user()->can('kontak.edit'))
                                            <textarea name="waktu_pelayanan" id="kt_docs_ckeditor_classic_waktuPelayanan">
                                        {{ $kontak->waktu_pelayanan }}
                                        </textarea>
                                        @else
                                            {!! $kontak->waktu_pelayanan !!}
                                        @endif
                                    @else
                                        @if (auth()->user()->can('kontak.edit'))
                                            <textarea name="waktu_pelayanan" id="kt_docs_ckeditor_classic_waktuPelayanan">
                                        
                                        </textarea>
                                        @else
                                            <div class="card-body">
                                            </div>
                                        @endif
                                    @endif

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
                                    @if ($kontak)
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="text" name="latitude"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Latitude" value="{{ $kontak->latitude }}" />
                                        @else
                                            <input readonly type="text" name="latitude"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Latitude" value="{{ $kontak->latitude }}" />
                                        @endif
                                    @else
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="text" name="latitude"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Latitude" value="-6.1814988" />
                                        @else
                                            <input readonly type="text" name="latitude"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Latitude" value="-6.1814988" />
                                        @endif

                                    @endif

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
                                    @if ($kontak)
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="text" name="longitude"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Longitude" value="{{ $kontak->longitude }}" />
                                        @else
                                            <input readonly type="text" name="longitude"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Longitude" value="{{ $kontak->longitude }}" />
                                        @endif
                                    @else
                                        @if (auth()->user()->can('kontak.edit'))
                                            <input type="text" name="longitude"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Longitude" value="106.82522458349823" />
                                        @else
                                            <input readonly type="text" name="longitude"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Longitude" value="106.82522458349823" />
                                        @endif

                                    @endif
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->



                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-start py-6 px-9">
                            {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                            @can('kontak.create')
                                <button type="submit" class="btn btn-primary" id="addKontakButton"
                                    onclick="activateLoadingButton('#addKontakButton')"><span class="indicator-label">
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

                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
            </form>

            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Dokumentasi Ruang PPID</h3>
                    <div class="card-toolbar">
                        @can('kontak.create')
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_tambahDokumentasi">Tambah</a>
                        @endcan
                    </div>
                </div>
                <div class="card-body py-5">
                    <table id="kt_datatable_column_rendering"
                        class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>No</th>
                                <th>Image</th>
                                <th>Keterangan</th>
                                <th>Urutan</th>
                                @can('kontak.delete')
                                    <th>Aksi</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokumentasi as $dokumentasi)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td> <img width="100" height="100"
<<<<<<< HEAD
                                            src="{{ asset('storage/' . $dokumentasi->image_path) }}" />
                                    </td>
                                    <td>{{ $dokumentasi->keterangan }}</td>
                                    <td>{{ $dokumentasi->urutan }}</td>


                                    <td>
                                        @can('kontak.edit')
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_editDokumentasi"
                                                onclick="editDialog({{ $loop->index }})"
                                                class="btn btn-icon btn-primary me-2"><i
                                                    class="bi bi-pencil fs-4 "></i></a>
                                        @endcan
                                        @can('kontak.delete')
                                            <a href="javascript:void(0)" onclick="deleteDialog({{ $loop->index }})"
                                                class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a>
                                        @endcan
                                    </td>

=======
                                            src="{{ asset($dokumentasi->image_path) }}" />
                                    </td>
                                    <td>{{ $dokumentasi->keterangan }}</td>
                                    <td>{{ $dokumentasi->urutan }}</td>
                                    @can('kontak.delete')
                                        <td><a href="javascript:void(0)" onclick="deleteDialog({{ $loop->index }})"
                                                class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a></td>
                                    @endcan
>>>>>>> origin/main
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

            <!--begin::Modal - Tambah User Admin-->
            <div class="modal fade" id="kt_modal_tambahDokumentasi" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Tambah Dokumentasi</h2>
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
                            <form id="kt_account_profile_details_form" enctype="multipart/form-data"
<<<<<<< HEAD
                                action="{{ route('manajemen-ppid.kontak.dokumentasi.store') }}" method="POST"
=======
                                action="{{ route('admin.kontak.dokumentasi.store') }}" method="POST"
>>>>>>> origin/main
                                class="form">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body  p-9">
<<<<<<< HEAD
=======


>>>>>>> origin/main
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
                                                        <input type="file" name="dokumentasi"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="dokumentasi_remove" />
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
                                        <label
                                            class="col-lg-4 col-form-label required fw-semibold fs-6">Keterangan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="keterangan"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Keterangan" value="" />
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
                                    @can('kontak.create')
                                        <button type="submit" class="btn btn-primary" id="addDokumentasiButton"
                                            onclick="activateLoadingButton('#addDokumentasiButton')"><span
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
            <!--begin::Modal - Edit Bagan Kanan-->
            <div class="modal fade" id="kt_modal_editDokumentasi" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Edit Dokumentasi</h2>
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
                            <form id="editForm" method="POST" enctype="multipart/form-data" class="form">
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
                                                    id="editImageKontak">
                                                </div>


                                                @can('kontak.edit')
                                                    <!--begin::Edit button-->
                                                    <label
                                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Change Image">
                                                        <i class="bi bi-pencil-fill fs-7"></i>

                                                        <!--begin::Inputs-->
                                                        <input type="file" name="dokumentasi" id="editdokumentasi"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="dokumentasi_remove" />
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
                                        <label
                                            class="col-lg-4 col-form-label required fw-semibold fs-6">Keterangan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="keterangan" id="editKeterangan"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Keterangan" value="" />
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
                                    @can('kontak.create')
                                        <button type="submit" class="btn btn-primary" id="addButton"
                                            onclick="activateLoadingButton('#addButton')"><span class="indicator-label">
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

=======
>>>>>>> origin/main
            <br>

</x-admin.layout>
