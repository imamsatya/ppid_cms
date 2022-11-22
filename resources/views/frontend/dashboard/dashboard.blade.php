<x-frontend.layout>
    @push('head-scripts')
        <link href="{{ asset('ppid_fe/assets/css/page/dashboard/index.css') }}" rel="stylesheet" />
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
                                <button class="btn btn-sm ml-auto" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    + Form Permohonan
                                </button>
                            </div>
                            <div class="body-dashboard mt-4">
                                <table class="table">
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
                                    <tbody>
                                        <tr>
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
                                                    <img src="./assets/images//content/icon/ic_edit.svg"
                                                        alt="" />
                                                </button>
                                                <button class="btn btn-sm">
                                                    <img src="./assets/images//content/icon/ic_trash.svg"
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
                                                    <img src="./assets/images//content/icon/ic_edit.svg"
                                                        alt="" />
                                                </button>
                                                <button class="btn btn-sm">
                                                    <img src="./assets/images//content/icon/ic_trash.svg"
                                                        alt="" />
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                <button class="btn btn-sm ml-auto">+ Form Keberatan</button>
                            </div>
                            <div class="body-dashboard mt-4">
                                <table class="table">
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
                                    <tbody>
                                        <tr>
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
                                                    <img src="./assets/images//content/icon/ic_edit.svg"
                                                        alt="" />
                                                </button>
                                                <button class="btn btn-sm">
                                                    <img src="./assets/images//content/icon/ic_trash.svg"
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
                                                    <img src="./assets/images//content/icon/ic_edit.svg"
                                                        alt="" />
                                                </button>
                                                <button class="btn btn-sm">
                                                    <img src="./assets/images//content/icon/ic_trash.svg"
                                                        alt="" />
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
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
                                <img src="/assets/images/content/icon/ic_people.svg" class="img-fluid"
                                    alt="" />
                                <div class="ml-2">
                                    <div class="name font-weight-bold">
                                        Aulian Farzan Almaher
                                    </div>
                                    <div class="number">352639485700001</div>
                                </div>
                                <div class="ml-auto">
                                    <div class="jenis">Jenis pemohon</div>
                                    <div class="type font-weight-bold">PERORANGAN</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-data mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Informasi yang diminta"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" placeholder="">
                                            <option selected>Cara memperoleh informasi</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" placeholder="">
                                            <option selected>Cara memberikan informasi</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"
                                            placeholder="Tujuan penggunaan informasi"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary-ppid" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" class="btn btn-lg btn-primary-ppid w-25">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->

    <!-- Content -->




</x-frontend.layout>
