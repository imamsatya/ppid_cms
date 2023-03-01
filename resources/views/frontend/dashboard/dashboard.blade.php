<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/dashboard/index.css') }}" rel="stylesheet" />
        <link href="{{ asset('template/dist/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
            type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
        <style>
            .blockui {
                position: relative
            }

            .blockui .blockui-overlay {
                transition: all .3s ease;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: rgba(25, 22, 22, 0.47)
            }

            .blockui .blockui-overlay .spinner-border {
                height: 1.35rem;
                width: 1.35rem
            }

            .blockui .blockui-message {
                display: flex;
                align-items: center;
                border-radius: .475rem;
                box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
                background-color: #fff;
                color: #5E6278;
                font-weight: 600;
                margin: 0 !important;
                width: auto;
                padding: .85rem 1.75rem !important
            }

            .blockui .blockui-message .spinner-border {
                margin-right: .65rem
            }

            .form-select.form-select-solid {
                background-color: #f5f8fa;
                border-color: #f5f8fa;
                color: #5E6278 transition: color 0.2s ease;
            }

            .form-select {
                color: #5E6278;
                background-color: #ffffff;
                border: 1px solid #E4E6EF;
                box-shadow: none !important;
                appearance: none;
                font-weight: 500;
                line-height: 1.5;
                padding: 0.775rem 3rem 0.775rem 1rem;
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%237E8299' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right 1rem center;
                background-size: 16px 12px;
            }

            .form-select-sm {
                padding-top: 0.55rem;
                padding-bottom: 0.55rem;
                padding-left: 0.75rem;
                font-size: 0.925rem;
                border-radius: 0.425rem;
            }

            div.dataTables_length+div.dataTables_info {
                margin-left: 1rem;
            }

            div.dataTables_wrapper div.dataTables_info {
                display: flex;
                flex-direction: column;
                font-weight: 500;
                color: #5E6278;
                padding: 1rem 0;
            }

            div.dataTables_wrapper div.dataTables_paginate {
                padding: 1rem 0;
                margin-left: 0.5rem;
            }

            div.dataTables_wrapper div.dataTables_paginate ul.pagination {
                margin: 2px 0;
                white-space: nowrap;
                justify-content: flex-end;
            }

            .page-item {
                margin-right: 0.5rem;
            }

            .page-item.disabled .page-link {
                color: #B5B5C3;
            }

            .page-item:first-child .page-link {
                border-top-left-radius: 0.475rem;
                border-bottom-left-radius: 0.475rem;
            }

            .page-item:last-child .page-link {
                border-top-right-radius: 0.475rem;
                border-bottom-right-radius: 0.475rem;
            }

            .page-item .page-link {
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 0.475rem;
                border-top-left-radius: 0.475rem;
                border-bottom-left-radius: 0.475rem;
                height: 2.5rem;
                min-width: 2.5rem;
                font-weight: 500;
                font-size: 1.075rem;
            }

            .page-link.disabled,
            .disabled>.page-link {
                /* color: var(--bs-pagination-disabled-color); */
                pointer-events: none;
                /* background-color: var(--bs-pagination-disabled-bg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          border-color: var(--bs-pagination-disabled-border-color); */
            }



            .page-link {
                position: relative;
                display: block;
                padding: 0.375rem 0.75rem;
                font-size: 1.075rem;
                color: #5E6278;
                background-color: transparent;
                border: 0 solid transparent;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }

            .page-item .page-link .next {
                mask-repeat: no-repeat;
                mask-position: center;
                -webkit-mask-repeat: no-repeat;
                -webkit-mask-position: center;
                background-color: #5E6278;
                -webkit-mask-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 6 6' fill='%235E6278'%3e%3cpath d='M3.27989 3.23571L1.53642 4.97917C1.36382 5.15176 1.36383 5.43158 1.53642 5.60417C1.70901 5.77676 1.98882 5.77676 2.16139 5.60417L4.47096 3.29463C4.63371 3.13192 4.63371 2.86809 4.47096 2.70538L2.16139 0.395812C1.98883 0.22325 1.70901 0.22325 1.53642 0.395812C1.36383 0.568437 1.36383 0.84825 1.53642 1.02081L3.27989 2.76429C3.41006 2.89446 3.41006 3.10554 3.27989 3.23571Z'/%3e%3c/svg%3e");
                mask-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 6 6' fill='%235E6278'%3e%3cpath d='M3.27989 3.23571L1.53642 4.97917C1.36382 5.15176 1.36383 5.43158 1.53642 5.60417C1.70901 5.77676 1.98882 5.77676 2.16139 5.60417L4.47096 3.29463C4.63371 3.13192 4.63371 2.86809 4.47096 2.70538L2.16139 0.395812C1.98883 0.22325 1.70901 0.22325 1.53642 0.395812C1.36383 0.568437 1.36383 0.84825 1.53642 1.02081L3.27989 2.76429C3.41006 2.89446 3.41006 3.10554 3.27989 3.23571Z'/%3e%3c/svg%3e");
            }

            .page-item .page-link .previous,
            .page-item .page-link .next {
                display: block;
                height: 0.875rem;
                width: 0.875rem;
            }

            .page-item .page-link .previous {
                mask-repeat: no-repeat;
                mask-position: center;
                -webkit-mask-repeat: no-repeat;
                -webkit-mask-position: center;
                background-color: #5E6278;
                -webkit-mask-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 6 6' fill='%235E6278'%3e%3cpath d='M2.72011 2.76429L4.46358 1.02083C4.63618 0.848244 4.63617 0.568419 4.46358 0.395831C4.29099 0.223244 4.01118 0.223244 3.83861 0.395831L1.52904 2.70537C1.36629 2.86808 1.36629 3.13191 1.52904 3.29462L3.83861 5.60419C4.01117 5.77675 4.29099 5.77675 4.46358 5.60419C4.63617 5.43156 4.63617 5.15175 4.46358 4.97919L2.72011 3.23571C2.58994 3.10554 2.58994 2.89446 2.72011 2.76429Z'/%3e%3c/svg%3e");
                mask-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 6 6' fill='%235E6278'%3e%3cpath d='M2.72011 2.76429L4.46358 1.02083C4.63618 0.848244 4.63617 0.568419 4.46358 0.395831C4.29099 0.223244 4.01118 0.223244 3.83861 0.395831L1.52904 2.70537C1.36629 2.86808 1.36629 3.13191 1.52904 3.29462L3.83861 5.60419C4.01117 5.77675 4.29099 5.77675 4.46358 5.60419C4.63617 5.43156 4.63617 5.15175 4.46358 4.97919L2.72011 3.23571C2.58994 3.10554 2.58994 2.89446 2.72011 2.76429Z'/%3e%3c/svg%3e");
            }

            .jawban-file-st img {
                width: 30%;
                aspect-ratio: 3/2;
                object-fit: contain;
            }
        </style>
    @endpush
    <!-- Content -->
    <!-- content -->
    <div class="content-dashboard">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Dashboard Pemohon</h2>
                    <div class="line"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-sub d-flex align-items-end">
                                <div>
                                    <div class="title">Riwayat Permohonan</div>
                                    <div class="sub-title">
                                        Daftar informasi atas status dan batas waktu atas perihal
                                        permohonan informasi yang diajukan
                                    </div>
                                </div>
                                <button class="btn btn-sm ml-auto" id="btn-show-modal-permohonan" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    + Form Permohonan
                                </button>
                            </div>
                            <div class="body-dashboard mt-4">
                                <table class="table" id="table-permohonan">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No. Permohonan</th>
                                            <th scope="col">Perihal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Batas Waktu</th>
                                            <th scope="col">Jawaban</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody id="bd-table-permohonan"></tbody>

                                </table>
                            </div>
                        </div>

                        <div class="col-md-12 mt-5">
                            <div class="title-sub d-flex align-items-end">
                                <div>
                                    <div class="title">Riwayat Keberatan</div>
                                    <div class="sub-title">
                                        Daftar informasi atas status dan batas waktu atas perihal
                                        keberatan informasi yang diajukan
                                    </div>
                                </div>
                                <button class="btn btn-sm ml-auto" id="btn-show-modal-keberatan" data-toggle="modal"
                                    data-target="#modalKeberatan">+ Form Keberatan</button>
                            </div>
                            <div class="body-dashboard mt-4">
                                <table class="table" id="table-keberatan">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No. Keberatan</th>
                                            <th scope="col">Perihal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Batas Waktu</th>
                                            <th scope="col">Jawaban</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bd-table-keberatan">

                                        {{-- <tr>
                                            <td scope="row">
                                                <a href="#">10/Per-web/01/2022</a>
                                            </td>
                                            <td>Permohonan Informasi A</td>
                                            <td>
                                                <div class="confirm d-flex align-items-start">
                                                    <div class="circle-blue"></div>
                                                    <span class="ml-2">Menunggu <br />
                                                        Konfirmasi</span>
                                                </div>
                                            </td>
                                            <td>2 Hari</td>
                                            <td>pdf</td>
                                            <td>
                                                <button class="btn btn-sm">
                                                    <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_edit.svg') }}"
                                                        alt="" />
                                                </button>
                                                <button class="btn btn-sm">
                                                    <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_trash.svg') }}"
                                                        alt="" />
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <a href="#">10/Per-web/01/2022</a>
                                            </td>
                                            <td>Permohonan Informasi A</td>
                                            <td>
                                                <div class="confirm d-flex align-items-start">
                                                    <div class="circle-yellow"></div>
                                                    <span class="ml-2">Sedang Proses</span>
                                                </div>
                                            </td>
                                            <td>
                                                5 Hari hingga batas <br />
                                                waktu
                                            </td>
                                            <td>pdf</td>
                                            <td>
                                                <button class="btn btn-sm">
                                                    <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_edit.svg') }}"
                                                        alt="" />
                                                </button>
                                                <button class="btn btn-sm">
                                                    <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_trash.svg') }}"
                                                        alt="" />
                                                </button>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content" id="content-modal-permohonan">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Form Pemohon Informasi
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="data-title">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_people.svg') }}"
                                    class="img-fluid" alt="" />
                                <div class="ml-2">
                                    <div class="name font-weight-bold" id="name-user-modal">
                                        -
                                    </div>
                                    <div class="number" id="nomor-user-modal">-</div>
                                </div>
                                <div class="ml-auto">
                                    <div class="jenis">Jenis pemohon</div>
                                    <div style="text-transform: uppercase" class="type font-weight-bold"
                                        id="jpemohon-user-modal">-</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-data mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control form-control-solid tox-target" rows="3" id="area-informasi-diminta"
                                            placeholder="Informasi yang diminta"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" id="select-memperoleh-informasi"
                                            placeholder="">
                                            <option>Cara memperoleh informasi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" id="select-memberikan-informasi"
                                            placeholder="">
                                            <option>Cara memberikan informasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control form-control-solid" rows="3" id="area-tujuan-penggunaan"
                                            placeholder="Tujuan penggunaan informasi"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancel-permohonan" class="btn btn-outline-primary-ppid"
                            data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" id="save-permohonan" class="btn btn-lg btn-primary-ppid w-25">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Keberatan --}}
        <div class="modal fade" id="modalKeberatan" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content" id="content-modal-keberatan">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Form Keberatan Informasi
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="data-title">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_people.svg') }}"
                                    class="img-fluid" alt="" />
                                <div class="ml-2">
                                    <div class="name font-weight-bold" id="name-user-modal-keb">
                                        -
                                    </div>
                                    <div class="number" id="nomor-user-modal-keb">-</div>
                                </div>
                                <div class="ml-auto">
                                    <div class="jenis">Jenis pemohon</div>
                                    <div style="text-transform: uppercase" class="type font-weight-bold"
                                        id="jpemohon-user-modal-keb">-</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-data mt-4">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <select class="custom-select" id="select-kategori-keberatan" placeholder="">
                                            <option>Kategori Keberatan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" hidden id="select-permohonan-sebelumnya"
                                            placeholder="">
                                            <option value="-">Pilih Permohonan Sebelumnya</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control form-control-solid" rows="3" id="perihal-keberatan-informasi"
                                            placeholder="Perihal Keberatan Informasi"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancel-keberatan" class="btn btn-outline-primary-ppid"
                            data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" id="save-keberatan" class="btn btn-lg btn-primary-ppid w-25">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Survei -->
        <div class="modal fade" id="surveiModal" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width : 1600px" role="document">
                <div class="modal-content" id="content-modal-permohonan">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Survey Kepuasan Pelayanan Informasi Publik Kementerian BUMN
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                                <div class="step" data-target="#responden-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="responden-part" id="responden-part-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Data Responden</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#information-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="information-part" id="information-part-trigger">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Indikator Survey Kepuasan Pelayanan Informasi
                                            Publik</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#information2-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="information2-part" id="information2-part-trigger">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Kelengkapan dan Keterbaruan Informasi
                                            Publik</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#information3-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="information3-part" id="information3-part-trigger">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">Keseluruhan Pelayanan</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <!-- your steps content here -->
                                <!-- Step 1 -->
                                <div id="responden-part" class="content" role="tabpanel"
                                    aria-labelledby="responden-part-trigger">
                                    <form class="border border-light p-2 m-0" action="#!">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="h5 mt-2 mb-4">Jenis Kelamin <span style="color:red">*</span>
                                                    <br>
                                                    <small>Pilihlah berdasarkan jenis kelamin anda</small>
                                                </p>

                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="Laki-laki" id="jenisKelamin-lakilaki"
                                                        name="jenisKelamin">
                                                    <label class="custom-control-label"
                                                        for="jenisKelamin-lakilaki">Laki-laki</label>
                                                </div> <br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="Perempuan" id="jenisKelamin-perempuan"
                                                        name="jenisKelamin">
                                                    <label class="custom-control-label"
                                                        for="jenisKelamin-perempuan">Perempuan</label>
                                                </div><br>

                                            </div>

                                            <div class="col-md-12">
                                                <p class="h5 mt-2 mb-4">Usia <span style="color:red">*</span> <br>
                                                    <small>Pilihlah berdasarkan usia anda saat ini</small>
                                                </p>

                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="> 35 tahun" id="usia-35up" name="usia">
                                                    <label class="custom-control-label" for="usia-35up"> >35
                                                        tahun</label>
                                                </div> <br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="30 - 35 tahun" id="usia-30-35" name="usia">
                                                    <label class="custom-control-label" for="usia-30-35">30 - 35
                                                        tahun</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="25 - 30 tahun" id="usia-25-30" name="usia">
                                                    <label class="custom-control-label" for="usia-25-30">25 - 30
                                                        tahun</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="20 - 25 tahun" id="usia-20-25" name="usia">
                                                    <label class="custom-control-label" for="usia-20-25">20 - 25
                                                        tahun</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="< 20 tahun" id="usia-20down" name="usia">
                                                    <label class="custom-control-label" for="usia-20down">
                                                        < 20 tahun</label>
                                                </div><br>

                                            </div>

                                            <div class="col-md-12">
                                                <p class="h5 mt-2 mb-4">Pendidikan <span style="color:red">*</span>
                                                    <br>
                                                    <small>Pilihlah berdasarkan pendidikan terakhir anda</small>
                                                </p>

                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input" value="S2"
                                                        id="pendidikan-s2" name="pendidikan">
                                                    <label class="custom-control-label" for="pendidikan-s2">
                                                        S2</label>
                                                </div> <br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input" value="S1"
                                                        id="pendidikan-s1" name="pendidikan">
                                                    <label class="custom-control-label" for="pendidikan-s1">S1</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input" value="D3"
                                                        id="pendidikan-d3" name="pendidikan">
                                                    <label class="custom-control-label" for="pendidikan-d3">D3</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input" value="SMA"
                                                        id="pendidikan-sma" name="pendidikan">
                                                    <label class="custom-control-label"
                                                        for="pendidikan-sma">SMA</label>
                                                </div><br>


                                            </div>

                                            <div class="col-md-12">
                                                <p class="h5 mt-2 mb-4">Pekerjaan <span style="color:red">*</span>
                                                    <br>
                                                    <small>Pilihlah berdasarkan pekerjaan anda saat ini</small>
                                                </p>

                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input pekerjaan-radio"
                                                        value="Mahasiswa" id="pekerjaan-mahasiswa" name="pekerjaan">
                                                    <label class="custom-control-label" for="pekerjaan-mahasiswa">
                                                        Mahasiswa</label>
                                                </div> <br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input pekerjaan-radio"
                                                        value="Pegawai BUMN" id="pekerjaan-pegawaibumn"
                                                        name="pekerjaan">
                                                    <label class="custom-control-label"
                                                        for="pekerjaan-pegawaibumn">Pegawai BUMN</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input pekerjaan-radio"
                                                        value="Pegawai Swasta" id="pekerjaan-pegawaiswasta"
                                                        name="pekerjaan">
                                                    <label class="custom-control-label"
                                                        for="pekerjaan-pegawaiswasta">Pegawai Swasta</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input pekerjaan-radio"
                                                        value="Wiraswasta" id="pekerjaan-wiraswasta"
                                                        name="pekerjaan">
                                                    <label class="custom-control-label"
                                                        for="pekerjaan-wiraswasta">Wiraswasta</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input pekerjaan-radio"
                                                        value="Reporter" id="pekerjaan-reporter" name="pekerjaan">
                                                    <label class="custom-control-label"
                                                        for="pekerjaan-reporter">Reporter</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        id="pekerjaan-lainnya" name="pekerjaan">
                                                    <label class="custom-control-label" for="pekerjaan-lainnya"><input
                                                            type="text" disabled
                                                            class="form-control custom-control-label"
                                                            id="input-pekerjaan" name="pekerjaan"
                                                            placeholder="Lainnya"></label>
                                                </div><br>


                                            </div>

                                            <div class="col-md-12">
                                                <p class="h5 mt-2 mb-4">Tujuan Pengajuan Permohonan Informasi <span
                                                        style="color:red">*</span> <br>
                                                    <small>Pilihlah berdasarkan tujuan saat anda mengajukan permohonan
                                                        informasi</small>
                                                </p>

                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input tujuan-radio"
                                                        value="Penelitian" id="tujuan-penelitian" name="tujuan">
                                                    <label class="custom-control-label " for="tujuan-penelitian">
                                                        Penelitian</label>
                                                </div> <br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input tujuan-radio"
                                                        value="Publikasi" id="tujuan-publikasi" name="tujuan">
                                                    <label class="custom-control-label"
                                                        for="tujuan-publikasi">Publikasi</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        id="tujuan-lainnya" name="tujuan">
                                                    <label class="custom-control-label" for="tujuan-lainnya"><input
                                                            type="text" disabled
                                                            class="form-control custom-control-label"
                                                            id="input-tujuan" name="tujuan"
                                                            placeholder="Lainnya"></label>
                                                </div><br>


                                            </div>

                                            <div class="col-md-12">
                                                <p class="h5 mt-2 mb-4">Media Pengajuan Permohonan Informasi <span
                                                        style="color:red">*</span> <br>
                                                    <small>Pilihlah sesuai dengan media saat anda melakukan pengajuan
                                                        informasi</small>
                                                </p>

                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="Email/Telepon" id="mediapengajuan-emailtelepon"
                                                        name="mediapengajuan">
                                                    <label class="custom-control-label"
                                                        for="mediapengajuan-emailtelepon"> Email / Telepon</label>
                                                </div> <br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="Portal Website" id="mediapengajuan-portalwebsite"
                                                        name="mediapengajuan">
                                                    <label class="custom-control-label"
                                                        for="mediapengajuan-portalwebsite">Portal Website</label>
                                                </div><br>
                                                <div class="custom-control custom-radio col-md-10">
                                                    <input type="radio" class="custom-control-input"
                                                        value="Datang Langsung ke Kementrian BUMN"
                                                        id="mediapengajuan-datanglangsung" name="mediapengajuan">
                                                    <label class="custom-control-label"
                                                        for="mediapengajuan-datanglangsung">Datang Langsung ke
                                                        Kementrian BUMN</label>
                                                </div><br>



                                            </div>
                                        </div>
                                    </form>


                                    <button type="button" id="next-step1"
                                        class="btn btn-outline-primary-ppid  mt-2">
                                        Next
                                    </button>
                                </div>
                                <!-- Step 2 -->
                                <div id="information-part" class="content" role="tabpanel"
                                    aria-labelledby="information-part-trigger">
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Prosedur pelayanan / tata cara pengajuan permohonan
                                            informasi publik Kementerian BUMN <span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Jelas"
                                                id="prosedurpelayanan-kurang" name="prosedurpelayanan">
                                            <label class="custom-control-label" for="prosedurpelayanan-kurang"> Kurang
                                                Jelas</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Jelas"
                                                id="prosedurpelayanan-cukup" name="prosedurpelayanan">
                                            <label class="custom-control-label" for="prosedurpelayanan-cukup">Cukup
                                                Jelas</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Jelas"
                                                id="prosedurpelayanan-jelas" name="prosedurpelayanan">
                                            <label class="custom-control-label"
                                                for="prosedurpelayanan-jelas">Jelas</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Jelas"
                                                id="prosedurpelayanan-sangat" name="prosedurpelayanan">
                                            <label class="custom-control-label" for="prosedurpelayanan-sangat">Sangat
                                                Jelas</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, bagaimana kualitas pelayanan informasi
                                            yang diberikan oleh Kementerian BUMN? <span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Baik"
                                                id="kualitaspelayanan-kurang" name="kualitaspelayanan">
                                            <label class="custom-control-label" for="kualitaspelayanan-kurang"> Kurang
                                                Baik</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Baik"
                                                id="kualitaspelayanan-cukup" name="kualitaspelayanan">
                                            <label class="custom-control-label" for="kualitaspelayanan-cukup">Cukup
                                                Baik</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Baik"
                                                id="kualitaspelayanan-baik" name="kualitaspelayanan">
                                            <label class="custom-control-label"
                                                for="kualitaspelayanan-baik">Baik</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Baik"
                                                id="kualitaspelayanan-sangat" name="kualitaspelayanan">
                                            <label class="custom-control-label" for="kualitaspelayanan-sangat">Sangat
                                                Baik</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, bagaimana kelengkapan data yang diberikan
                                            oleh Kementerian BUMN? <span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Lengkap"
                                                id="kelengkapandata-kurang" name="kelengkapandata">
                                            <label class="custom-control-label" for="kelengkapandata-kurang"> Kurang
                                                Lengkap</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Lengkap"
                                                id="kelengkapandata-cukup" name="kelengkapandata">
                                            <label class="custom-control-label" for="kelengkapandata-cukup">Cukup
                                                Lengkap</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Lengkap"
                                                id="kelengkapandata-lengkap" name="kelengkapandata">
                                            <label class="custom-control-label"
                                                for="kelengkapandata-lengkap">Lengkap</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Lengkap"
                                                id="kelengkapandata-sangat" name="kelengkapandata">
                                            <label class="custom-control-label" for="kelengkapandata-sangat">Sangat
                                                Lengkap</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, bagaimana tingkat responsif/kecepatan
                                            pelayanan yang diberikan saat mengajukan permohonan informasi? <span
                                                style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Baik"
                                                id="tingkatresponsif-kurang" name="tingkatresponsif">
                                            <label class="custom-control-label" for="tingkatresponsif-kurang"> Kurang
                                                Baik</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Baik"
                                                id="tingkatresponsif-cukup" name="tingkatresponsif">
                                            <label class="custom-control-label" for="tingkatresponsif-cukup">Cukup
                                                Baik</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Baik"
                                                id="tingkatresponsif-baik" name="tingkatresponsif">
                                            <label class="custom-control-label"
                                                for="tingkatresponsif-baik">Baik</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Baik"
                                                id="tingkatresponsif-sangat" name="tingkatresponsif">
                                            <label class="custom-control-label" for="tingkatresponsif-sangat">Sangat
                                                Baik</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, bagaimana fasilitas/kelengkapan pelayanan
                                            informasi publik Kementerian BUMN?<span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Baik"
                                                id="fasilitaspelayanan-kurang" name="fasilitaspelayanan">
                                            <label class="custom-control-label" for="fasilitaspelayanan-kurang">
                                                Kurang Baik</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Baik"
                                                id="fasilitaspelayanan-cukup" name="fasilitaspelayanan">
                                            <label class="custom-control-label" for="fasilitaspelayanan-cukup">Cukup
                                                Baik</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Baik"
                                                id="fasilitaspelayanan-baik" name="fasilitaspelayanan">
                                            <label class="custom-control-label"
                                                for="fasilitaspelayanan-baik">Baik</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Baik"
                                                id="fasilitaspelayanan-sangat" name="fasilitaspelayanan">
                                            <label class="custom-control-label" for="fasilitaspelayanan-sangat">Sangat
                                                Baik</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, apakah pelayanan informasi sudah sesuai
                                            dengan prosedur yaitu 10+7 hari kerja?<span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Sesuai"
                                                id="pelayananinformasi-kurang" name="pelayananinformasi">
                                            <label class="custom-control-label" for="pelayananinformasi-kurang">
                                                Kurang Sesuai</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Sesuai"
                                                id="pelayananinformasi-cukup" name="pelayananinformasi">
                                            <label class="custom-control-label" for="pelayananinformasi-cukup">Cukup
                                                Sesuai</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sesuai"
                                                id="pelayananinformasi-baik" name="pelayananinformasi">
                                            <label class="custom-control-label"
                                                for="pelayananinformasi-baik">Sesuai</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Sesuai"
                                                id="pelayananinformasi-sangat" name="pelayananinformasi">
                                            <label class="custom-control-label" for="pelayananinformasi-sangat">Sangat
                                                Sesuai</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, bagaimana kecakapan petugas dalam
                                            memberikan pelayanan informasi?<span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Baik"
                                                id="kecakapanpetugas-kurang" name="kecakapanpetugas">
                                            <label class="custom-control-label" for="kecakapanpetugas-kurang"> Kurang
                                                Baik</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Baik"
                                                id="kecakapanpetugas-cukup" name="kecakapanpetugas">
                                            <label class="custom-control-label" for="kecakapanpetugas-cukup">Cukup
                                                Baik</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Baik"
                                                id="kecakapanpetugas-baik" name="kecakapanpetugas">
                                            <label class="custom-control-label"
                                                for="kecakapanpetugas-baik">Baik</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Baik"
                                                id="kecakapanpetugas-sangat" name="kecakapanpetugas">
                                            <label class="custom-control-label" for="kecakapanpetugas-sangat">Sangat
                                                Baik</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, bagaimana kompetensi (pengetahuan,
                                            keahlian, ketrampilan, dan pengalaman) petugas pelayanan pelayanan informasi
                                            dalam memberikan pelayanan?<span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Baik"
                                                id="kompetensipetugas-kurang" name="kompetensipetugas">
                                            <label class="custom-control-label" for="kompetensipetugas-kurang"> Kurang
                                                Ahli</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Ahli"
                                                id="kompetensipetugas-cukup" name="kompetensipetugas">
                                            <label class="custom-control-label" for="kompetensipetugas-cukup">Cukup
                                                Ahli</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Ahli"
                                                id="kompetensipetugas-ahli" name="kompetensipetugas">
                                            <label class="custom-control-label"
                                                for="kompetensipetugas-ahli">Ahli</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Ahli"
                                                id="kompetensipetugas-sangat" name="kompetensipetugas">
                                            <label class="custom-control-label" for="kompetensipetugas-sangat">Sangat
                                                Ahli</label>
                                        </div><br>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-outline-primary-ppid prev-step">
                                        Prev
                                    </button>
                                    <button type="button" class="btn btn-outline-primary-ppid" id="next-step2">
                                        Next
                                    </button>
                                </div>
                                <!-- Step 3 -->
                                <div id="information2-part" class="content" role="tabpanel"
                                    aria-labelledby="information2-part-trigger">
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Informasi yang disajikan di portal PPID Kementerian
                                            BUMN * <span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Lengkap"
                                                id="informasidisajikan-kurang" name="informasidisajikan">
                                            <label class="custom-control-label" for="informasidisajikan-kurang">
                                                Kurang Lengkap</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Lengkap"
                                                id="informasidisajikan-cukup" name="informasidisajikan">
                                            <label class="custom-control-label" for="informasidisajikan-cukup">Cukup
                                                Lengkap</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Lengkap"
                                                id="informasidisajikan-lengkap" name="informasidisajikan">
                                            <label class="custom-control-label"
                                                for="informasidisajikan-lengkap">Lengkap</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Lengkap"
                                                id="informasidisajikan-sangat" name="informasidisajikan">
                                            <label class="custom-control-label" for="informasidisajikan-sangat">Sangat
                                                Lengkap</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Data dan informasi yang disajikan di website sudah up
                                            to date * <span style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang"
                                                id="informasiuptodate-kurang" name="informasiuptodate">
                                            <label class="custom-control-label"
                                                for="informasiuptodate-kurang">Kurang</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup"
                                                id="informasiuptodate-cukup" name="informasiuptodate">
                                            <label class="custom-control-label"
                                                for="informasiuptodate-cukup">Cukup</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Baik"
                                                id="informasiuptodate-baik" name="informasiuptodate">
                                            <label class="custom-control-label"
                                                for="informasiuptodate-baik">Baik</label>
                                        </div><br>

                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, bagaimana aksesbilitas/kemudahan dalam
                                            mendapatkan informasi dari Kementerian BUMN? <span
                                                style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sulit"
                                                id="aksesibilitasinformasi-kurang" name="aksesibilitasinformasi">
                                            <label class="custom-control-label" for="aksesibilitasinformasi-kurang">
                                                Sulit</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Mudah"
                                                id="aksesibilitasinformasi-cukup" name="aksesibilitasinformasi">
                                            <label class="custom-control-label"
                                                for="aksesibilitasinformasi-cukup">Cukup Mudah</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Mudah"
                                                id="aksesibilitasinformasi-mudah" name="aksesibilitasinformasi">
                                            <label class="custom-control-label"
                                                for="aksesibilitasinformasi-mudah">Mudah</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Mudah"
                                                id="aksesibilitasinformasi-sangat" name="aksesibilitasinformasi">
                                            <label class="custom-control-label"
                                                for="aksesibilitasinformasi-sangat">Sangat Mudah</label>
                                        </div><br>
                                    </div>

                                    <br>
                                    <button type="button" class="btn btn-outline-primary-ppid prev-step">
                                        Prev
                                    </button>
                                    <button type="button" class="btn btn-outline-primary-ppid" id="next-step3">
                                        Next
                                    </button>
                                </div>
                                <!-- Step 4 -->
                                <div id="information3-part" class="content" role="tabpanel"
                                    aria-labelledby="information3-part-trigger">
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-4">Menurut anda, bagaimana pelaksanaan keseluruhan proses
                                            pelayanan permohonan informasi Kementerian BUMN? * <span
                                                style="color:red">*</span>
                                        </p>

                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Kurang Puas"
                                                id="keseluruhanproses-kurang" name="keseluruhanproses">
                                            <label class="custom-control-label" for="keseluruhanproses-kurang"> Kurang
                                                Puas</label>
                                        </div> <br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Cukup Puas"
                                                id="keseluruhanproses-cukup" name="keseluruhanproses">
                                            <label class="custom-control-label" for="keseluruhanproses-cukup">Cukup
                                                Puas</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Puas"
                                                id="keseluruhanproses-puas" name="keseluruhanproses">
                                            <label class="custom-control-label"
                                                for="keseluruhanproses-puas">Puas</label>
                                        </div><br>
                                        <div class="custom-control custom-radio col-md-10">
                                            <input type="radio" class="custom-control-input" value="Sangat Puas"
                                                id="keseluruhanproses-sangat" name="keseluruhanproses">
                                            <label class="custom-control-label" for="keseluruhanproses-sangat">Sangat
                                                Puas</label>
                                        </div><br>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-2 mb-1">Skor pelaksanaan keseluruhan proses pelayanan
                                            permohonan informasi Kementerian BUMN * <span style="color:red">*</span>
                                        </p>
                                        <span>Tidak Puas &nbsp;</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio1"
                                                value="1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio2"
                                                value="2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio3"
                                                value="3">
                                            <label class="form-check-label" for="inlineRadio3">3 </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio4"
                                                value="4">
                                            <label class="form-check-label" for="inlineRadio4">4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio5"
                                                value="5">
                                            <label class="form-check-label" for="inlineRadio5">5</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio6"
                                                value="6">
                                            <label class="form-check-label" for="inlineRadio6">6</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio7"
                                                value="7">
                                            <label class="form-check-label" for="inlineRadio7">7</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio8"
                                                value="8">
                                            <label class="form-check-label" for="inlineRadio8">8</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio9"
                                                value="9">
                                            <label class="form-check-label" for="inlineRadio9">9</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" style="width: 1rem; height:1.25rem;"
                                                type="radio" name="skorpelaksanaan" id="inlineRadio10"
                                                value="10">
                                            <label class="form-check-label" for="inlineRadio10">10</label>
                                        </div>
                                        <span>Puas</span>



                                    </div>
                                    <div class="col-md-12">
                                        <p class="h5 mt-4 mb-4">Saran dan masukan bagi pelayanan informasi Kementerian
                                            BUMN <span style="color:red">*</span>
                                        </p>
                                        <input type="text" class="form-control custom-control-label"
                                            id="input-saranmasukan" name="saranmasukan"
                                            placeholder="Saran dan Masukan">

                                        <br>
                                    </div>

                                    <br>
                                    <button type="button" class="btn btn-outline-primary-ppid prev-step">
                                        Prev
                                    </button>
                                    <button type="button" class="btn btn-outline-primary-ppid" id="next-step4">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" id="cancel-permohonan" class="btn btn-outline-primary-ppid"
                            data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" id="save-permohonan" class="btn btn-lg btn-primary-ppid w-25">
                            Submit
                        </button>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
    <input type="hidden" id="id-permohonan-edited">
    <input type="hidden" id="id-keberatan-edited">
    <!-- untuk survei -->
    <input type="hidden" id="id-surat-survey">
    <input type="hidden" id="no-tiket-survey">
    <!-- content -->

    <!-- Content -->

    @push('child-scripts')
        <script src="{{ asset('template/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('template/dist/assets/js/scripts.bundle.js') }}"></script>
        {{-- <script src="{{ asset('template/dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script> --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="{{ asset('template/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        {{-- <script src="{{ asset('frontend/dashboard/keberatan.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
        <script>
            const dataSurvei = {
                //Step 1
                'jenisKelamin': null,
                'usia': null,
                'pendidikan': null,
                'pekerjaan': null,
                'tujuan': null,
                'mediapengajuan': null,
                //Step 2
                'prosedurpelayanan': null,
                'kualitaspelayanan': null,
                'kelengkapandata': null,
                'tingkatresponsif': null,
                'fasilitaspelayanan': null,
                'pelayananinformasi': null,
                'kecakapanpetugas': null,
                'kompetensipetugas': null,
                //Step 3
                'informasidisajikan': null,
                'informasiuptodate': null,
                'aksesibilitasinformasi': null,
                //Step 4
                'keseluruhanproses': null,
                'skorpelaksanaan': null,
                'saranmasukan': null
            }
            document.addEventListener('DOMContentLoaded', function() {
                var stepper = new Stepper(document.querySelector('.bs-stepper'))

                $(".pekerjaan-radio").on('click', function() {
                    $("#input-pekerjaan").attr("disabled", true);
                })
                $(".tujuan-radio").on('click', function() {
                    $("#input-tujuan").attr("disabled", true);
                })
                $("#pekerjaan-lainnya").on('click', function() {
                    $("#input-pekerjaan").attr("disabled", false);
                })
                $("#tujuan-lainnya").on('click', function() {
                    $("#input-tujuan").attr("disabled", false);
                })

                const submitSurvey = (data) => {
                    return $.ajax({
                        type: 'POST',
                        url: "/submit-data-survey",
                        data: data,
                        dataType: 'json'
                    });
                }


                $("#next-step1").on('click', function() {
                    let error = []
                    const jenisKelaminAll = document.querySelectorAll('input[name="jenisKelamin"]');
                    const usiaAll = document.querySelectorAll('input[name="usia"]');
                    const pendidikanAll = document.querySelectorAll('input[name="pendidikan"]');
                    const pekerjaanAll = document.querySelectorAll('input[name="pekerjaan"]');
                    const tujuanAll = document.querySelectorAll('input[name="tujuan"]');
                    const mediapengajuanAll = document.querySelectorAll('input[name="mediapengajuan"]');

                    for (const jenisKelamin of jenisKelaminAll) {
                        if (jenisKelamin.checked) {
                            dataSurvei.jenisKelamin = jenisKelamin.value;
                            break;
                        }
                    }
                    for (const usia of usiaAll) {
                        if (usia.checked) {
                            dataSurvei.usia = usia.value;
                            break;
                        }
                    }
                    for (const pendidikan of pendidikanAll) {
                        if (pendidikan.checked) {
                            dataSurvei.pendidikan = pendidikan.value;
                            break;
                        }
                    }

                    if ($("#pekerjaan-lainnya").prop("checked")) {
                        dataSurvei.pekerjaan = null
                        if ($("#input-pekerjaan").val() != "") {
                            dataSurvei.pekerjaan = $("#input-pekerjaan").val()
                        }
                    } else {
                        for (const pekerjaan of pekerjaanAll) {
                            if (pekerjaan.checked) {
                                dataSurvei.pekerjaan = pekerjaan.value;
                                break;
                            }
                        }
                    }

                    if ($("#tujuan-lainnya").prop("checked")) {
                        dataSurvei.tujuan = null
                        if ($("#input-tujuan").val() != "") {
                            dataSurvei.tujuan = $("#input-tujuan").val()
                        }
                    } else {
                        for (const tujuan of tujuanAll) {
                            if (tujuan.checked) {
                                dataSurvei.tujuan = tujuan.value;
                                break;
                            }
                        }
                    }
                    for (const mediapengajuan of mediapengajuanAll) {
                        if (mediapengajuan.checked) {
                            dataSurvei.mediapengajuan = mediapengajuan.value;
                            break;
                        }
                    }
                    console.log('dataSurvei', dataSurvei)
                    console.log('error', error)

                    if (dataSurvei.jenisKelamin == null) {
                        error.push('Jenis Kelamin harus diisi')
                    }
                    if (dataSurvei.usia == null) {
                        error.push('Usia harus diisi')
                    }
                    if (dataSurvei.pendidikan == null) {
                        error.push('Pendidikan harus diisi')
                    }
                    if (dataSurvei.pekerjaan == null) {
                        error.push('Pekerjaan harus diisi')
                    }
                    if (dataSurvei.tujuan == null) {
                        error.push('Tujuan harus diisi')
                    }
                    if (dataSurvei.mediapengajuan == null) {
                        error.push('Media Pengajuan harus diisi')
                    }

                    if (error.length > 0) {
                        // list = document.createElement("div")
                        let errtxt = '<ul style="text-align: left; color: red">'
                        error.forEach((item) => {
                            // let li = document.createElement("li");
                            // li.innerText = '- ' + item;
                            // li.style.cssText = 'text-align: left; color: red'
                            // list.appendChild(li);
                            errtxt += '<li>- ' + item + '!</li>'
                        })

                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            html: `<p style="font-weight: bold">Isian tidak lengkap:</p> ${errtxt}`
                        })
                        return
                    } else {
                        stepper.next()
                    }

                })

                $("#next-step2").on('click', function() {

                    let error = []
                    const prosedurpelayananAll = document.querySelectorAll('input[name="prosedurpelayanan"]');
                    const kualitaspelayananAll = document.querySelectorAll('input[name="kualitaspelayanan"]');
                    const kelengkapandataAll = document.querySelectorAll('input[name="kelengkapandata"]');
                    const tingkatresponsifAll = document.querySelectorAll('input[name="tingkatresponsif"]');
                    const fasilitaspelayananAll = document.querySelectorAll('input[name="fasilitaspelayanan"]');
                    const pelayananinformasiAll = document.querySelectorAll('input[name="pelayananinformasi"]');
                    const kecakapanpetugasAll = document.querySelectorAll('input[name="kecakapanpetugas"]');
                    const kompetensipetugasAll = document.querySelectorAll('input[name="kompetensipetugas"]');

                    for (const prosedurpelayanan of prosedurpelayananAll) {
                        if (prosedurpelayanan.checked) {
                            dataSurvei.prosedurpelayanan = prosedurpelayanan.value;
                            break;
                        }
                    }
                    for (const kualitaspelayanan of kualitaspelayananAll) {
                        if (kualitaspelayanan.checked) {
                            dataSurvei.kualitaspelayanan = kualitaspelayanan.value;
                            break;
                        }
                    }
                    for (const kelengkapandata of kelengkapandataAll) {
                        if (kelengkapandata.checked) {
                            dataSurvei.kelengkapandata = kelengkapandata.value;
                            break;
                        }
                    }

                    for (const tingkatresponsif of tingkatresponsifAll) {
                        if (tingkatresponsif.checked) {
                            dataSurvei.tingkatresponsif = tingkatresponsif.value;
                            break;
                        }
                    }

                    for (const fasilitaspelayanan of fasilitaspelayananAll) {
                        if (fasilitaspelayanan.checked) {
                            dataSurvei.fasilitaspelayanan = fasilitaspelayanan.value;
                            break;
                        }
                    }

                    for (const pelayananinformasi of pelayananinformasiAll) {
                        if (pelayananinformasi.checked) {
                            dataSurvei.pelayananinformasi = pelayananinformasi.value;
                            break;
                        }
                    }

                    for (const kecakapanpetugas of kecakapanpetugasAll) {
                        if (kecakapanpetugas.checked) {
                            dataSurvei.kecakapanpetugas = kecakapanpetugas.value;
                            break;
                        }
                    }

                    for (const kompetensipetugas of kompetensipetugasAll) {
                        if (kompetensipetugas.checked) {
                            dataSurvei.kompetensipetugas = kompetensipetugas.value;
                            break;
                        }
                    }
                    console.log('dataSurvei', dataSurvei)
                    console.log('error', error)
                    // 'prosedurpelayanan':null,
                    //     'kualitaspelayanan':null,
                    //     'kelengkapandata':null,
                    //     'tingkatresponsif':null,
                    //     'fasilitaspelayanan':null,
                    //     'pelayananinformasi':null,
                    //     'kecakapanpetugas':null,
                    //     'kompetensipetugas':null,
                    if (dataSurvei.prosedurpelayanan == null) {
                        error.push('Indikator Prosedur Pelayanan harus diisi')
                    }
                    if (dataSurvei.kualitaspelayanan == null) {
                        error.push('Indikator Kualitas Pelayanan harus diisi')
                    }
                    if (dataSurvei.kelengkapandata == null) {
                        error.push('Indikator Kelengkapan Data harus diisi')
                    }
                    if (dataSurvei.tingkatresponsif == null) {
                        error.push('Indikator Tingkat Responsif harus diisi')
                    }
                    if (dataSurvei.fasilitaspelayanan == null) {
                        error.push('Indikator Fasilitas Pelayanan harus diisi')
                    }
                    if (dataSurvei.pelayananinformasi == null) {
                        error.push('Indikator Pelayanan Informasi harus diisi')
                    }
                    if (dataSurvei.kecakapanpetugas == null) {
                        error.push('Indikator Kecakapan Petugas harus diisi')
                    }
                    if (dataSurvei.kompetensipetugas == null) {
                        error.push('Indikator Kompetensi Petugas harus diisi')
                    }

                    if (error.length > 0) {

                        let errtxt = '<ul style="text-align: left; color: red">'
                        error.forEach((item) => {

                            errtxt += '<li>- ' + item + '!</li>'
                        })

                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            html: `<p style="font-weight: bold">Isian tidak lengkap:</p> ${errtxt}`
                        })
                        return
                    } else {
                        stepper.next()
                    }

                })

                $("#next-step3").on('click', function() {

                    let error = []
                    const informasidisajikanAll = document.querySelectorAll('input[name="informasidisajikan"]');
                    const informasiuptodateAll = document.querySelectorAll('input[name="informasiuptodate"]');
                    const aksesibilitasinformasiAll = document.querySelectorAll(
                        'input[name="aksesibilitasinformasi"]');

                    for (const informasidisajikan of informasidisajikanAll) {
                        if (informasidisajikan.checked) {
                            dataSurvei.informasidisajikan = informasidisajikan.value;
                            break;
                        }
                    }
                    for (const informasiuptodate of informasiuptodateAll) {
                        if (informasiuptodate.checked) {
                            dataSurvei.informasiuptodate = informasiuptodate.value;
                            break;
                        }
                    }
                    for (const aksesibilitasinformasi of aksesibilitasinformasiAll) {
                        if (aksesibilitasinformasi.checked) {
                            dataSurvei.aksesibilitasinformasi = aksesibilitasinformasi.value;
                            break;
                        }
                    }


                    console.log('dataSurvei', dataSurvei)
                    console.log('error', error)

                    if (dataSurvei.informasidisajikan == null) {
                        error.push('Indikator Informasi Yang Disajikan harus diisi')
                    }
                    if (dataSurvei.informasiuptodate == null) {
                        error.push('Indikator Informasi Yang Up to Date harus diisi')
                    }
                    if (dataSurvei.aksesibilitasinformasi == null) {
                        error.push('Indikator Aksesibilitas Informasi harus diisi')
                    }


                    if (error.length > 0) {

                        let errtxt = '<ul style="text-align: left; color: red">'
                        error.forEach((item) => {

                            errtxt += '<li>- ' + item + '!</li>'
                        })

                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            html: `<p style="font-weight: bold">Isian tidak lengkap:</p> ${errtxt}`
                        })
                        return
                    } else {
                        stepper.next()
                    }

                })
                $("#next-step4").on('click', function() {
                    const user = {!! Auth::user()->toJson() !!}
                    let error = []
                    const keseluruhanprosesAll = document.querySelectorAll('input[name="keseluruhanproses"]');
                    const skorpelaksanaanAll = document.querySelectorAll('input[name="skorpelaksanaan"]');
                    const saranmasukanAll = document.querySelectorAll('input[name="saranmasukan"]');

                    for (const keseluruhanproses of keseluruhanprosesAll) {
                        if (keseluruhanproses.checked) {
                            dataSurvei.keseluruhanproses = keseluruhanproses.value;
                            break;
                        }
                    }
                    for (const skorpelaksanaan of skorpelaksanaanAll) {
                        if (skorpelaksanaan.checked) {
                            dataSurvei.skorpelaksanaan = skorpelaksanaan.value;
                            break;
                        }
                    }


                    if ($("#input-saranmasukan").val() != "") {
                        dataSurvei.saranmasukan = $("#input-saranmasukan").val()
                    }




                    console.log('dataSurvei', dataSurvei)
                    console.log('error', error)

                    if (dataSurvei.keseluruhanproses == null) {
                        error.push('Indikator Keseluruhan Proses harus diisi')
                    }
                    if (dataSurvei.skorpelaksanaan == null) {
                        error.push('Indikator Skor Pelaksanaan harus diisi')
                    }
                    if (dataSurvei.saranmasukan == null) {
                        error.push('Saran dan Masukan harus diisi')
                    }


                    if (error.length > 0) {

                        let errtxt = '<ul style="text-align: left; color: red">'
                        error.forEach((item) => {

                            errtxt += '<li>- ' + item + '!</li>'
                        })

                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            html: `<p style="font-weight: bold">Isian tidak lengkap:</p> ${errtxt}`
                        })
                        return
                    } else {
                        //submit
                        stepper.next()
                        Swal.fire({
                            icon: 'question',
                            html: `Kirim Jawaban Survei ?`,
                            cancelButtonText: 'Cancel',
                            showCancelButton: true,
                            confirmButtonText: "Ya, Kirim",
                            customClass: {
                                cancelButton: 'btn btn-danger',
                                confirmButton: "btn btn-primary",
                            }
                        }).then(async (dt) => {
                            if (dt.isConfirmed) {

                                try {
                                    // modalKeberatan.block();
                                    dataSurvei.id_surat = $("#id-surat-survey").val()
                                    dataSurvei.no_tiket = $("#no-tiket-survey").val()
                                    dataSurvei._token = "{{ csrf_token() }}"
                                    dataSurvei.id_ppid_pendaftar = user.id
                                    const result = await submitSurvey(dataSurvei)




                                    // modalKeberatan.release();
                                    if (result.result) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses',
                                            html: 'Berhasil mengirim survei!'
                                        })
                                        window.location.reload();
                                        $("#surveiModal").modal('hide')

                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Warning',
                                            html: 'Keberatan Anda sudah dikonfirmasi, silahkan refresh Dashboard'
                                        });
                                    }

                                    // window.location.reload();

                                } catch (error) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        html: 'Terjadi kesalahan!'
                                    });
                                    console.log(error)
                                    modalKeberatan.release();
                                }
                            }
                        })
                    }

                })



                $(".prev-step").on('click', function() {
                    stepper.previous()
                })
            })
        </script>
        <script>
            $(document).ready(function() {

                $("body").tooltip({
                    selector: '[rel="tooltip"]'
                });

                var modalPermohonan = new KTBlockUI(document.getElementById('content-modal-permohonan'), {
                    message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                });
                var tablePermohonanUI = new KTBlockUI(document.getElementById('bd-table-permohonan'), {
                    message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                });

                // var bodyUI = new KTBlockUI(document.getElementsByTagName("body")[0], {
                //             message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                //         });   
                const jadwalKerja = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/jadwal-kerja",
                        dataType: 'json'
                    })
                }

                $("#btn-show-modal-permohonan").on('click', function() {
                    loadModalPermohonan()
                })

                async function loadModalPermohonan(type = 'add-new', data = null) {
                    modalPermohonan.block()
                    const user = {!! Auth::user()->toJson() !!}

                    $("#name-user-modal").text(user.nama_lengkap)
                    $("#nomor-user-modal").text(user.nomor_identitas)

                    const ppidJenisPemohon = await getPpidJenisPemohon()
                    const jenisPemohon = ppidJenisPemohon.result.find(el => el.id == user.jenis_pemohon)
                    if (jenisPemohon != undefined) {
                        $("#jpemohon-user-modal").text(jenisPemohon.name)
                    } else {
                        $("#jpemohon-user-modal").text('-')
                    }

                    await ppidCaraMendapatkan()
                    await ppidCaraMemberikan()

                    if (type == 'add-new') {
                        $("#area-informasi-diminta").val('')
                        $("#area-tujuan-penggunaan").val('')
                        $("#id-permohonan-edited").val('')
                    } else {
                        const dataPermohonan = await ppidPermohonanUser(data)
                        $("#id-permohonan-edited").val(data)
                        $("#area-informasi-diminta").val(dataPermohonan.result.informasi_diminta)
                        $("#area-tujuan-penggunaan").val(dataPermohonan.result.tujuan_informasi)
                        $("#select-memberikan-informasi").val(dataPermohonan.result.id_cara)
                        $("#select-memperoleh-informasi").val(dataPermohonan.result.id_mendapatkan)
                    }

                    modalPermohonan.release()
                }


                const ppidPermohonanUser = (id) => {
                    return $.ajax({
                        type: 'GET',
                        url: "ppid-data-permohonan-spec/" + id,
                        dataType: 'json'
                    })
                }

                const ppidJenisPemohon = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/ppid-jenis-pemohon",
                        dataType: 'json'
                    })
                }

                async function getPpidJenisPemohon() {
                    try {
                        const result = await ppidJenisPemohon()
                        return result
                    } catch (error) {
                        console.log(error)
                    }
                }


                const getDataPermohonan = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/ppid-data-permohonan",
                        dataType: 'json'
                    });
                }

                const tablePermohonan = $("#table-permohonan").DataTable({
                    initComplete: function() {
                        loadData()
                    }
                });

                async function loadData() {
                    tablePermohonanUI.block()
                    await ppidDataPermohonan()
                    tablePermohonanUI.release()
                }

                const updateClickSurveiPermohonan = (id) => {
                    return $.ajax({
                        type: 'POST',
                        url: "/update-click-survei/permohonan",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'id': id
                        },
                        dataType: 'json'
                    });
                }





                $(document).on('click', '.clicksurvei-permohonan', async function() {
                    const idPermohonan = $(this).data('id')
                    const noticket = $(this).data('notiket')
                    $("#surveiModal").modal('show')
                    $("#id-surat-survey").val(idPermohonan)
                    $("#no-tiket-survey").val(noticket)
                    // const result = await updateClickSurveiPermohonan(idPermohonan)
                    // console.log('result', result);
                    // if (result.result) {
                    //     let linkSurvei = {{ Js::from($linkSurvei) }}
                    //     window.open(linkSurvei.link)
                    // }

                    // console.log(idPermohonan)

                })

                var jadwal = null
                async function ppidDataPermohonan() {
                    try {

                        if (jadwal == null) {
                            jadwal = await jadwalKerja()
                            jadwal = jadwal.result.data
                        }
                        let linkSurvei = {{ Js::from($linkSurvei) }}

                        const result = await getDataPermohonan()
                        const data = result.result
                        let rowData = []
                        const now = new Date().toJSON().slice(0, 10).replace(/-/g, '-').toString()
                        for (let i = 0; i < data.length; i++) {
                            let btnAction = `<button class="btn btn-sm edit-permohonan" data-permohonan="${data[i].id}">
                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_edit.svg') }}"
                                    alt="" />
                            </button>
                            <button class="btn btn-sm delete-permohonan" data-permohonan="${data[i].id}">
                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_trash.svg') }}"
                                    alt="" />
                            </button>`
                            if (data[i].id_status != 1) btnAction = '-'
                            let status = ''
                            switch (data[i].id_status) {
                                case 1:
                                    status = 'Belum Dikonfirmasi'
                                    break
                                case 2:
                                case 3:
                                    status = 'Proses'
                                    break
                                case 4:
                                    status = 'Selesai'
                                    break
                                default:
                                    status = data[i].nama_status
                                    break
                            }

                            if (data[i].id_status == 4) {
                                if (data[i].isSurveiClicked == false) {
                                    btnAction =
                                        `<button data-id="${data[i].id}" data-notiket="${data[i].ticket_permohonan}" type="button" class=" clicksurvei-permohonan btn btn-outline-primary">Isi Survei</button>`
                                } else {
                                    btnAction =
                                        `<button  disabled type="button" class=" clicksurvei-permohonan btn btn-outline-secondary">Isi Survei</button>`
                                }


                            }
                            let jawaban = '-'
                            if (data[i].id_status == 5 || data[i].id_status == 6) {
                                let fileJawaban = ''
                                if (data[i].ket_jawaban_path) {
                                    fileJawaban += `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="mb-4 jawban-file-st" title="File Jawaban" href="{{ Storage::url('${data[i].ket_jawaban_path}') }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('template/src/media/svg/files/pdf.svg') }}"
                                                        alt="" /></a>`
                                }
                                jawaban = `
                                ${fileJawaban}
                                ${data[i].file_jawaban ? `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="jawban-file-st" title="File Pendukung" href="{{ Storage::url('${data[i].file_jawaban}') }}"><img src="{{ asset('template/src/media/svg/files/dark/folder-document.svg') }}"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                alt="" /></a>` : '' }
                            `
                            }

                            if (data[i].id_status == 4 && data[i].isSurveiClicked) {
                                let fileJawaban = ''
                                if (data[i].ket_jawaban_path) {
                                    fileJawaban += `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="mb-4 jawban-file-st" title="File Jawaban" href="{{ Storage::url('${data[i].ket_jawaban_path}') }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('template/src/media/svg/files/pdf.svg') }}"
                                                        alt="" /></a>`
                                }
                                jawaban = `
                                ${fileJawaban}
                                ${data[i].file_jawaban ? `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="jawban-file-st" title="File Pendukung" href="{{ Storage::url('${data[i].file_jawaban}') }}"><img src="{{ asset('template/src/media/svg/files/dark/folder-document.svg') }}"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                alt="" /></a>` : '' }
                            `
                            }

                            if (data[i].id_status == 4 && data[i].isSurveiClicked == false) {
                                let fileJawaban = ''
                                if (data[i].ket_jawaban_path) {
                                    fileJawaban += `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="mb-4 jawban-file-st" title="Isi Survei untuk melihat File Jawaban"  target="_blank" rel="noopener noreferrer"><img src="{{ asset('template/src/media/svg/files/pdf.svg') }}"
                                                        alt="" /></a>`
                                }
                                jawaban = `
                                ${fileJawaban}
                                ${data[i].file_jawaban ? `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="jawban-file-st" title="Isi Survei untuk melihat File Pendukung" ><img src="{{ asset('template/src/media/svg/files/dark/folder-document.svg') }}"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                alt="" /></a>` : '' }
                            `
                            }

                            let expiredDate = now > data[i].expired_date1 ? data[i].expired_date2 : data[i]
                                .expired_date1
                            if (expiredDate && (data[i].id_status == 2 || data[i].id_status == 3)) {
                                var start = moment().startOf('day');
                                var end = moment(expiredDate, "YYYY-MM-DD");

                                //Difference in number of days  
                                // yovi
                                let diff = moment.duration(end.diff(start)).asDays()
                                const hariLibur = jadwal.filter(jd => (jd.tanggal >= start.format("YYYY-MM-DD") &&
                                    jd.tanggal <= end.format("YYYY-MM-DD")) && jd.jenis != '0')
                                expiredDate = diff >= 0 ? `Batas ${diff - hariLibur.length + 1} Hari Kerja` :
                                    `Perpanjangan ${Math.abs(diff) - hariLibur.length + 1} Hari Kerja`;
                            } else {
                                expiredDate = '-- Selesai --'
                            }

                            rowData.push([
                                data[i].ticket_permohonan,
                                data[i].informasi_diminta,
                                status,
                                data[i].id_status == '1' || data[i].id_status == '5' ? '-' : expiredDate,
                                jawaban,
                                btnAction
                            ])
                        }

                        tablePermohonan.clear().rows.add(rowData).draw()
                    } catch (error) {
                        console.log(error)
                    }
                }

                $(document).on('click', '#cancel-permohonan', function() {
                    $("#exampleModalCenter").modal('hide')
                })


                $(document).on('click', '.edit-permohonan', function() {
                    const idPermohonan = $(this).data('permohonan')
                    $("#exampleModalCenter").modal('show')
                    loadModalPermohonan('edit-data', idPermohonan)
                })

                const deleteDataPermohonan = (id) => {
                    return $.ajax({
                        type: 'DELETE',
                        url: "/ppid-data-permohonan/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: 'json'
                    })
                }

                $(document).on('click', '.delete-permohonan', function() {
                    const idPermohonan = $(this).data('permohonan')
                    Swal.fire({
                        icon: 'question',
                        title: 'Konfirmasi',
                        html: 'Hapus data permohonan ?',
                        showCancelButton: true,
                        confirmButtonText: "Ya, Hapus Data",
                        customClass: {
                            cancelButton: 'btn btn-danger',
                            confirmButton: "btn btn-primary",
                        },
                        showLoaderOnConfirm: true,
                        // preConfirm: async () => {
                        //     try {
                        //         await deleteDataPermohonan(idPermohonan)
                        //     } catch (error) {
                        //         Swal.showValidationMessage(
                        //             `Request failed: ${error}`
                        //         )
                        //     }
                        // },
                        allowOutsideClick: () => !Swal.isLoading()
                    }).then(async (dt) => {
                        if (dt.isConfirmed) {

                            try {
                                modalPermohonan.block();
                                const result = await deleteDataPermohonan(idPermohonan)
                                modalPermohonan.release();
                                console.log('result Delete', result)

                                if (result.status == 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses',
                                        html: 'Berhasil menghapus data permohonan!'
                                    })
                                    $("#cancel-permohonan").click()
                                    loadData()
                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Warning',
                                        html: 'Permohonan Anda sudah dikonfirmasi, silahkan refresh Dashboard'
                                    });
                                }
                            } catch (error) {
                                Swal.showValidationMessage(
                                    `Request failed: ${error}`
                                )
                            }


                            loadData()
                        }
                    })
                })

                const getDataPpidCaraMendapatkan = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/ppid-cara-mendapatkan",
                        dataType: 'json'
                    });
                }

                async function ppidCaraMendapatkan() {
                    try {
                        const result = await getDataPpidCaraMendapatkan()
                        let option = '<option selected value="-">-- Cara memperoleh informasi --</option>'
                        for (let i = 0; i < result.result.length; i++) {
                            option += `<option value="${result.result[i].id}">${result.result[i].name}</option>`
                        }
                        $("#select-memperoleh-informasi").html(option)
                    } catch (err) {
                        console.log(err.responseText)
                    }
                }

                const getDataPpidCaraMemberikan = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/ppid-cara-memberikan",
                        dataType: 'json'
                    });
                }

                async function ppidCaraMemberikan() {
                    try {
                        const result = await getDataPpidCaraMemberikan()
                        let option = '<option selected value="-">-- Cara memberikan informasi --</option>'
                        for (let i = 0; i < result.result.length; i++) {
                            option += `<option value="${result.result[i].id}">${result.result[i].name}</option>`
                        }
                        $("#select-memberikan-informasi").html(option)
                    } catch (err) {
                        console.log(err.responseText)
                    }
                }

                const submitDataPermohonan = (data) => {
                    return $.ajax({
                        type: 'POST',
                        url: "/submit-data-permohonan",
                        data: data,
                        dataType: 'json'
                    });
                }


                let configAreaInformasiDiminta = {
                    selector: "#area-informasi-diminta",
                    height: "300"
                };
                let configAreaTujuanPenggunaan = {
                    selector: "#area-tujuan-penggunaan",
                    height: "300"
                };
                // tinymce.init(configAreaInformasiDiminta);
                // tinymce.init(configAreaTujuanPenggunaan);

                function escapeHTML(text) {
                    const replacements = {
                        "<": "&lt;",
                        ">": "&gt;",
                        "&": "&amp;",
                        "\"": "&quot;",
                        "'": "&#x27;",
                        "/": "&#x2F;"
                    };
                    return text.replace(/[<>&"'\/]/g, function(match) {
                        return replacements[match];
                    });
                }


                $("#save-permohonan").click(function() {
                    const user = {!! Auth::user()->toJson() !!}
                    const data = {
                        'id': $("#id-permohonan-edited").val(),
                        '_token': "{{ csrf_token() }}",
                        'id_ppid_pendaftar': user.id,
                        'ticket_permohonan': '-',
                        'jenis_kanal': 'web',
                        'informasi_diminta': escapeHTML($("#area-informasi-diminta").val()),
                        'tujuan_informasi': escapeHTML($("#area-tujuan-penggunaan").val()),
                        'id_cara': $("#select-memberikan-informasi").val(),
                        'id_mendapatkan': $("#select-memperoleh-informasi").val(),
                        'file_identitas': user.identitas_file_path,
                    }

                    // if (data.informasi_diminta.length == 0 || data.tujuan_informasi.length == 0 || data
                    //     .id_cara == '-' || data.id_mendapatkan == '-') {
                    //     Swal.fire({
                    //         icon: 'warning',
                    //         title: 'Warning',
                    //         html: 'Isian tidak lengkap!'
                    //     })
                    //     return
                    // }
                    if (data.informasi_diminta.length == 0 || data.tujuan_informasi.length == 0 || data
                        .id_cara == '-' || data.id_mendapatkan == '-') {
                        let errtxt = '<ul style="text-align: left; color: red">'
                        if (data.informasi_diminta.length == 0) {
                            errtxt += '<li>- Informasi yang diminta harus terisi!</li>'
                        }

                        if (data.tujuan_informasi.length == 0) {
                            errtxt += '<li>- Tujuan penggunaan infomasi harus terisi!</li>'
                        }

                        if (data.id_cara == '-') {
                            errtxt += '<li>- Pilihan cara memperoleh informasi harus terisi!</li>'
                        }

                        if (data.id_mendapatkan == '-') {
                            errtxt += '<li>- Pilihan cara memberikan informasi harus terisi!</li>'
                        }
                        errtxt += '</ul>'


                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            html: `<p style="font-weight: bold">Isian tidak lengkap:</p>${errtxt}`
                        })
                        return
                    }

                    Swal.fire({
                        icon: 'question',
                        html: `Simpan permohonan ?`,
                        cancelButtonText: 'Cancel',
                        showCancelButton: true,
                        confirmButtonText: "Ya, Simpan",
                        customClass: {
                            cancelButton: 'btn btn-danger',
                            confirmButton: "btn btn-primary",
                        }
                    }).then(async (dt) => {
                        if (dt.isConfirmed) {

                            try {
                                modalPermohonan.block();
                                const result = await submitDataPermohonan(data)
                                modalPermohonan.release();
                                console.log('result Submit', result)
                                if (result.status == 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses',
                                        html: 'Berhasil menyimpan data permohonan!'
                                    })
                                    $("#cancel-permohonan").click()
                                    loadData()
                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Warning',
                                        html: 'Permohonan Anda sudah dikonfirmasi, silahkan refresh Dashboard'
                                    });
                                }

                            } catch (error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    html: 'Terjadi kesalahan!'
                                });
                                console.log(error)
                                modalPermohonan.release();
                            }
                        }
                    })
                })

            })
        </script>
    @endpush

    @push('child-scripts')
        <script>
            $(document).ready(function() {
                var modalKeberatan = new KTBlockUI(document.getElementById('content-modal-keberatan'), {
                    message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                });
                var tableKeberatanUI = new KTBlockUI(document.getElementById('bd-table-keberatan'), {
                    message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                });

                $("#btn-show-modal-keberatan").on('click', function() {
                    loadModalKeberatan()
                })

                const jadwalKerja = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/jadwal-kerja",
                        dataType: 'json'
                    })
                }

                const ppidJenisPemohon = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/ppid-jenis-pemohon",
                        dataType: 'json'
                    })
                }



                async function getPpidJenisPemohon() {
                    try {
                        const result = await ppidJenisPemohon()
                        return result
                    } catch (error) {
                        console.log(error)
                    }
                }

                const updateClickSurveiKeberatan = (id) => {
                    return $.ajax({
                        type: 'POST',
                        url: "/update-click-survei/keberatan",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'id': id
                        },
                        dataType: 'json'
                    });
                }


                $(document).on('click', '.clicksurvei-keberatan', async function() {
                    const idPermohonan = $(this).data('id')
                    const noticket = $(this).data('notiket')
                    $("#surveiModal").modal('show')
                    $("#id-surat-survey").val(idPermohonan)
                    $("#no-tiket-survey").val(noticket)

                })


                async function loadModalKeberatan(type = 'add-new', data = null) {
                    document.getElementById('select-permohonan-sebelumnya').hidden = true
                    modalKeberatan.block()
                    const user = {!! Auth::user()->toJson() !!}

                    $("#name-user-modal-keb").text(user.nama_lengkap)
                    $("#nomor-user-modal-keb").text(user.nomor_identitas)

                    const ppidJenisPemohon = await getPpidJenisPemohon()
                    const jenisPemohon = ppidJenisPemohon.result.find(el => el.id == user.jenis_pemohon)
                    if (jenisPemohon != undefined) {
                        $("#jpemohon-user-modal-keb").text(jenisPemohon.name)
                    } else {
                        $("#jpemohon-user-modal-keb").text('-')
                    }

                    // await ppidCaraMendapatkan()
                    // await ppidCaraMemberikan()
                    await ppidKategoriKeberatan()

                    if (type == 'add-new') {
                        $("#perihal-keberatan-informasi").val('')
                        $("#id-keberatan-edited").val('')
                    } else {
                        const dataKeberatan = await ppidKeberatanUser(data)
                        $("#id-keberatan-edited").val(data)
                        $("#perihal-keberatan-informasi").val(dataKeberatan.result
                            .perihal_keberatan)

                        $("#select-kategori-keberatan").val(dataKeberatan.result.id_kategori_keberatan)
                        if (dataKeberatan.result.id_permohonan) {
                            const userId = {{ auth()->id() }}
                            try {
                                const result = await getDataPpidPermohonanSebelumnya(userId)
                                let option = '<option selected value="-">-- No Tiket Permohonan --</option>'
                                for (let i = 0; i < result.result.length; i++) {
                                    option +=
                                        `<option value="${result.result[i].id}">${result.result[i].ticket_permohonan}</option>`
                                }
                                console.log(option)
                                $("#select-permohonan-sebelumnya").text(option)
                            } catch (err) {
                                console.log(err.responseText)
                            }
                            document.getElementById('select-permohonan-sebelumnya').hidden = false
                            $("#select-permohonan-sebelumnya").val(dataKeberatan.result.id_permohonan)
                        }

                    }

                    modalKeberatan.release()
                }

                const ppidKeberatanUser = (id) => {
                    return $.ajax({
                        type: 'GET',
                        url: "ppid-data-keberatan-spec/" + id,
                        dataType: 'json'
                    })
                }

                const getDataPpidKategoriKeberatan = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/ppid-kategori-keberatan",
                        dataType: 'json'
                    });
                }

                async function ppidKategoriKeberatan() {
                    try {
                        const result = await getDataPpidKategoriKeberatan()
                        let option = '<option selected value="-">-- Kategori Keberatan --</option>'
                        for (let i = 0; i < result.result.length; i++) {
                            option +=
                                `<option value="${result.result[i].id}">${result.result[i].jenis_keberatan}</option>`
                        }
                        console.log('result kategori keb', result)
                        $("#select-kategori-keberatan").html(option)
                    } catch (err) {
                        console.log(err.responseText)
                    }
                }

                const getDataKeberatan = () => {
                    return $.ajax({
                        type: 'GET',
                        url: "/ppid-data-keberatan",
                        dataType: 'json'
                    });
                }

                var jadwal = null
                async function ppidDataKeberatan() {

                    try {
                        if (jadwal == null) {
                            jadwal = await jadwalKerja()
                            jadwal = jadwal.result.data
                        }
                        const result = await getDataKeberatan()
                        const data = result.result
                        let linkSurvei = {{ Js::from($linkSurvei) }}
                        let rowData = []
                        for (let i = 0; i < data.length; i++) {

                            //Expired Date
                            let expiredDate = data[i].expired_date
                            if (expiredDate && (data[i].id_status != 3)) {
                                var start = moment().startOf('day');
                                var end = moment(expiredDate, "YYYY-MM-DD");

                                //Difference in number of days  
                                // yovi
                                let diff = moment.duration(end.diff(start)).asDays()
                                const hariLibur = jadwal.filter(jd => (jd.tanggal >= start.format(
                                            "YYYY-MM-DD") &&
                                        jd.tanggal <= end.format("YYYY-MM-DD")) && jd.jenis !=
                                    '0')
                                expiredDate = diff >= 0 ?
                                    `Batas ${diff - hariLibur.length + 1} Hari Kerja` :
                                    `Perpanjangan ${Math.abs(diff) - hariLibur.length + 1} Hari Kerja`;
                            } else {
                                expiredDate = '-- Selesai --'
                            }

                            if (data[i].id_status == 1) {
                                expiredDate = '-'
                            }



                            //Jawaban Option
                            let jawabanPath = ''
                            if (data[i].ket_jawaban_path && data[i].isSurveiClicked) {
                                jawabanPath = `<a rel='tooltip' data-bs-toggle="tooltip"
                                                                data-bs-custom-class="tooltip-inverse"
                                                                data-bs-placement="top" class="mb-4 jawban-file-st"
                                                                title="File Jawaban"
                                                                href="{{ Storage::url('${data[i] . ket_jawaban_path}') }}"><img
                                                                    src="{{ asset('template/src/media/svg/files/pdf.svg') }}"
                                                                    alt="" /></a>`
                            }

                            if (data[i].ket_jawaban_path && data[i].isSurveiClicked == false) {
                                jawabanPath = `<a rel='tooltip' data-bs-toggle="tooltip"
                                                                data-bs-custom-class="tooltip-inverse"
                                                                data-bs-placement="top" class="mb-4 jawban-file-st"
                                                                title="Isi Survei untuk melihat File Jawaban"
                                                                ><img
                                                                    src="{{ asset('template/src/media/svg/files/pdf.svg') }}"
                                                                    alt="" /></a>`
                            }

                            let filePendukung = ''
                            if (data[i].file_jawaban && data[i].isSurveiClicked) {
                                filePendukung = ` <a rel='tooltip' data-bs-toggle="tooltip"
                                                                data-bs-custom-class="tooltip-inverse"
                                                                data-bs-placement="top" class="jawban-file-st"
                                                                title="File Pendukung"
                                                                href="{{ Storage::url('${data[i] . file_jawaban}') }}"><img
                                                                    src="{{ asset('template/src/media/svg/files/dark/folder-document.svg') }}"
                                                                    alt="" /></a>`
                            }
                            if (data[i].file_jawaban && data[i].isSurveiClicked == false) {
                                filePendukung = ` <a rel='tooltip' data-bs-toggle="tooltip"
                                                                data-bs-custom-class="tooltip-inverse"
                                                                data-bs-placement="top" class="jawban-file-st"
                                                                title="Isi Survei untuk melihat File Pendukung"
                                                                ><img
                                                                    src="{{ asset('template/src/media/svg/files/dark/folder-document.svg') }}"
                                                                    alt="" /></a>`
                            }

                            //buttonAction
                            let buttonAction = `<button class="btn btn-sm edit-keberatan" data-keberatan="${data[i].id}">
                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_edit.svg') }}"
                                    alt="" />
                            </button>
                            <button class="btn btn-sm delete-keberatan" data-keberatan="${data[i].id}">
                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_trash.svg') }}"
                                    alt="" />
                            </button>`
                            if (data[i].id_status == 3) {
                                if (data[i].isSurveiClicked == false) {
                                    buttonAction =
                                        `<button data-id="${data[i].id}" data-notiket="${data[i].ticket_keberatan}" type="button" class=" clicksurvei-keberatan btn btn-outline-primary">Isi Survei</button>`
                                } else {
                                    buttonAction =
                                        `<button  disabled type="button" class=" clicksurvei-keberatan btn btn-outline-secondary">Isi Survei</button>`
                                }
                            }

                            if (data[i].id_status == 2) buttonAction = '-'
                            rowData.push([
                                data[i].ticket_keberatan,
                                data[i].perihal_keberatan,
                                data[i].nama_status,
                                expiredDate,
                                (jawabanPath == '' && filePendukung == '') ? '-' :
                                `${jawabanPath} ${filePendukung}`,
                                buttonAction

                            ])
                        }

                        tableKeberatan.clear().rows.add(rowData).draw()
                        console.log('123')
                    } catch (error) {
                        console.log('error Keberatan', error)
                        console.log(error.responseText)
                    }
                }


                const tableKeberatan = $("#table-keberatan").DataTable({
                    initComplete: function() {
                        loadDataKeberatan()
                        // convertExpDate()

                    }
                });
                async function loadDataKeberatan() {
                    tableKeberatanUI.block()
                    await ppidDataKeberatan()
                    tableKeberatanUI.release()
                }

                function escapeHTML(text) {
                    const replacements = {
                        "<": "&lt;",
                        ">": "&gt;",
                        "&": "&amp;",
                        "\"": "&quot;",
                        "'": "&#x27;",
                        "/": "&#x2F;"
                    };
                    return text.replace(/[<>&"'\/]/g, function(match) {
                        return replacements[match];
                    });
                }

                $("#save-keberatan").click(function() {
                    let permohonanSebelumnya = null
                    if ($("#select-permohonan-sebelumnya")[0].value == '-') {
                        permohonanSebelumnya = null
                    } else {
                        permohonanSebelumnya = $("#select-permohonan-sebelumnya")[0].value
                    }
                    const user = {!! Auth::user()->toJson() !!}
                    const data = {
                        'id': $("#id-keberatan-edited").val(),
                        '_token': "{{ csrf_token() }}",
                        'id_ppid_pendaftar': user.id,
                        'ticket_keberatan': '-',
                        'jenis_kanal': 'web',
                        'perihal_keberatan': escapeHTML($("#perihal-keberatan-informasi")
                            .val()),
                        'id_kategori_keberatan': $("#select-kategori-keberatan")[0].value,
                        'id_permohonan': permohonanSebelumnya,

                    }
                    let errorValidation = []
                    // if (data.perihal_keberatan.length == 0 || data
                    //     .id_kategori_keberatan == '-') {
                    //     Swal.fire({
                    //         icon: 'warning',
                    //         title: 'Warning',
                    //         html: 'Isian tidak lengkap!'
                    //     })
                    //     return
                    // }
                    console.log('final data', data)
                    if (data.perihal_keberatan.length == 0) {
                        errorValidation.push('Perihal Keberatan Harus diisi')
                    }

                    if (data.id_kategori_keberatan == '-') {
                        errorValidation.push('Kategori Keberatan Harus diisi')
                    }

                    if ((data.id_kategori_keberatan == "3" || data.id_kategori_keberatan == "4" || data
                            .id_kategori_keberatan == "5") && data.id_permohonan == null) {
                        errorValidation.push('Permohonan Sebelumnya harus dipilih')
                    }

                    if (errorValidation.length > 0) {
                        // list = document.createElement("div")
                        let errtxt = '<ul style="text-align: left; color: red">'
                        errorValidation.forEach((item) => {
                            // let li = document.createElement("li");
                            // li.innerText = '- ' + item;
                            // li.style.cssText = 'text-align: left; color: red'
                            // list.appendChild(li);
                            errtxt += '<li>- ' + item + '!</li>'
                        })

                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            html: `<p style="font-weight: bold">Isian tidak lengkap:</p> ${errtxt}`
                        })
                        return
                    }

                    Swal.fire({
                        icon: 'question',
                        html: `Simpan keberatan ?`,
                        cancelButtonText: 'Cancel',
                        showCancelButton: true,
                        confirmButtonText: "Ya, Simpan",
                        customClass: {
                            cancelButton: 'btn btn-danger',
                            confirmButton: "btn btn-primary",
                        }
                    }).then(async (dt) => {
                        if (dt.isConfirmed) {

                            try {
                                modalKeberatan.block();
                                const result = await submitDataKeberatan(data)
                                modalKeberatan.release();
                                if (result.status == 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses',
                                        html: 'Berhasil menyimpan data keberatan!'
                                    })
                                    $("#cancel-keberatan").click()
                                    loadDataKeberatan()
                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Warning',
                                        html: 'Keberatan Anda sudah dikonfirmasi, silahkan refresh Dashboard'
                                    });
                                }

                                // window.location.reload();

                            } catch (error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    html: 'Terjadi kesalahan!'
                                });
                                console.log(error)
                                modalKeberatan.release();
                            }
                        }
                    })
                })

                const getDataPpidPermohonanSebelumnya = (id) => {
                    return $.ajax({
                        type: 'GET',
                        url: "ppid-permohonan-sebelumnya/" + id,
                        dataType: 'json'
                    });
                }

                async function ppidPermohonanSebelumnya() {
                    const userId = {{ auth()->id() }}
                    try {
                        const result = await getDataPpidPermohonanSebelumnya(userId)
                        let option = '<option selected value="-">-- No Tiket Permohonan --</option>'
                        for (let i = 0; i < result.result.length; i++) {
                            option +=
                                `<option value="${result.result[i].id}">${result.result[i].ticket_permohonan}</option>`
                        }
                        console.log(option)
                        $("#select-permohonan-sebelumnya").html(option)
                    } catch (err) {
                        console.log(err.responseText)
                    }
                }

                async function checkKategori() {
                    let selectedKategoriId = $("#select-kategori-keberatan")[0].value
                    if (selectedKategoriId == 3 || selectedKategoriId == 4 || selectedKategoriId == 5) {
                        await ppidPermohonanSebelumnya()
                        document.getElementById('select-permohonan-sebelumnya').hidden = false
                    } else {
                        document.getElementById('select-permohonan-sebelumnya').hidden = true
                    }
                }
                $("#select-kategori-keberatan").on("change", checkKategori);


                $(document).on('click', '#cancel-keberatan', function() {
                    $("#modalKeberatan").modal('hide')
                })

                $(document).on('click', '.edit-keberatan', function() {

                    const idKeberatan = $(this).data('keberatan')
                    console.log('idKeberatan', idKeberatan)
                    $("#modalKeberatan").modal('show')
                    loadModalKeberatan('edit-data', idKeberatan)
                })

                const deleteDataKeberatan = (id) => {
                    return $.ajax({
                        type: 'DELETE',
                        url: "/ppid-data-keberatan/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: 'json'
                    })
                }

                $(document).on('click', '.delete-keberatan', function() {
                    const idKeberatan = $(this).data('keberatan')
                    Swal.fire({
                        icon: 'question',
                        title: 'Konfirmasi',
                        html: 'Hapus data keberatan ?',
                        showCancelButton: true,
                        confirmButtonText: "Ya, Hapus Data",
                        customClass: {
                            cancelButton: 'btn btn-danger',
                            confirmButton: "btn btn-primary",
                        },
                        showLoaderOnConfirm: true,
                        // preConfirm: async () => {
                        //     try {
                        //         await deleteDataKeberatan(idKeberatan)
                        //     } catch (error) {
                        //         Swal.showValidationMessage(
                        //             `Request failed: ${error}`
                        //         )
                        //     }
                        // },
                        allowOutsideClick: () => !Swal.isLoading()
                    }).then(async (dt) => {
                        if (dt.isConfirmed) {
                            try {
                                modalKeberatan.block();
                                const result = await deleteDataKeberatan(idKeberatan)
                                modalKeberatan.release();
                                if (result.status == 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses',
                                        html: 'Berhasil menghapus data keberatan!'
                                    })
                                    $("#cancel-keberatan").click()
                                    loadDataKeberatan()
                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Warning',
                                        html: 'Keberatan Anda sudah dikonfirmasi, silahkan refresh Dashboard'
                                    });
                                }

                                // window.location.reload();

                            } catch (error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    html: 'Terjadi kesalahan!'
                                });
                                console.log(error)
                                modalKeberatan.release();
                            }
                        }
                    })
                })


                const submitDataKeberatan = (data) => {
                    return $.ajax({
                        type: 'POST',
                        url: "/submit-data-keberatan",
                        data: data,
                        dataType: 'json'
                    });
                }
                let configPerihalKeberatanInformasi = {
                    selector: "#perihal-keberatan-informasi",
                    height: "300"
                }
                // tinymce.init(configPerihalKeberatanInformasi);
                var jadwal = null
                async function convertExpDate() {

                    tableKeberatanUI.block()

                    const result = await getDataKeberatan()

                    let ppidKeberatan = result.result
                    console.log('load ppidKeberatan', ppidKeberatan)

                    if (jadwal == null) {
                        jadwal = await jadwalKerja()
                        jadwal = jadwal.result.data
                    }

                    ppidKeberatan.forEach(keberatan => {
                        console.log(`id keberatan ${keberatan.id}`)

                        let expiredDate = keberatan.expired_date
                        if (expiredDate && (keberatan.id_status != 3)) {
                            var start = moment().startOf('day');
                            var end = moment(expiredDate, "YYYY-MM-DD");

                            //Difference in number of days  
                            // yovi
                            let diff = moment.duration(end.diff(start)).asDays()
                            const hariLibur = jadwal.filter(jd => (jd.tanggal >= start.format(
                                    "YYYY-MM-DD") &&
                                jd.tanggal <= end.format("YYYY-MM-DD")) && jd.jenis != '0')
                            expiredDate = diff >= 0 ?
                                `Batas ${diff - hariLibur.length + 1} Hari Kerja` :
                                `Perpanjangan ${Math.abs(diff) - hariLibur.length + 1} Hari Kerja`;
                        } else {
                            expiredDate = '-- Selesai --'
                        }
                        console.log('value exp date id', document.getElementById(
                            `expiredDate${keberatan.id}`))
                        document.getElementById(`expiredDate${keberatan.id}`).innerText =
                            expiredDate

                    });
                    tableKeberatanUI.release()
                }


            })
        </script>
    @endpush


</x-frontend.layout>
