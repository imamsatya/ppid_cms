<x-layout>
    <x-slot:subMenuTitle>
        Profil Singkat PPID
        </x-slot>

        <x-slot:mainMenuTitle>
            Profil
            </x-slot>


            <h1>Pengelolaan Profil</h1>
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
                            title="Change Banner">
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
                    </div>
                </div>

            </div>
            <br>
            <div class="card card-flush shadow-sm">

                <div class="card-body py-5">


                    <br>
                    <div class="mb-10">
                        <label for="" class="required form-label">Judul</label>
                        <input type="text" class="form-control form-control-solid"
                            placeholder="Judul Profil Singkat PPID" />
                    </div>


                    <label for="exampleFormControlInput1" class="required form-label">Konten</label>
                    <textarea name="kt_docs_ckeditor_classic_konten" id="kt_docs_ckeditor_classic_konten">
                    <p>Mengacu pada Peraturan Menteri BUMN Nomor PER-04/MBU/03/2021 tentang Organisasi dan Tata Kerja Kementerian Badan Usaha Milik Negara, maka Biro Humas dan Fasilitasi Dukungan Strategis melaksanakan fungsi Pejabat Pengelola Informasi dan Dokumentasi (PPID) di lingkungan Kementerian BUMN. Dalam hal ini, pelaksanaan tugas PPID dilakukan melalui koordinasi antar fungsi serta melakukan penyiapan bahan koordinasi dan pelaksanaan tugas pengelolaan PPID serta pelaksanaan proses pemenuhan dan pengelolaan informasi publik sebagaimana Peraturan Menteri BUMN Nomor PER-09/MBU/08/2020 tentang Perubahan Kedua Atas Peraturan Menteri BUMN Nomor PER-08/MBU/2014 tentang Pedoman Pengelolaan Informasi dan Dokumentasi di lingkungan Kementerian BUMN.
                        <br><br>

                        Sebagaimana arahan pelaksanaan pelayanan informasi badan publik oleh Komisi Informasi Pusat, Kementerian BUMN telah menyediakan ruang khusus pelayanan informasi pada Lobi Utara Gedung Kementerian BUMN. Namun dikarenakan keterbatasan sumber daya manusia yang dimiliki dan mengingat masa pandemi, maka pelayanan informasi publik secara efektif dilakukan secara daring (online) serta pengelolaan informasi publik dilakukan di ruang kerja Biro Humas dan Fasilitasi Dukungan Strategis lantai 4 Gedung Kementerian BUMN. Pemohon dapat menyampaikan permohonannya melalui surat elektroik melalui alamat ppid@bumn.go.id, website PPID (https://ppid.bumn.go.id) dan/atau Aplikasi Mobile PPID.
                        <br><br>
                        Peran aktif Kementerian BUMN dalam pelaksanaan monitoring dan evaluasi implementasi keterbukaan informasi Badan Publik tahun 2021 ditunjukkan melalui skor Keterbukaan Informasi Publik yang diraih pada tahun 2021 sebesar 93,48 dengan kategori “Informatif”. Skor yang diraih tersebut meningkat dibandingkan dengan capaian tahun 2020 sebesar 85,26 dengan kategori “Menuju informatif”. Peningkatan inovasi dan kolaborasi serta penyediaan data dan informasi yang lengkap menjadi pendukung capaian skor keterbukaan informasi publik di tahun 2021.
                        <br><br>
                        Lebih lanjut di tahun 2021, untuk menunjang penyebaran informasi publik yang disajikan melalui Instagram Kementerian BUMN, PPID Kementerian BUMN telah meluncurkan kanal media sosial “Instagram” khusus PPID. Kanal ini merupakan salah satu sarana/media komunikasi PPID untuk menyampaikan informasi publik Kementerian BUMN. Instagram merupakan media sosial yang paling banyak digunakan oleh masyarakat Indonesia. Sejalan dengan hal tersebut, diharapkan akun media sosial PPID ini dapat menjangkau lebih banyak publik sehingga semakin banyak masyarakat yang teredukasi melalui informasi resmi yang disajikan. </p>
                    </textarea>
                    <br><br>


                </div>





            </div>
            <br>
            <div class="card card-flush shadow-sm">

                <div class="card-body py-5">


                    <label for="" class="required form-label">Side Image</label>
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
                            title="Change Side Image">
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
                            title="Cancel Side Image">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel button-->

                        <!--begin::Remove button-->
                        <span
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Remove Side Image">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove button-->
                    </div>
                    <p>minimal dimensi 369x454 pixel</p>
                </div>

            </div>





            <br>
            <a href="#" class="btn btn-primary">Simpan</a>

            {{-- ckeditor --}}
            {{-- <script src="{{ asset('template/dist/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script> --}}


</x-layout>
