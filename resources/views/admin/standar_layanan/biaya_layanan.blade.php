<x-admin.layout>
    <x-slot:subMenuTitle>
        Biaya Layanan
        </x-slot>

        <x-slot:mainMenuTitle>
            Standar Layanan
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
            <h1>Pengelolaan Biaya Layanan</h1>
            <br>


<<<<<<< HEAD
            <form action="{{ route('manajemen-ppid.biayalayanan.store') }}" method="POST" enctype="multipart/form-data">
=======
            <form action="{{ route('admin.biayalayanan.store') }}" method="POST" enctype="multipart/form-data">
>>>>>>> origin/main
                @csrf
                <div class="card card-flush shadow-sm">

                    <div class="card-body py-5">


                        <label for="" class=" form-label">Ubah Banner</label>
                        <br>
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">
                            <!--begin::Image preview wrapper-->
                            @if ($biayaLayanan)
                                @if ($biayaLayanan->banner_path)
                                    <div class="image-input-wrapper w-250px  h-125px"
<<<<<<< HEAD
                                        style="background-image: url({{ asset('storage/' . $biayaLayanan->banner_path) }})">
=======
                                        style="background-image: url({{ asset($biayaLayanan->banner_path) }})">
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

                            @can('biaya pelayanan.edit')
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

                    <div class="card-body py-5">

                        <div class="mb-10">
                            <label for="" class=" form-label">Judul</label>
                            @if ($biayaLayanan)
                                @if (auth()->user()->can('biaya pelayanan.edit'))
                                    <input type="text" name="judul" class="form-control form-control-solid"
                                        placeholder="Judul" value="{{ $biayaLayanan->judul }}" />
                                @else
                                    <input type="text" readonly name="judul"
                                        class="form-control form-control-solid" placeholder="Judul"
                                        value="{{ $biayaLayanan->judul }}" />
                                @endif
                            @else
                                @if (auth()->user()->can('biaya pelayanan.edit'))
                                    <input type="text" name="judul" class="form-control form-control-solid"
                                        placeholder="Judul" value="" />
                                @else
                                    <input type="text" readonly name="judul"
                                        class="form-control form-control-solid" placeholder="Judul" value="" />
                                @endif
                            @endif
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class=" form-label">Deskripsi</label>
                            @if ($biayaLayanan)
                                @if (auth()->user()->can('profil singkat ppid.edit'))
                                    <textarea name="deskripsi" id="kt_docs_ckeditor_classic_konten">
                                {{ $biayaLayanan->deskripsi }}
                                </textarea>
                                @else
                                    {!! $biayaLayanan->deskripsi !!}
                                @endif
                            @else
                                @if (auth()->user()->can('profil singkat ppid.edit'))
                                    <textarea name="deskripsi" id="kt_docs_ckeditor_classic_konten">
                                
                                </textarea>
                                @else
                                    <div class="card-body">
                                    </div>
                                @endif
                            @endif
                        </div>

                        <div class="mb-10">
                            <label for="" class="required form-label">Biaya Pelayanan Image</label>
                            <br>
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url({{ asset('template/dist/assets/media/svg/avatars/blank.svg') }})">
                                <!--begin::Image preview wrapper-->
                                @if ($biayaLayanan)
                                    @if ($biayaLayanan->direktori_image)
                                        <div class="image-input-wrapper w-500px  h-350px"
<<<<<<< HEAD
                                            style="background-image: url({{ asset('storage/' . $biayaLayanan->direktori_image) }})">
=======
                                            style="background-image: url({{ asset($biayaLayanan->direktori_image) }})">
>>>>>>> origin/main
                                        </div>
                                    @else
                                        <div class="image-input-wrapper w-500px  h-350px"
                                            style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                        </div>
                                    @endif
                                @else
                                    <div class="image-input-wrapper w-500px  h-350px"
                                        style="background-image: url({{ asset('template/dist/assets/media/patterns/pattern-1.jpg') }})">
                                    </div>

                                @endif
                                <!--end::Image preview wrapper-->

                                @can('biaya pelayanan.edit')
                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Change Banner">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="biaya" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="biaya_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
<<<<<<< HEAD
                                         data-bs-dismiss="click" title="Cancel Banner">
=======
                                        data-bs-dismiss="click" title="Cancel Banner">
>>>>>>> origin/main
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove Banner">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove button-->
                                @endcan
                            </div>
                            <br>
<<<<<<< HEAD
                            <br>                             
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class=" form-label">Aktif Image</label>
                            @php
                                $checked = '';
                                if($biayaLayanan->is_active){
                                    $checked = 'checked="checked"';
                                }
                            @endphp
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" name="is_active" type="checkbox" {!!$checked!!}/>
                            </label>
                            <!--end::Switch-->
                        </div>
                        @can('biaya pelayanan.create')
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
=======
                            <br> @can('biaya pelayanan.create')
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
>>>>>>> origin/main
                    </div>

                </div>
            </form>
            @push('child-scripts')
                <script src="{{ asset('template/dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
                <script>
                    let options = {
                        selector: "#kt_docs_ckeditor_classic_konten",
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
                    }

                    tinymce.init(options);

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
