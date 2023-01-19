<x-admin.layout>
    @push('head-scripts')
        <style>
            .form-check-custom {
                display: flex;
                align-items: center;
                padding-left: 0;
                margin: 0;
                margin-right: 0px;
            }

            .form-detail-ctm {
                border: 1px;
                padding: 15px;
                border-radius: .4rem;
                color: var(--kt-input-disabled-color);
                font-size: 1.1rem;
                font-weight: 500;
                line-height: 1.5;
                border-color: var(--kt-input-disabled-border-color);
                background-color: var(--kt-input-disabled-bg);
            }

            .jawban-file-st img {
                width: 30%;
                aspect-ratio: 3/2;
                object-fit: contain;
            }
        </style>
    @endpush

    <x-slot:isShowAccordion_layananPPID>
        show
        </x-slot>
        <x-slot:isActiveLink_layananPPID>
            active
            </x-slot>
            <x-slot:isActiveLink_dataKeberatan>
                active
                </x-slot>
                <x-slot:subMenuTitle>
                    Data Keberatan
                    </x-slot>

                    <x-slot:mainMenuTitle>
                        Layanan PPID
                        </x-slot>
                       
                        <h1>Daftar Keberatan </h1>
                        <br>
                           @if ($errors->any())
                            <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
                               
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
                            <div class="card card-flush shadow-sm">
                                <form action="{{ route('admin.linksurvei.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body py-5">


                                        <br>
                                        <div class="mb-10">
                                            <label for="" class="required form-label">Link Survei</label>
                                            @if ($linkSurvei)
                                                @if (auth()->user()->can('data permohonan.edit'))
                                                    <input type="text" name="linkSurvei" class="form-control form-control-solid"
                                                        placeholder="Link Survei" value="{{ $linkSurvei->link }}" />
                                                @else
                                                    <input type="text" readonly name="linkSurvei"
                                                        class="form-control form-control-solid"
                                                        placeholder="Link Survei" value="{{ $linkSurvei->link }}" />
                                                @endif
                                            @else
                                                @if (auth()->user()->can('data permohonan.edit'))
                                                    <input type="text" name="linkSurvei" class="form-control form-control-solid"
                                                        placeholder="Link Survei" value="" />
                                                @else
                                                    <input type="text" readonly name="linkSurvei"
                                                        class="form-control form-control-solid"
                                                        placeholder="Link Survei" value="" />
                                                @endif
                                            @endif <br>

                                        
                                        </div>

                                        @can('data permohonan.create')
                                            <button type="submit" class="btn btn-primary" id="addBannerButton"
                                                onclick="activateLoadingButton('#addBannerButton')"><span class="indicator-label">
                                                    Simpan
                                                </span>
                                                <span class="indicator-progress">
                                                    Mohon Menunggu... <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        @endcan


                                    

                                    </div>
                                </form>
                            </div>
                            <br>
                        <div class="card card-flush shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Keberatan Masuk </h3>
                                <div class="card-toolbar">

                                </div>
                            </div>
                            <div class="card-body py-5">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mb-0">
                                        <label class="form-label">Periode Tanggal Masuk</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage"
                                            id="kt_daterangepicker_tanggalMasuk_keberatanMasuk" value="" />
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <select id="asal_keberatan" class="form-select"
                                            aria-label="Select Asal Keberatan">
                                            <option value="-"> Asal Keberatan</option>
                                            <!-- <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option> -->
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <select id="status_keberatan" class="form-select">
                                            <option value="-"> Status Keberatan</option>
                                            <!-- <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option> -->
                                        </select>
                                    </div>
                                </div>



                                <table id="kt_datatable_dom_positioning_daftarKeberatanMasuk"
                                    class="table table-row-bordered gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Tanggal Masuk</th>
                                            <th>No Registrasi</th>
                                            <th>Nama Pemohon</th>
                                            <th>Sumber</th>
                                            <th>Batas Waktu</th>
                                            <th>Status</th>
                                            @can('data keberatan.create')
                                                <th>Aksi</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    {{-- id="bd-table-keberatan-masuk" --}}
                                    <tbody id="bd-table-keberatan-masuk">
                                        {{-- @foreach ($ppidKeberatan as $keberatan)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $keberatan->created_at }}</td>
                                                <td>{{ $keberatan->ticket_keberatan }}</td>
                                                <td>{{ $keberatan->nama_lengkap }}</td>
                                                <td>{{ $keberatan->jenis_kanal }}</td>
                                                <td>{{ $keberatan->expired_date }}</td>
                                                <td>{{ $keberatan->nama_status }}</td>
                                                <td>
                                                    @if ($keberatan->nama_status == 'Belum Dikonfirmasi')
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-icon btn-primary me-2 confirm-keberatan"
                                                            data-keberatan="{{ $keberatan->id }}"><i
                                                                class="bi bi-check-lg"></i></a>
                                                    @endif
                                                    @if ($keberatan->nama_status == 'Proses')
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-icon btn-success me-2 answer-keberatan mb-2"
                                                            data-keberatan="{{ $keberatan->id }}"><i
                                                                class="bi bi-chat-left-quote fs-4"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <br>
                        <div class="card card-flush shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Keberatan Selesai </h3>
                                <div class="card-toolbar">
                                </div>
                            </div>
                            <div class="card-body py-5">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mb-0">
                                        <label class="form-label">Periode Tanggal Masuk</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage"
                                            id="kt_daterangepicker_tanggalMasuk_keberatanSelesai" value="" />
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <select id="asal-selesai" class="form-select"
                                            aria-label="Select Asal Keberatan">
                                            <option value="-">-- Asal Keberatan --</option>
                                            <!-- <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option> -->
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <select id="status-selesai" class="form-select"
                                            aria-label="Select Asal Keberatan">
                                            <option value="-">-- Status Sengketa --</option>
                                            <option value="true">Sengketa</option>
                                            <option value="false">Tidak Sengketa</option>

                                        </select>
                                    </div>
                                </div>



                                <table id="kt_datatable_dom_positioning_daftarKeberatanSelesai"
                                    class="table table-striped table-row-bordered gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Tanggal Masuk</th>
                                            <th>No Registrasi</th>
                                            <th>Nama Pemohon</th>
                                            <th>
                                                <div>Status</div>
                                                <div>Keberatan</div>
                                            </th>
                                            <th>Jawaban</th>
                                            <th>
                                                <div>Status</div>
                                                <div>Sengketa</div>
                                            </th>
                                            <th>
                                                <div>File</div>
                                                <div>Putusan</div>
                                            </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    {{-- id="bd-table-keberatan-selesai" --}}
                                    <tbody id="bd-table-keberatan-selesai">
                                        {{-- @foreach ($ppidKeberatanSelesai as $keberatanSelesai)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $keberatanSelesai->created_at }}</td>
                                                <td>{{ $keberatanSelesai->ticket_keberatan }}</td>
                                                <td>{{ $keberatanSelesai->nama_lengkap }}</td>
                                                <td>{{ $keberatanSelesai->jenis_kanal }}</td>
                                                <td>{{ $keberatanSelesai->expired_date }}</td>
                                                <td>{{ $keberatanSelesai->nama_status }}</td>

                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- modal konfirmasi -->
                        <div class="modal fade" id="exampleModalCenter" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content" id="content-modal-keberatan">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Data Keberatan
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Perihal Keberatan</label>
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5" id="perihal-keberatan">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-4" hidden>
                                                        <label class="form-label">Kategori Keberatan</label>
                                                        <input type="text" id="kategori-keberatan"
                                                            class="form-control" disabled />
                                                    </div>

                                                    <div class="form-group mt-4">
                                                        <label class="form-label">File Identitas</label>
                                                        <p><a href="javascript:void(0)"
                                                                id="file-identitas-modalkonfirmasi" target="_blank"
                                                                rel="noopener noreferrer">Klik untuk melihat!</a></p>
                                                    </div>
                                                    <div class="form-group mt-8">
                                                        <div class="d-flex">

                                                            <div class="form-check form-check-custom me-10">
                                                                <input class="form-check-input proses-konfirmasi"
                                                                    type="radio" value="proses"
                                                                    id="proses-keberatan" name="konfirmasi-radio">
                                                                <label class="form-check-label"
                                                                    for="proses-keberatan">Proses</label>
                                                            </div>

                                                            {{-- <div class="form-check form-check-custom">
                                                                <input class="form-check-input proses-konfirmasi"
                                                                    type="radio" value="tolak"
                                                                    id="tolak-permohonan" name="konfirmasi-radio">
                                                                <label class="form-check-label"
                                                                    for="tolak-permohonan">Ditolak</label>
                                                            </div> --}}

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" hidden id="confirm-tiket-permohonan">

                                                    <div class="form-group">
                                                        <label class="form-label">Permohonan yang diminta</label>
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5" id="informasi-diminta">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Nomor Registrasi</label>
                                                        <input type="text" id="tiket-permohonan"
                                                            class="form-control" disabled />
                                                    </div>
                                                    <!-- <div class="form-group mt-4" id="modal-file-identitas">
                                                             </div> -->


                                                    <div class="form-group mt-4">
                                                        <select style="display: none" id="alasan_penolakan"
                                                            class="form-select" aria-label="Select Alasan Penolakan">
                                                            <option value="-">-- Alasan Penolakan --</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"
                                            id="save-konfirmasi-keberatan">Konfirmasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal answer -->
                        <div class="modal fade" id="modalAnswer" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content" id="content-modal-answer">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Data Keberatan
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-data">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">File Identitas</label>
                                                        <p><a href="javascript:void(0)"
                                                                id="file-identitas-modalanswer" target="_blank"
                                                                rel="noopener noreferrer">Click to open!</a></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Perihal Keberatan</label>
                                                        <!-- <textarea class="form-control tox-target" id="area-informasi-diminta-answer" placeholder="Informasi yang diminta"></textarea> -->
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5" id="perihal-keberatan-answer">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" hidden id="answer-tiket-permohonan">

                                                    <div class="form-group">
                                                        <label class="form-label">Permohonan yang diminta</label>
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5" id="informasi-diminta-answer">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Nomor Registrasi</label>
                                                        <input type="text" id="tiket-permohonan-answer"
                                                            class="form-control" disabled />
                                                    </div>




                                                </div>
                                                <div class="col-12 mt-4">
                                                    <textarea class="form-control tox-target" id="area-answer"></textarea>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Data Dukung Jawaban</label>
                                                        <input type="file" id="file_dukung_answer"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"
                                            id="save-answer">KIRIM</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- modal detail -->
                        <div class="modal fade" id="modalDetail" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content" id="content-modal-detail">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Data Keberatan
                                        </h5>
                                    </div>
                                    <div class="modal-body" id="data-cetak-field">
                                        <div class="form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 style="text-align: center">Data Pemohon</h4>
                                                    <div class="form-group mt-4 mb-4">
                                                        <label class="form-label">Tanggal Masuk</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-tanggal-masuk" disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Nomor Registrasi</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-noregistrasi" disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Nama Pemohon</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-nama-pemohon" disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Jenis Pemohon</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-jenis-pemohon" disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Identitas</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-identitas" disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Nomor Identitas</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-nomor-identitas" disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" id="detail-alamat"
                                                            disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Pekerjaan</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-pekerjaan" disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" class="form-control" id="detail-email"
                                                            disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <input type="text" class="form-control" id="detail-status"
                                                            disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 style="text-align: center">Data Keberatan</h4>
                                                    <div class="form-group mt-4 mb-4">
                                                        <label class="form-label">Perihal Keberatan</label>
                                                        <div id="perihal-keberatan-detail-notiny"
                                                            class="form-detail-ctm">-</div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Kategori Keberatan</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-kategori-keberatan-info" disabled>
                                                    </div>
                                                    <div class="form-group mb-4"
                                                        id="detail-permohonan-sebelumnya-form">
                                                        <label class="form-label">Permohonan Sebelumnya</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-permohonan-sebelumnya-info" disabled>
                                                    </div>
                                                    <div class="form-group" id="file-identitas-detail"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        {{-- <button type="button" class="btn btn-primary"
                                            id="cetak-permohonan">CETAK</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal konfirmasi Sengketa -->
                        <div class="modal fade" id="modalKonfirmasiSengketa" role="dialog" aria-hidden="true">

                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

                                <div class="modal-content" id="content-modal-keberatan">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Sengketa
                                        </h5>
                                    </div>

                                    <div class="modal-body">
                                        <form id="sengketaKonfirmasi" action="" enctype="multipart/form-data"
                                            enctype="multipart/form-data" method="POST" class="form">
                                            @csrf
                                            <div class="form-data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">File Putusan</label>
                                                            <input type="file" name="file"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="File PDF" value="" />

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Konfirmasi
                                                    Sengketa</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                </form>
                            </div>

                        </div>

                        <!-- modal upload Putusan -->
                        <div class="modal fade" id="modalUploadPutusan" role="dialog" aria-hidden="true">

                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

                                <div class="modal-content" id="content-modal-keberatan">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Upload File Putusan
                                        </h5>
                                    </div>

                                    <div class="modal-body">
                                        <form id="uploadFilePutusan" action="" enctype="multipart/form-data"
                                            enctype="multipart/form-data" method="POST" class="form">
                                            @csrf
                                            <div class="form-data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label required">File Putusan </label>
                                                            <input type="file" name="file"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="File PDF" value="" />

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    id="uploadPutusanButton"
                                                    onclick="activateLoadingButton('#uploadPutusanButton')"><span
                                                        class="indicator-label">
                                                        Upload Putusan
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Mohon Menunggu... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                </form>
                            </div>

                        </div>

                        <input type="hidden" id="id-keberatan-edited">


                        @push('child-scripts')
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"
                                integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw=="
                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                            <!-- <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
                            <script src="{{ asset('template/dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
                            <script>
                                $(document).ready(function() {
                                    $("body").tooltip({
                                        selector: '[rel="tooltip"]'
                                    });
                                    var tableKeberatanUI = new KTBlockUI(document.getElementById('bd-table-keberatan-masuk'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });
                                    var tableSelesaiUI = new KTBlockUI(document.getElementById('bd-table-keberatan-selesai'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });
                                    var modalKeberatan = new KTBlockUI(document.getElementById('content-modal-keberatan'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });
                                    var modalAnswer = new KTBlockUI(document.getElementById('content-modal-answer'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });



                                    var modalDetail = new KTBlockUI(document.getElementById('content-modal-detail'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
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

                                    async function loadDataPermintaanMasuk() {
                                        tableKeberatanUI.block()
                                        await ppidDataKeberatanMasuk()
                                        tableKeberatanUI.release()
                                    }

                                    async function loadDataPermintaanSelesai() {
                                        tableSelesaiUI.block()
                                        await ppidDataKeberatanSelesai()
                                        tableSelesaiUI.release()
                                    }


                                    const getDataKeberatanMasuk = (asal, status, date) => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: `/admin/ppid-data-keberatan?asal=${asal}&status=${status}&datestart=${date != null ? `${date.start}` : '-'}&dateend=${date != null ? `${date.end}` : '-'}`,
                                            dataType: 'json'
                                        });
                                    }

                                    const getDataKeberatanSelesai = (asal, status, date) => {
                                        return $.ajax({
                                            type: 'GET',
                                            // url: `/admin/ppid-data-permohonan-selesai?asal=${asal}&status=${status}`,
                                            url: `/admin/ppid-data-keberatan-selesai?asal=${asal}&status=${status}&datestart=${date != null ? `${date.start}` : '-'}&dateend=${date != null ? `${date.end}` : '-'}`,
                                            dataType: 'json'
                                        });
                                    }
                                    const jadwalKerja = () => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: "/jadwal-kerja",
                                            dataType: 'json'
                                        })
                                    }

                                    async function ppidDataKeberatanMasuk(asal = '-', status = '-', date = null) {
                                        try {

                                            if (jadwal == null) {
                                                jadwal = await jadwalKerja()
                                                jadwal = jadwal.result.data
                                            }
                                            const result = await getDataKeberatanMasuk(asal, status, date)
                                            const data = result.result

                                            let rowData = []
                                            for (let i = 0; i < data.length; i++) {
                                                let btnAction = ''
                                                let ticketAction = ''

                                                if (data[i].id_status == 1) {
                                                    btnAction =
                                                        `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Konfirmasi" href="javascript:void(0)" class="btn btn-icon btn-primary me-2 confirm-keberatan" data-keberatan="${data[i].id}"><i class="bi bi-check-lg"></i></a>`
                                                    ticketAction = data[i].ticket_keberatan
                                                } else {
                                                    btnAction = `
                            <a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Jawab" href="javascript:void(0)" class="btn btn-icon btn-success me-2 answer-keberatan mb-2" data-keberatan="${data[i].id}"><i class="bi bi-chat-left-quote fs-4"></i></a>
                            
                            `
                                                    ticketAction =
                                                        `<a href="javascript:void(0)" class="detail-keberatan" data-keberatan="${data[i].id}">${data[i].ticket_keberatan}</a>`
                                                }
                                                let expiredDate = data[i].expired_date
                                                if (expiredDate && (data[i].id_status == 2 || data[i].id_status == 3)) {
                                                    var start = moment().startOf('day');
                                                    var end = moment(expiredDate, "YYYY-MM-DD");

                                                    // console.log(start.format("YYYY-MM-DD"), end.format("YYYY-MM-DD"))
                                                    // yovi
                                                    //Difference in number of days  
                                                    let diff = moment.duration(end.diff(start)).asDays()
                                                    const hariLibur = jadwal.filter(jd => (jd.tanggal >= start.format("YYYY-MM-DD") &&
                                                        jd.tanggal <= end.format("YYYY-MM-DD")) && jd.jenis == '1')
                                                    expiredDate = diff >= 0 ? `Batas ${diff - hariLibur.length + 1} Hari Kerja` :
                                                        `Lewat Batas ${diff - hariLibur.length + 1} Hari Kerja`;
                                                } else {
                                                    expiredDate = '-- Selesai --'
                                                }


                                                rowData.push([
                                                    i + 1,
                                                    data[i].created_at.split(' ')[0].split('-').reverse().join('-'),
                                                    ticketAction,
                                                    data[i].nama_lengkap,
                                                    data[i].jenis_kanal,
                                                    data[i].id_status == '1' ? '-' : expiredDate,
                                                    data[i].nama_status,
                                                    btnAction
                                                ])
                                            }

                                            tableKeberatanMasuk.clear().rows.add(rowData).draw()
                                        } catch (error) {
                                            console.log(error)
                                        }
                                    }

                                    async function ppidDataKeberatanSelesai(asal = '-', status = '-', date = null) {
                                        try {
                                            const result = await getDataKeberatanSelesai(asal, status, date)
                                            const data = result.result
                                            let rowData = []
                                            for (let i = 0; i < data.length; i++) {
                                                let btnAction = ''
                                                let ticketAction = ''
                                                console.log(data[i])
                                                if (data[i].id_status == 1) {
                                                    btnAction =
                                                        `<a href="javascript:void(0)" class="btn btn-icon btn-primary me-2 confirm-keberatan" data-keberatan="${data[i].id}"><i class="bi bi-check-lg"></i></a>`
                                                    ticketAction = data[i].ticket_keberatan
                                                } else {
                                                    btnAction = `
                            <a href="javascript:void(0)" class="btn btn-icon btn-success me-2 answer-keberatan mb-2" data-keberatan="${data[i].id}"><i class="bi bi-chat-left-quote fs-4"></i></a>
                            <a href="javascript:void(0)" class="btn btn-icon btn-danger forward-keberatan" data-keberatan="${data[i].id}"><i
                                    class="bi bi bi-forward fs-4 "></i></a>
                            `
                                                    ticketAction =
                                                        `<a href="javascript:void(0)" class="detail-keberatan" data-keberatan="${data[i].id}">${data[i].ticket_keberatan}</a>`
                                                }

                                                let jawaban = '-'
                                                if (data[i].id_status == 3) {
                                                    jawaban = `
                                <a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top"  class="mb-4 jawban-file-st" title="File Jawaban" href="{{ asset('storage/${data[i].ket_jawaban_path}') }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('template/src/media/svg/files/pdf.svg') }}" alt="" /></a> 
                                ${data[i].file_jawaban ? `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="jawban-file-st" title="File Pendukung" href="{{ asset('storage/${data[i].file_jawaban}') }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('template/src/media/svg/files/dark/folder-document.svg') }}" alt="" /></a>` : '' }
                            `
                                                }

                                                //file putusan
                                                let file_putusan = '-'
                                                if (data[i].file_putusan) {
                                                    file_putusan =
                                                        `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top"  class="mb-4 jawban-file-st" title="File Putusan" href="{{ asset('storage/${data[i].file_putusan}') }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('template/src/media/svg/files/pdf.svg') }}" alt="" /></a>`
                                                }
                                                //aksi
                                                let aksi =
                                                    `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Sengketa" href="javascript:void(0)" class="btn btn-icon btn-primary me-2 sengketa-keberatan mb-2" data-sengketa="${data[i].id}"><i class="fa-solid fa-scale-balanced fs-4"></i></a>`


                                                //sengeketa
                                                let sengketa =
                                                    `<span class="badge py-3 px-4 fs-7 badge-light-success">Tidak Sengketa</span>`
                                                if (data[i].isSengketa) {
                                                    sengketa =
                                                        `<span class="badge py-3 px-4 fs-7 badge-light-primary">Sengketa</span>`
                                                    aksi =
                                                        `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Upload File Putusan" href="javascript:void(0)" class="btn btn-icon btn-success me-2 putusan-keberatan mb-2" data-putusan="${data[i].id}"><i class="fa-solid fa fa-upload fs-4"></i></a>`
                                                }
                                                rowData.push([
                                                    i + 1,
                                                    data[i].created_at.split(' ')[0].split('-').reverse().join('-'),
                                                    ticketAction,
                                                    data[i].nama_lengkap,
                                                    data[i].nama_status,
                                                    jawaban,
                                                    sengketa,
                                                    file_putusan,
                                                    aksi,
                                                ])
                                            }

                                            tableKeberatanSelesai.clear().rows.add(rowData).draw()
                                        } catch (error) {
                                            console.log(error)
                                        }
                                    }

                                    var tableKeberatanMasuk = $("#kt_datatable_dom_positioning_daftarKeberatanMasuk").DataTable({
                                        "language": {
                                            "lengthMenu": "Show _MENU_",
                                        },
                                        "dom": "<'row'" +
                                            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                                            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" + ">" +
                                            "<'table-responsive'tr>" +
                                            "<'row'" +
                                            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                                            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                                            ">",
                                        initComplete: function() {
                                            loadDataPermintaanMasuk()
                                        },
                                        "createdRow": function(row, data, dataIndex) {
                                            console.log('row', row)
                                            console.log('data', data)
                                            console.log('dataIndex', dataIndex)
                                            if (data[5] != null && data[5] != '-' && data[5] != '') {
                                                const now = new Date().toJSON().slice(0, 10).replace(/-/g, '-').toString()
                                                if (now > data[5]) {
                                                    $(row).addClass("bg-light-danger text-danger");
                                                }
                                                // $(row).addClass("warning");
                                            }
                                        },
                                    });

                                    var tableKeberatanSelesai = $("#kt_datatable_dom_positioning_daftarKeberatanSelesai").DataTable({
                                        "language": {
                                            "lengthMenu": "Show _MENU_",
                                        },
                                        "dom": "<'row'" +
                                            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                                            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" + ">" +
                                            "<'table-responsive'tr>" +
                                            "<'row'" +
                                            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                                            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                                            ">",
                                        initComplete: function() {
                                            loadDataPermintaanSelesai()
                                        }
                                    });

                                    $("#kt_daterangepicker_tanggalMasuk_keberatanMasuk").daterangepicker({
                                        autoUpdateInput: false,
                                        timePicker: false,
                                        locale: {
                                            format: "DD/MM/Y",
                                            cancelLabel: 'Clear'
                                        }
                                    }, function(start, end, label) {
                                        const filterDate = {
                                            'start': start.format('YYYY-MM-DD'),
                                            'end': end.format('YYYY-MM-DD')
                                        }
                                        // triger filter
                                        const asalKeberatan = $("#asal_keberatan").val()
                                        const statusKeberatan = $("#status_keberatan").val()
                                        loadDataPermintaanMasukByFilter(asalKeberatan, statusKeberatan, filterDate)
                                    });

                                    $("#kt_daterangepicker_tanggalMasuk_keberatanMasuk").val('')

                                    $('input[id="kt_daterangepicker_tanggalMasuk_keberatanMasuk"]').on('apply.daterangepicker', function(
                                        ev, picker) {
                                        $(this).val(picker.startDate.format('DD/MM/Y') + ' - ' + picker.endDate.format('DD/MM/Y'));
                                    });

                                    $('input[id="kt_daterangepicker_tanggalMasuk_keberatanMasuk"]').on('cancel.daterangepicker', function(
                                        ev, picker) {
                                        $(this).val('');
                                        // trigger filter
                                        const asalKeberatan = $("#asal_keberatan").val()
                                        const statusKeberatan = $("#status_keberatan").val()
                                        loadDataPermintaanMasukByFilter(asalKeberatan, statusKeberatan)
                                    });

                                    $("#kt_daterangepicker_tanggalMasuk_keberatanSelesai").daterangepicker({
                                        autoUpdateInput: false,
                                        timePicker: false,
                                        locale: {
                                            format: "DD/MM/Y",
                                            cancelLabel: 'Clear'
                                        }
                                    }, function(start, end, label) {
                                        const filterDate = {
                                            'start': start.format('YYYY-MM-DD'),
                                            'end': end.format('YYYY-MM-DD')
                                        }
                                        // triger filter
                                        const asalKeberatan = $("#asal-selesai").val()
                                        const statusKeberatan = $("#status-selesai").val()
                                        loadDataPermintaanSelesaiByFilter(asalKeberatan, statusKeberatan, filterDate)
                                    });

                                    $("#kt_daterangepicker_tanggalMasuk_keberatanSelesai").val('')

                                    $('input[id="kt_daterangepicker_tanggalMasuk_keberatanSelesai"]').on('apply.daterangepicker', function(
                                        ev, picker) {
                                        console.log('here')
                                        $(this).val(picker.startDate.format('DD/MM/Y') + ' - ' + picker.endDate.format('DD/MM/Y'));
                                    });

                                    $('input[id="kt_daterangepicker_tanggalMasuk_keberatanSelesai"]').on('cancel.daterangepicker',
                                        function(ev, picker) {
                                            $(this).val('');
                                            // trigger filter
                                            const asalKeberatan = $("#asal-selesai").val()
                                            const statusKeberatan = $("#status-selesai").val()
                                            loadDataPermintaanSelesaiByFilter(asalKeberatan, statusKeberatan)
                                        });

                                    const getJenisPemohon = () => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: "/ppid-jenis-pemohon",
                                            dataType: 'json'
                                        });
                                    }

                                    async function jenisPemohon() {
                                        try {
                                            const result = await getJenisPemohon()
                                            let option = '<option value="-">-- Asal Keberatan --</option>'
                                            for (let i = 0; i < result.result.length; i++) {
                                                option += `<option value="${result.result[i].id}">${result.result[i].name}</option>`
                                            }
                                            $("#asal_permohonan").html(option)
                                            $("#asal-selesai").html(option)
                                            // console.log(result)
                                        } catch (error) {
                                            console.log(error)
                                        }
                                    }

                                    jenisPemohon()

                                    const getStatusKeberatan = () => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: '/ppid-status-keberatan',
                                            dataType: 'json'
                                        })
                                    }

                                    async function statusKeberatan() {
                                        try {
                                            const result = await getStatusKeberatan()
                                            let dataOptionBelumSelesai = result.result.filter(data => [1, 2].includes(data.id))
                                            let option = '<option value="-">-- Status Keberatan --</option>'
                                            for (let i = 0; i < dataOptionBelumSelesai.length; i++) {
                                                option +=
                                                    `<option value="${dataOptionBelumSelesai[i].id}">${dataOptionBelumSelesai[i].status}</option>`
                                            }
                                            $("#status_keberatan").html(option)

                                            // let dataOptionSelesai = result.result.filter(data => [3].includes(data.id))
                                            // let optionSelesai = '<option value="-">-- Status Keberatan --</option>'
                                            // for (let i = 0; i < dataOptionSelesai.length; i++) {
                                            //     optionSelesai +=
                                            //         `<option value="${dataOptionSelesai[i].id}">${dataOptionSelesai[i].status}</option>`
                                            // }
                                            // $("#status-selesai").html(optionSelesai)
                                        } catch (error) {
                                            console.log(error)
                                        }
                                    }

                                    statusKeberatan()

                                    // let configAreaInformasiDiminta = {selector: "#area-informasi-diminta", height : "300"};
                                    // let configAreaTujuanPenggunaan = {selector: "#area-tujuan-penggunaan", height : "300"};
                                    // let configAreaTujuanPenggunaanAnswer = {selector: "#area-tujuan-penggunaan-answer", height : "300"};
                                    // let configAreaInformasiDimintaAnswer = {selector: "#area-informasi-diminta-answer", height : "300"};
                                    let configAreaAnswer = {
                                        selector: "#area-answer",
                                        height: "300"
                                    };
                                    // let configAreaTujuanPenggunaanForward = {selector: "#area-tujuan-penggunaan-forward", height : "300"};
                                    // let configAreaInformasiDimintaForward = {selector: "#area-informasi-diminta-forward", height : "300"};
                                    let configAreaForward = {
                                        selector: "#area-forward",
                                        height: "300"
                                    };
                                    // tinymce.init(configAreaInformasiDiminta);
                                    // tinymce.init(configAreaTujuanPenggunaan);
                                    // tinymce.init(configAreaInformasiDimintaAnswer);
                                    // tinymce.init(configAreaTujuanPenggunaanAnswer);
                                    tinymce.init(configAreaAnswer);
                                    // tinymce.init(configAreaInformasiDimintaForward);
                                    // tinymce.init(configAreaTujuanPenggunaanForward);
                                    tinymce.init(configAreaForward);


                                    $(document).on('click', '.confirm-keberatan', function() {
                                        const idKeberatan = $(this).data('keberatan')
                                        $("#exampleModalCenter").modal('show')
                                        loadModalKeberatan(idKeberatan)
                                    })

                                    const ppidKeberatanUser = (id) => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: "/ppid-data-keberatan-spec/" + id,
                                            dataType: 'json'
                                        })
                                    }

                                    async function loadModalKeberatan(data) {
                                        modalKeberatan.block()

                                        const dataKeberatan = await ppidKeberatanUser(data)
                                        $("#id-keberatan-edited").val(data)
                                        $("#perihal-keberatan").html(dataKeberatan.result.perihal_keberatan)


                                        $("#file-identitas-modalkonfirmasi").prop('href',
                                            `{{ asset('storage/${dataKeberatan.result.identitas_file_path}') }}`)
                                        $("#kategori-keberatan").val(dataKeberatan.result.jenis_keberatan)
                                        console.log('dataKeberatan', dataKeberatan.result.id_kategori_keberatan)
                                        if (dataKeberatan.result.id_kategori_keberatan == 3 || dataKeberatan.result
                                            .id_kategori_keberatan == 4 || dataKeberatan.result.id_kategori_keberatan == 5) {
                                            document.getElementById('confirm-tiket-permohonan').hidden = false
                                            $("#tiket-permohonan").val(dataKeberatan.result.ticket_permohonan)
                                            $("#informasi-diminta").html(dataKeberatan.result.informasi_diminta)
                                        }

                                        // $("#modal-file-identitas").html(`
            //     <label class="form-label">File identitas</label>
            //     <img style="max-width:100%;max-height:100%;" id="file-identitas" src="{{ asset('${dataPermohonan.result.file_identitas}') }}" alt="" srcset="">
            // `)
                                        $('.proses-konfirmasi').prop('checked', false)
                                        $("#alasan_penolakan").hide()
                                        modalKeberatan.release()
                                    }

                                    async function loadModalSengketa(data) {
                                        modalKeberatan.block()

                                        document.getElementById('sengketaKonfirmasi').setAttribute('action',
                                            'konfirmasi-sengketa/' +
                                            data)



                                        modalKeberatan.release()
                                    }

                                    async function loadModalPutusan(data) {
                                        modalKeberatan.block()

                                        document.getElementById('uploadFilePutusan').setAttribute('action',
                                            'upload-putusan/' +
                                            data)



                                        modalKeberatan.release()
                                    }

                                    const templateReject = () => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: "/admin/ppid-template-reject",
                                            dataType: 'json'
                                        })
                                    }

                                    let templateRejectData = null,
                                        optionRejectData = '';

                                    $(document).on('change', '.proses-konfirmasi', async function() {
                                        const statusKonfirmasi = $(this).val()
                                        if (statusKonfirmasi == 'tolak') {
                                            modalKeberatan.block()
                                            if (templateRejectData == null) {
                                                const result = await templateReject()
                                                templateRejectData = result.result
                                            }

                                            if (optionRejectData == '') {
                                                optionRejectData = '<option value="-">-- Alasan Penolakan --</option>'
                                                for (let i = 0; i < templateRejectData.length; i++) {
                                                    optionRejectData +=
                                                        `<option value="${templateRejectData[i].id}">${templateRejectData[i].name}</option>`
                                                }
                                            }

                                            $("#alasan_penolakan").html(optionRejectData)
                                            $("#alasan_penolakan").show()
                                            modalKeberatan.release()
                                            return
                                        }

                                        $("#alasan_penolakan").hide()
                                    })

                                    const submitKonfirmasiKeberatan = (data) => {
                                        return $.ajax({
                                            type: 'POST',
                                            url: "/admin/konfirmasi-data-keberatan",
                                            data: data,
                                            dataType: 'json'
                                        })
                                    }



                                    var jadwal = null
                                    $(document).on('click', '#save-konfirmasi-keberatan', async function() {
                                        const statusKonfirmasi = $('input[name="konfirmasi-radio"]:checked').val()
                                        if (statusKonfirmasi == undefined) {
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Error',
                                                html: 'Isian tidak terisi lengkap!'
                                            })
                                            return
                                        }

                                        console.log(`status konfirmasi ${statusKonfirmasi}`)

                                        try {
                                            const data = {
                                                '_token': "{{ csrf_token() }}",
                                                'statusKonfirmasi': statusKonfirmasi,
                                                'id': $("#id-keberatan-edited").val(),
                                                'expired': '-',

                                            }

                                            modalKeberatan.block()

                                            if (statusKonfirmasi == 'proses') {
                                                if (jadwal == null) {
                                                    jadwal = await jadwalKerja()
                                                    jadwal = jadwal.result.data
                                                }
                                                console.log(jadwal)
                                                const hariKerja = jadwal.filter(jd => jd.tanggal > new Date().toJSON()
                                                    .slice(0,
                                                        10).replace(/-/g, '-') && jd.jenis == '0')

                                                data['expired'] = hariKerja[28];
                                                console.log('hariKerja', hariKerja)
                                            }

                                            console.log(`data ${data['expired']}`)
                                            const result = await submitKonfirmasiKeberatan(data)
                                            modalKeberatan.release()
                                            $("#exampleModalCenter").modal('hide')
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Sukses',
                                                html: result.result
                                            })
                                            loadDataPermintaanMasuk()
                                            loadDataPermintaanSelesai()
                                            window.location.reload();
                                        } catch (error) {
                                            modalKeberatan.release()
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                html: 'Something went wrong!'
                                            })
                                            console.log(error)
                                        }
                                    })



                                    $(document).on('click', '.sengketa-keberatan', function() {
                                        const idKeberatan = $(this).data('sengketa');
                                        $("#modalKonfirmasiSengketa").modal('show')
                                        loadModalSengketa(idKeberatan)
                                    })

                                    $(document).on('click', '.putusan-keberatan', function() {
                                        const idKeberatan = $(this).data('putusan');
                                        $("#modalUploadPutusan").modal('show')
                                        loadModalPutusan(idKeberatan)
                                    })


                                    $(document).on('click', '.answer-keberatan', function() {
                                        const idKeberatan = $(this).data('keberatan');
                                        $("#modalAnswer").modal('show')
                                        loadModalAnswer(idKeberatan)
                                    })

                                    async function loadModalAnswer(data) {
                                        modalAnswer.block()
                                        const dataKeberatan = await ppidKeberatanUser(data)
                                        $("#id-keberatan-edited").val(data)
                                        $("#file-identitas-modalanswer").prop('href',
                                            `{{ asset('storage/${dataKeberatan.result.identitas_file_path}') }}`)
                                        // tinymce.get("area-informasi-diminta-answer").setContent(dataKeberatan.result.informasi_diminta)
                                        // tinymce.get("area-informasi-diminta-answer").getBody().setAttribute('contenteditable', false)
                                        $("#perihal-keberatan-answer").html(dataKeberatan.result.perihal_keberatan)
                                        // tinymce.get("area-tujuan-penggunaan-answer").setContent(dataKeberatan.result.tujuan_informasi)
                                        // tinymce.get("area-tujuan-penggunaan-answer").getBody().setAttribute('contenteditable', false)
                                        if (dataKeberatan.result.id_kategori_keberatan == 3 || dataKeberatan.result
                                            .id_kategori_keberatan == 4 || dataKeberatan.result.id_kategori_keberatan == 5) {
                                            document.getElementById('answer-tiket-permohonan').hidden = false
                                            $("#tiket-permohonan-answer").val(dataKeberatan.result.ticket_permohonan)
                                            $("#informasi-diminta-answer").html(dataKeberatan.result.informasi_diminta)
                                        }


                                        tinymce.get("area-answer").setContent('')
                                        $("#file_dukung_answer").val(null)
                                        modalAnswer.release()
                                    }

                                    const submitAnswer = (data) => {
                                        return $.ajax({
                                            type: 'POST',
                                            url: "/admin/submit-answer-keberatan",
                                            data: data,
                                            contentType: false,
                                            processData: false,
                                            dataType: 'json'
                                        })
                                    }

                                    $(document).on('click', '#save-answer', async function() {
                                        let fileDukung = $("#file_dukung_answer")[0].files
                                        let fd = new FormData()
                                        if (fileDukung.length > 0) {
                                            fd.append('file_dukung', fileDukung[0])
                                        } else {
                                            fd.append('file_dukung', '')
                                        }
                                        fd.append('_token', "{{ csrf_token() }}")
                                        fd.append('id', $("#id-keberatan-edited").val())
                                        fd.append('answer', tinymce.get("area-answer").getContent())


                                        if (fd.get('answer') == '') {
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Error',
                                                html: 'Isian tidak terisi lengkap!'
                                            })
                                            return
                                        }

                                        try {
                                            modalAnswer.block()
                                            const result = await submitAnswer(fd)
                                            modalAnswer.release()
                                            $("#modalAnswer").modal('hide')
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Sukses',
                                                html: result.result
                                            })
                                            loadDataPermintaanMasuk()
                                            loadDataPermintaanSelesai()
                                            window.location.reload();
                                        } catch (error) {
                                            modalAnswer.release()
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                html: 'Something went wrong!'
                                            })
                                            console.log(error)
                                        }


                                    })



                                    const getUserPenghubung = (data) => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: "/admin/users-penghubung",
                                            dataType: 'json'
                                        })
                                    }







                                    $(document).on('click', '.detail-keberatan', function() {
                                        const idKeberatan = $(this).data('keberatan');
                                        $("#modalDetail").modal('show')
                                        loadModalDetail(idKeberatan)
                                    })

                                    const ppidPendaftar = (data) => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: "/admin/ppid-pendaftar/" + data,
                                            dataType: 'json'
                                        })
                                    }

                                    async function loadModalDetail(data) {
                                        modalDetail.block()
                                        const dataKeberatan = await ppidKeberatanUser(data)
                                        const dataPemohon = await ppidPendaftar(dataKeberatan.result.id_ppid_pendaftar)
                                        console.log('detail', dataKeberatan)
                                        $("#id-keberatan-edited").val(data)

                                        $("#perihal-keberatan-detail-notiny").html(dataKeberatan.result.perihal_keberatan)

                                        $("#detail-kategori-keberatan-info").val(dataKeberatan.result.jenis_keberatan)
                                        $("#detail-permohonan-sebelumnya-info").val(dataKeberatan.result.ticket_permohonan)
                                        if (dataKeberatan.result.ticket_permohonan == null) {
                                            document.getElementById('detail-permohonan-sebelumnya-form').hidden = true
                                        }

                                        $("#detail-tanggal-masuk").val(dataPemohon.result.created_at)
                                        $("#detail-noregistrasi").val(dataKeberatan.result.ticket_keberatan)
                                        $("#detail-nama-pemohon").val(dataPemohon.result.nama_lengkap)
                                        $("#detail-jenis-pemohon").val(dataPemohon.result.nama_jenis_pemohon)
                                        $("#detail-identitas").val(dataPemohon.result.nama_jenis_identitas)
                                        $("#detail-nomor-identitas").val(dataPemohon.result.nomor_identitas)
                                        $("#detail-alamat").val(dataPemohon.result.alamat)
                                        $("#detail-pekerjaan").val(dataPemohon.result.pekerjaan)
                                        $("#detail-email").val(dataPemohon.result.email)
                                        $("#detail-status").val(dataKeberatan.result.nama_status_keberatan)
                                        console.log(dataKeberatan.result)
                                        $("#file-identitas-detail").html(`
                                                <label class="form-label">File identitas</label>
                                                <img style="max-width:100%;max-height:100%;" id="file-identitas" src="{{ asset('storage/${dataKeberatan.result.identitas_file_path}') }}" alt="" srcset="">
                                            `)

                                        modalDetail.release()
                                    }

                                    async function loadDataPermintaanMasukByFilter(asal, status, date = null) {
                                        tableKeberatanUI.block()
                                        await ppidDataKeberatanMasuk(asal, status, date)
                                        tableKeberatanUI.release()
                                    }

                                    async function loadDataPermintaanSelesaiByFilter(asal, status, date = null) {
                                        tableSelesaiUI.block()
                                        await ppidDataKeberatanSelesai(asal, status, date)
                                        tableSelesaiUI.release()
                                    }

                                    $("#asal_keberatan").on('change', function() {
                                        const dateSelected = $("#kt_daterangepicker_tanggalMasuk_keberatanMasuk").val()
                                        let filterDate = null
                                        if (dateSelected != '') {
                                            filterDate = {
                                                'start': $("#kt_daterangepicker_tanggalMasuk_keberatanMasuk").data(
                                                    'daterangepicker').startDate.format('YYYY-MM-DD'),
                                                'end': $("#kt_daterangepicker_tanggalMasuk_keberatanMasuk").data(
                                                    'daterangepicker').endDate.format('YYYY-MM-DD')
                                            }
                                        }
                                        const asalKeberatan = $(this).val()
                                        const statusKeberatan = $("#status_keberatan").val()
                                        loadDataPermintaanMasukByFilter(asalKeberatan, statusKeberatan, filterDate)
                                    })

                                    $("#status_keberatan").on('change', function() {
                                        const dateSelected = $("#kt_daterangepicker_tanggalMasuk_keberatanMasuk").val()
                                        let filterDate = null
                                        if (dateSelected != '') {
                                            filterDate = {
                                                'start': $("#kt_daterangepicker_tanggalMasuk_keberatanMasuk").data(
                                                    'daterangepicker').startDate.format('YYYY-MM-DD'),
                                                'end': $("#kt_daterangepicker_tanggalMasuk_keberatanMasuk").data(
                                                    'daterangepicker').endDate.format('YYYY-MM-DD')
                                            }
                                        }
                                        const statusKeberatan = $(this).val()
                                        const asalKeberatan = $("#asal_keberatan").val()
                                        loadDataPermintaanMasukByFilter(asalKeberatan, statusKeberatan, filterDate)
                                    })

                                    $("#asal-selesai").on('change', function() {
                                        const dateSelected = $("#kt_daterangepicker_tanggalMasuk_keberatanSelesai").val()
                                        let filterDate = null
                                        if (dateSelected != '') {
                                            filterDate = {
                                                'start': $("#kt_daterangepicker_tanggalMasuk_keberatanSelesai").data(
                                                    'daterangepicker').startDate.format('YYYY-MM-DD'),
                                                'end': $("#kt_daterangepicker_tanggalMasuk_keberatanSelesai").data(
                                                    'daterangepicker').endDate.format('YYYY-MM-DD')
                                            }
                                        }

                                        const asalKeberatan = $(this).val()
                                        const statusKeberatan = $("#status-selesai").val()
                                        loadDataPermintaanSelesaiByFilter(asalKeberatan, statusKeberatan, filterDate)
                                    })

                                    $("#status-selesai").on('change', function() {
                                        const dateSelected = $("#kt_daterangepicker_tanggalMasuk_keberatanSelesai").val()
                                        let filterDate = null
                                        if (dateSelected != '') {
                                            filterDate = {
                                                'start': $("#kt_daterangepicker_tanggalMasuk_keberatanSelesai").data(
                                                    'daterangepicker').startDate.format('YYYY-MM-DD'),
                                                'end': $("#kt_daterangepicker_tanggalMasuk_keberatanSelesai").data(
                                                    'daterangepicker').endDate.format('YYYY-MM-DD')
                                            }
                                        }

                                        const statusKeberatan = $(this).val()
                                        const asalKeberatan = $("#asal-selesai").val()
                                        loadDataPermintaanSelesaiByFilter(asalKeberatan, statusKeberatan, filterDate)
                                    })

                                    $(document).on('click', '#cetak-permohonan', function() {
                                        modalDetail.block()
                                        const filename = $("#detail-noregistrasi").val() + '.pdf'
                                        var opt = {
                                            margin: 0.5,
                                            filename: filename,
                                            image: {
                                                type: 'jpeg',
                                                quality: 0.98
                                            },
                                            html2canvas: {
                                                scale: 2
                                            },
                                            jsPDF: {
                                                unit: 'in',
                                                format: 'a4',
                                                orientation: 'portrait'
                                            }
                                        };
                                        var worker = html2pdf().set(opt).from($("#data-cetak-field")[0]).save();

                                        modalDetail.release()

                                    })

                                })
                            </script>
                        @endpush

</x-admin.layout>
