<x-admin.layout>
    <x-slot:subMenuTitle>
        Visi dan Misi
        </x-slot>

        <x-slot:mainMenuTitle>
            Profil
            </x-slot>

            @push('child-scripts')
                <script src="{{ asset('template/dist/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#kt_docs_ckeditor_classic_visi'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });

                    ClassicEditor
                        .create(document.querySelector('#kt_docs_ckeditor_classic_misi'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            @endpush

            <h1>Pengelolaan Visi dan Misi</h1>
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
                            title="Change avatar">
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
                            title="Cancel avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel button-->

                        <!--begin::Remove button-->
                        <span
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Remove avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove button-->
                    </div>
                </div>

            </div>
            <br>

            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Visi PPID</h3>
                    <div class="card-toolbar">

                    </div>
                </div>
                <div class="card-body py-5">


                    <textarea name="kt_docs_ckeditor_classic_visi" id="kt_docs_ckeditor_classic_visi">
                    <p>Menjadi PPID terdepan dalam melaksanakan pelayanan informasi publik melalui pelayanan informasi yang cepat dan akurat sesuai dengan ketentuan peraturan perundang-undangan yang berlaku</p>
                    </textarea>
                </div>

            </div>
            <br>

            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Misi PPID</h3>
                    <div class="card-toolbar">

                    </div>
                </div>
                <div class="card-body py-5">


                    <textarea name="kt_docs_ckeditor_classic_misi" id="kt_docs_ckeditor_classic_misi">
                    <p> Memberikan pelayanan informasi publik dengan cepat dan tepat sesuai ketentuan peraturan yang berlaku <br>

                        Menyediakan sumber daya manusia yang kompeten, santun serta bertanggung jawab dalam pelayanan informasi <br>

                        Menyediakan fasilitas pelayanan informasi yang prima berupa sistem dan infrastruktur pelayanan informasi publik yang modern dan mendukung
                        </p>
                    </textarea>
                </div>

            </div>
            <br>
            <a href="#" class="btn btn-primary">Simpan</a>

            {{-- ckeditor --}}
            {{-- <script src="{{ asset('template/dist/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script> --}}


</x-admin.layout>
