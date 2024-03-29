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
        <h1>Daftar Role Permission </h1>
        <br>
        <!--begin::Row-->
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 g-5 g-xl-9">


            @foreach ($roles as $role)
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2> {{ $role['name'] }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-1">

                            <!--begin::Users-->
                            {{-- <div class="fw-bold text-gray-600 mb-5">Total users with
                                this role: 5</div> --}}
                            <?php
                            $permissionGroup = [];
                            foreach ($role['permissions'] as $key => $permission) {
                                $permissionName = substr($permission->name, 0, strpos($permission->name, '.'));
                            
                                array_push($permissionGroup, $permissionName);
                            }
                            $permissionGroup = array_values(array_unique($permissionGroup));
                            ?>

                            <?php
                            //Show
                            
                            //Dashboard
                            $showDashboard = in_array('dashboard', $permissionGroup);
                            //Layanan PPID
                            $showLayananPPID = in_array('data permohonan', $permissionGroup) || in_array('data keberatan', $permissionGroup);
                            $showDataPermohonan = in_array('data permohonan', $permissionGroup);
                            $showDataKeberatan = in_array('data keberatan', $permissionGroup);
                            
                            //Profil
                            $showProfil = in_array('profil singkat ppid', $permissionGroup) || in_array('tugas dan fungsi ppid', $permissionGroup) || in_array('struktur organisasi', $permissionGroup) || in_array('visi dan misi', $permissionGroup) || in_array('kontak', $permissionGroup) || in_array('sosial media', $permissionGroup);
                            $showProfilSingkat = in_array('profil singkat ppid', $permissionGroup);
                            $showTugasDanFungsi = in_array('tugas dan fungsi ppid', $permissionGroup);
                            $showStrukturOrganisasi = in_array('struktur organisasi', $permissionGroup);
                            $showVisiDanMisi = in_array('visi dan misi', $permissionGroup);
                            $showKontak = in_array('kontak', $permissionGroup);
                            $showSosialMedia = in_array('sosial media', $permissionGroup);
                            
                            //Regulasi
                            $showRegulasi = in_array('peraturan kip', $permissionGroup) || in_array('rancangan peraturan kip', $permissionGroup);
                            $showPeraturanKIP = in_array('peraturan kip', $permissionGroup);
                            $showRancanganPeraturanKIP = in_array('rancangan peraturan kip', $permissionGroup);
                            
                            //Informasi Publik
                            $showInformasiPublik = in_array('informasi secara berkala', $permissionGroup) || in_array('informasi serta merta', $permissionGroup) || in_array('informasi setiap saat', $permissionGroup);
                            $showInformasiSecaraBerkala = in_array('informasi secara berkala', $permissionGroup);
                            $showInformasiSertaMerta = in_array('informasi serta merta', $permissionGroup);
                            $showInformasiSetiapSaat = in_array('informasi setiap saat', $permissionGroup);
                            
                            //Laporan
                            $showLaporan = in_array('laporan triwulanan pip', $permissionGroup) || in_array('laporan tahunan pip', $permissionGroup) || in_array('laporan hasil survei', $permissionGroup);
                            $showLaporanTriwulanan = in_array('laporan triwulanan pip', $permissionGroup);
                            $showLaporanTahunan = in_array('laporan tahunan pip', $permissionGroup);
                            $showLaporanHasilSurvei = in_array('laporan hasil survei', $permissionGroup);
                            
                            //Standar Layanan
                            $showStandarLayanan = in_array('maklumat pelayanan', $permissionGroup) || in_array('prosedur pelayanan', $permissionGroup);
                            $showMaklumatPelayanan = in_array('maklumat pelayanan', $permissionGroup);
                            $showProsedurPelayanan = in_array('prosedur pelayanan', $permissionGroup);
                            
                            //FAQ
                            $showFAQ = in_array('faq', $permissionGroup);
                            
                            //Manajemen User
                            $showManajemenUser = in_array('user pemohon', $permissionGroup) || in_array('user admin', $permissionGroup) || in_array('role permission', $permissionGroup);
                            $showUserPemohon = in_array('user pemohon', $permissionGroup);
                            $showUserAdmin = in_array('user admin', $permissionGroup);
                            $showRolePermission = in_array('role permission', $permissionGroup);
                            
                            //Manajemen Home
                            $showManajemenHome = in_array('slider', $permissionGroup) || in_array('informasi', $permissionGroup) || in_array('video', $permissionGroup) || in_array('footer', $permissionGroup);
                            $showSlider = in_array('slider', $permissionGroup);
                            $showInformasi = in_array('informasi', $permissionGroup);
                            $showVideo = in_array('video', $permissionGroup);
                            $showFooter = in_array('footer', $permissionGroup);
<<<<<<< HEAD
                            
                            //Manajemen Menu
                            $showManajemenMenu = in_array('manajemen menu', $permissionGroup);
=======
>>>>>>> origin/main
                            ?>

                            <!--end::Users-->
                            <!--begin::Permissions-->
                            <div class="d-flex flex-column text-gray-600">
                                <div class="row ">
                                    @if ($showDashboard || $showLayananPPID || $showProfil || $showRegulasi || $showInformasiPublik)
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <!--begin::Dashboard-->

                                            @if ($showDashboard)
                                                <div class="d-flex align-items-center py-2">
                                                    <span class="bullet bg-primary me-3"></span>Dashboard
                                                </div>
                                            @endif
                                            <!--end::Dashboard-->

                                            <!--begin::Layanan PPID-->
                                            @if ($showLayananPPID)
                                                <div class="d-flex align-items-center py-2">
                                                    <span
                                                        class="bullet bullet-vertical bg-secondary me-3"></span>Layanan
                                                    PPID
                                                </div>
                                                @if ($showDataPermohonan)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Data Permohonan
                                                    </div>
                                                @endif

                                                @if ($showDataKeberatan)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Data Keberatan
                                                    </div>
                                                @endif
                                            @endif
                                            <!--end::Layanan PPID-->

                                            <!--begin::Profil-->
                                            @if ($showProfil)
                                                <div class="d-flex align-items-center py-2">
                                                    <span class="bullet bullet-vertical bg-secondary me-3"></span>Profil
                                                </div>

                                                @if ($showProfilSingkat)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Profil Singkat PPID
                                                    </div>
                                                @endif

                                                @if ($showTugasDanFungsi)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Tugas dan Fungsi
                                                    </div>
                                                @endif

                                                @if ($showStrukturOrganisasi)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Struktur Organisasi
                                                    </div>
                                                @endif
                                                @if ($showVisiDanMisi)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Visi dan Misi
                                                    </div>
                                                @endif

                                                @if ($showKontak)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Kontak
                                                    </div>
                                                @endif
                                            @endif
                                            <!--end::Profil-->

                                            <!--begin::Regulasi-->
                                            @if ($showRegulasi)
                                                <div class="d-flex align-items-center py-2">
                                                    <span
                                                        class="bullet bullet-vertical bg-secondary me-3"></span>Regulasi
                                                </div>
                                                @if ($showPeraturanKIP)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Peraturan KIP
                                                    </div>
                                                @endif

                                                @if ($showRancanganPeraturanKIP)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Rancangan Peraturan
                                                        KIP
                                                    </div>
                                                @endif
                                            @endif
                                            <!--end::Regulasi-->
                                            <!--begin::Informasi Publik-->
                                            @if ($showInformasiPublik)
                                                <div class="d-flex align-items-center py-2">
                                                    <span
                                                        class="bullet bullet-vertical bg-secondary me-3"></span>Informasi
                                                    Publik
                                                </div>
                                                @if ($showInformasiSecaraBerkala)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Informasi Secara
                                                        Berkala
                                                    </div>
                                                @endif
                                                @if ($showInformasiSertaMerta)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Informasi Serta
                                                        Merta
                                                    </div>
                                                @endif
                                                @if ($showInformasiSetiapSaat)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Informasi Setiap
                                                        Saat
                                                    </div>
                                                @endif
                                            @endif
                                            <!--end::Informasi Publik-->
                                        </div>
                                    @endif
                                    @if ($showLaporan || $showStandarLayanan || $showFAQ || $showManajemenUser || $showManajemenHome)
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <!--begin::Laporan-->

                                            @if ($showLaporan)
                                                <div class="d-flex align-items-center py-2">
                                                    <span
                                                        class="bullet bullet-vertical bg-secondary me-3"></span>Laporan
                                                </div>
                                                @if ($showLaporanTriwulanan)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Laporan Triwulanan
                                                        PIP
                                                    </div>
                                                @endif

                                                @if ($showLaporanTahunan)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Laporan Tahunan PIP
                                                    </div>
                                                @endif
                                                @if ($showLaporanHasilSurvei)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Laporan Hasil
                                                        Survei
                                                    </div>
                                                @endif
                                            @endif
                                            <!--end::Laporan-->

                                            <!--begin::Standar Layanan-->
                                            @if ($showStandarLayanan)
                                                <div class="d-flex align-items-center py-2">
                                                    <span
                                                        class="bullet bullet-vertical bg-secondary me-3"></span>Standar
                                                    Layanan
                                                </div>
                                                @if ($showMaklumatPelayanan)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Maklumat Pelayanan
                                                    </div>
                                                @endif
                                                @if ($showProsedurPelayanan)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Prosedur Pelayanan
                                                    </div>
                                                @endif
                                            @endif
                                            <!--end::Standar Layanan-->

                                            <!--begin::FAQ-->
                                            @if ($showFAQ)
                                                <div class="d-flex align-items-center py-2">
                                                    <span class="bullet bg-primary me-3"></span>FAQ
                                                </div>
                                            @endif
                                            <!--begin::FAQ-->

                                            <!--begin::Manajmen User-->

                                            @if ($showManajemenUser)
                                                <div class="d-flex align-items-center py-2">
                                                    <span
                                                        class="bullet bullet-vertical bg-secondary me-3"></span>Manajemen
                                                    User
                                                </div>
                                                @if ($showUserPemohon)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>User Pemohon
                                                    </div>
                                                @endif
                                                @if ($showUserAdmin)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>User Admin
                                                    </div>
                                                @endif
                                                @if ($showRolePermission)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Role Permission
                                                    </div>
                                                @endif
                                            @endif
                                            <!--end::Manajmen User-->

                                            <!--begin::Manajmen Home-->

                                            @if ($showManajemenHome)
                                                <div class="d-flex align-items-center py-2">
                                                    <span
                                                        class="bullet bullet-vertical bg-secondary me-3"></span>Manajemen
                                                    Home
                                                </div>
                                                @if ($showSlider)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Slider
                                                    </div>
                                                @endif
                                                @if ($showInformasi)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Informasi
                                                    </div>
                                                @endif
                                                @if ($showVideo)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Video
                                                    </div>
                                                @endif
                                                @if ($showFooter)
                                                    <div class="d-flex align-items-center py-2 px-4">
                                                        <span class="bullet bg-primary me-3"></span>Footer
                                                    </div>
                                                @endif
                                            @endif
                                            <!--end::Manajmen Home-->

<<<<<<< HEAD
                                            <!--begin::Manajmen Menu-->
                                            @if ($showFAQ)
                                                <div class="d-flex align-items-center py-2">
                                                    <span class="bullet bg-primary me-3"></span>Manajemen Menu
                                                </div>
                                            @endif

=======
>>>>>>> origin/main

                                            <!--begin::Setting Kalender-->

                                            <div class="d-flex align-items-center py-2">
                                                <span class="bullet bullet-vertical bg-secondary me-3"></span>Referensi
                                            </div>
                                            <div class="d-flex align-items-center py-2 px-4">
                                                <span class="bullet bg-primary me-3"></span>Setting Kalender
                                            </div>

                                            <!--end::Setting Kalender-->

                                            <!--begin::Setting Frontend-->
                                            {{-- <div class="d-flex align-items-center py-2">
                                                <span class="bullet bg-primary me-3"></span>Setting Frontend
                                            </div> --}}
                                            <!--begin::Setting Frontend-->


                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer flex-wrap pt-0">

                            {{-- <button type="button" class="btn btn-light btn-active-light-primary my-1 me-2"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_update_role"
                                onclick="editDialog({{ $loop->index }})">Edit
                                Role</button> --}}
                            {{-- Versi Modal --}}
                            {{-- <a href="javascript:void(0)" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_update_role" onclick="editDialog({{ $loop->index }})"
                                class="btn btn-light btn-active-primary my-1 me-2 "> Edit
                                Role</a> --}}
<<<<<<< HEAD
                            @can('role permission.edit')
                                <a href="{{ route('manajemen-ppid.role_permission.edit', $role) }}"
                                    class="btn btn-light btn-active-primary my-1 me-2 "> Edit
                                    Role</a>
                            @endcan
                            @can('role permission.delete')
                                <a href="javascript:void(0)" onclick="deleteDialog({{ $loop->index }})"
                                    class="btn btn-light btn-active-danger my-1 ">Delete
                                    Role</a>
                            @endcan
=======
                            <a href="{{ route('admin.role_permission.edit', $role) }}"
                                class="btn btn-light btn-active-primary my-1 me-2 "> Edit
                                Role</a>
                            <a href="javascript:void(0)" onclick="deleteDialog({{ $loop->index }})"
                                class="btn btn-light btn-active-danger my-1 ">Delete
                                Role</a>
>>>>>>> origin/main
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card-->
                </div>
            @endforeach

            <!--begin::Add new card-->
<<<<<<< HEAD
            @can('role permission.create')
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card h-md-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center">
                            {{-- Versi Modal --}}
                            {{-- <!--begin::Button-->
=======
            <div class="col-md-6">
                <!--begin::Card-->
                <div class="card h-md-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-center">
                        {{-- Versi Modal --}}
                        {{-- <!--begin::Button-->
>>>>>>> origin/main
                        <button type="button" class="btn btn-clear d-flex flex-column flex-center"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                            <!--begin::Illustration-->
                            <img src="{{ asset('template/dist/assets/media/illustrations/sketchy-1/4.png') }}"
                                alt="" class="mw-100 mh-150px mb-7" />
                            <!--end::Illustration-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-3 text-gray-600 text-hover-primary">
                                Add New Role</div>
                            <!--end::Label-->
                        </button>
                        <!--begin::Button--> --}}

<<<<<<< HEAD
                            {{-- Versi Create --}}

                            <a href="{{ route('manajemen-ppid.role_permission.create') }}"
                                class="btn btn-clear d-flex flex-column flex-center">
                                <img src="{{ asset('template/dist/assets/media/illustrations/sketchy-1/4.png') }}"
                                    alt="" class="mw-100 mh-150px mb-7" />
                                <div class="fw-bold fs-3 text-gray-600 text-hover-primary">
                                    Add New Role</div>
                            </a>

                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
            @endcan
=======
                        {{-- Versi Create --}}

                        <a href="{{ route('admin.role_permission.create') }}"
                            class="btn btn-clear d-flex flex-column flex-center">
                            <!--begin::Illustration-->
                            <img src="{{ asset('template/dist/assets/media/illustrations/sketchy-1/4.png') }}"
                                alt="" class="mw-100 mh-150px mb-7" />
                            <!--end::Illustration-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-3 text-gray-600 text-hover-primary">
                                Add New Role</div>
                            <!--end::Label-->
                        </a>
                    </div>
                    <!--begin::Card body-->
                </div>
                <!--begin::Card-->
            </div>
>>>>>>> origin/main
            <!--begin::Add new card-->
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
                                                                    type="checkbox" value="profil singkat ppid.create"
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
                                                                    type="checkbox" value="profil singkat ppid.delete"
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
                                                                    type="checkbox" value="tugas dan fungsi ppid.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="tugas dan fungsi ppid.edit"
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
                                                                    type="checkbox" value="struktur organisasi.create"
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
                                                                    type="checkbox" value="struktur organisasi.delete"
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
                                                                    type="checkbox" value="informasi serta merta.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="informasi serta merta.edit"
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
                                                                    type="checkbox" value="informasi setiap saat.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="informasi setiap saat.edit"
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
                                                                    type="checkbox" value="laporan tahunan pip.create"
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
                                                                    type="checkbox" value="laporan tahunan pip.delete"
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
                                                                    type="checkbox" value="laporan hasil survei.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="laporan hasil survei.edit"
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
                                                                    type="checkbox" value="maklumat pelayanan.create"
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
                                                                    type="checkbox" value="maklumat pelayanan.delete"
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
                                                                    type="checkbox" value="prosedur pelayanan.create"
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
                                                                    type="checkbox" value="prosedur pelayanan.delete"
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
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="manajemen menu.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="manajemen menu.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="manajemen menu.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input addCheck"
                                                                    type="checkbox" value="manajemen menu.delete"
                                                                    name="permissions[]" />
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
                                <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel"
                                    data-bs-dismiss="modal">Discard</button>
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
                        <form id="editForm" class="form" method="POST">
                            @csrf
                            @method('PATCH')
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
                                        name="edit_name" id="editName" />
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
                                                            <input class="form-check-input" type="checkbox"
                                                                id="editSelectAll"
                                                                onclick="selectAllPermissions('.editCheck', 'editSelectAll')"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="dashboard.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="dashboard.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="dashboard.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="data permohonan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="data permohonan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="data permohonan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="data keberatan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="data keberatan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="data keberatan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="profil singkat ppid.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="profil singkat ppid.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="profil singkat ppid.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="tugas dan fungsi ppid.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="struktur organisasi.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="struktur organisasi.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="struktur organisasi.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="visi dan misi.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="visi dan misi.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="visi dan misi.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="kontak.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="kontak.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="kontak.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="peraturan kip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="peraturan kip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="peraturan kip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="rancangan peraturan kip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi secara berkala.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi serta merta.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="informasi setiap saat.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="laporan triwulanan pip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="laporan tahunan pip.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="laporan tahunan pip.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="laporan tahunan pip.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="laporan hasil survei.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="maklumat pelayanan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="maklumat pelayanan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="maklumat pelayanan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox"
                                                                    value="prosedur pelayanan.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="prosedur pelayanan.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="prosedur pelayanan.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="faq.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="faq.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="faq.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="user pemohon.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="user pemohon.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="user pemohon.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="user admin.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="user admin.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="user admin.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="role permission.create"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Create</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="role permission.view"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">View</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input editCheck"
                                                                    type="checkbox" value="role permission.edit"
                                                                    name="permissions[]" />
                                                                <span class="form-check-label">Edit</span>
                                                            </label>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input editCheck"
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
                                    <span class="indicator-label">Update</span>
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

                                    function editDialog(index) {

                                        let app = {{ Js::from($roles) }}
                                        let role = app[index]
                                        document.getElementById('editName').value = role.name
                                        console.log('role', role.permissions)

                                        let formCheck = document.querySelectorAll('.editCheck')
                                        formCheck.forEach(element => {
                                            element.removeAttribute('checked')
                                        });
                                        console.log('formCheck', formCheck)
                                        formCheck.forEach(element => {
                                            console.log('element.value', element.value)
                                            console.log('role.permissions', role.permissions)
                                            let isFound = role.permissions.find((permission) => permission.name === element.value);
                                            if (isFound) {
                                                element.setAttribute('checked', 'checked')
                                            }
                                        });

<<<<<<< HEAD
                                        document.getElementById('editForm').setAttribute('action', 'update/' + role.id)
=======
                                        document.getElementById('editForm').setAttribute('action', 'role_permission/' + role.id)
>>>>>>> origin/main
                                    };

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
<<<<<<< HEAD
                                                    type: "post",
                                                    url: "{{route('manajemen-ppid.role_permission.delete')}}",
                                                    data:{
                                                            "id": role.id
                                                        },
                                                    cache: false,
                                                    success: function(html) {
                                                        window.location.reload();
                                                    }
                                                });
=======
                                                    type: "DELETE",
                                                    url: "/admin/role_permission/" + role.id,
                                                    cache: false,
                                                    success: function(html) {

                                                        window.location.reload();

                                                    }
                                                });

                                                // window.location = '/visimisi'
>>>>>>> origin/main
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

</x-admin.layout>
