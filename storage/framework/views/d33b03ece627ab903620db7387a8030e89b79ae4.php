<?php if (isset($component)) { $__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0 = $component; } ?>
<?php $component = App\View\Components\Admin\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startPush('head-scripts'); ?>
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
    <?php $__env->stopPush(); ?>

     <?php $__env->slot('isShowAccordion_layananPPID', null, []); ?> 
        show
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('isActiveLink_layananPPID', null, []); ?> 
            active
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveLink_dataPermohonan', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('subMenuTitle', null, []); ?> 
                    Data Permohonan
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('mainMenuTitle', null, []); ?> 
                        Layanan PPID
                         <?php $__env->endSlot(); ?>

                        <h1>Daftar Permohonan </h1>
                        <br>
                        <div class="card card-flush shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Permohonan Masuk </h3>
                                <div class="card-toolbar">

                                </div>
                            </div>
                            <div class="card-body py-5">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mb-0">
                                        <label class="form-label">Periode Tanggal Masuk</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage"
                                            id="kt_daterangepicker_tanggalMasuk_permohonanMasuk" value="" />
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <select id="asal_permohonan" class="form-select"
                                            aria-label="Select Asal Permohonan">
                                            <option value="-"> Asal Permohonan</option>
                                            <!-- <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option> -->
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <select id="status_permohonan" class="form-select">
                                            <option value="-"> Status Permohonan</option>
                                            <!-- <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option> -->
                                        </select>
                                    </div>
                                </div>



                                <table id="kt_datatable_dom_positioning_daftarPermohonanMasuk"
                                    class="table table-row-bordered gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Tanggal Masuk</th>
                                            <th>No Registrasi</th>
                                            <th>Nama Pemohon</th>
                                            <th>Sumber</th>
                                            <th>Batas Waktu</th>
                                            <th>Batas Waktu R</th>
                                            <th>Status</th>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('data permohonan.create')): ?>
                                                <th>Aksi</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody id="bd-table-permohonan-masuk">
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <br>
                        <div class="card card-flush shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Permohonan Selesai </h3>
                                <div class="card-toolbar">
                                </div>
                            </div>
                            <div class="card-body py-5">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mb-0">
                                        <label class="form-label">Periode Tanggal Masuk</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage"
                                            id="kt_daterangepicker_tanggalMasuk_permohonanSelesai" value="" />
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <select id="asal-selesai" class="form-select"
                                            aria-label="Select Asal Permohonan">
                                            <option value="-">-- Asal Permohonan --</option>
                                            <!-- <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option> -->
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <select id="status-selesai" class="form-select"
                                            aria-label="Select Asal Permohonan">
                                            <option value="-">-- Status Permohonan --</option>
                                            <!-- <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option> -->
                                        </select>
                                    </div>
                                </div>



                                <table id="kt_datatable_dom_positioning_daftarPermohonanSelesai"
                                    class="table table-striped table-row-bordered gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Tanggal Masuk</th>
                                            <th>No Registrasi</th>
                                            <th>Nama Pemohon</th>
                                            <th>Sumber</th>
                                            <th>Jawaban</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bd-table-permohonan-selesai">
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- modal konfirmasi -->
                        <div class="modal fade" id="exampleModalCenter" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content" id="content-modal-permohonan">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Data Permohonan
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Informasi diminta</label>
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5" id="area-informasi-diminta">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Cara mendapat informasi</label>
                                                        <input type="text" id="memperoleh-informasi"
                                                            class="form-control" disabled />
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Cara memberikan informasi</label>
                                                        <input type="text" id="memberikan-informasi"
                                                            class="form-control" disabled />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Tujuan Informasi</label>
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5" id="area-tujuan-penggunaan">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group mt-4" id="modal-file-identitas">
                                    </div> -->
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
                                                                    id="proses-permohonan" name="konfirmasi-radio">
                                                                <label class="form-check-label"
                                                                    for="proses-permohonan">Proses</label>
                                                            </div>

                                                            <div class="form-check form-check-custom">
                                                                <input class="form-check-input proses-konfirmasi"
                                                                    type="radio" value="tolak"
                                                                    id="tolak-permohonan" name="konfirmasi-radio">
                                                                <label class="form-check-label"
                                                                    for="tolak-permohonan">Ditolak</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-4" id="alasan_penolakan_sl">
                                                        <select data-control="select2" data-close-on-select="false"
                                                            data-placeholder="Pilih alasan penolakan"
                                                            data-allow-clear="true" multiple="multiple"
                                                            style="display: none" id="alasan_penolakan"
                                                            class="form-select form-select-solid"
                                                            aria-label="Select Alasan Penolakan">
                                                            <option value="-">-- Alasan Penolakan --</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-top: 15px; display: none"
                                                    id="area_penolakan">

                                                    <div class="form-group">
                                                        <label class="form-label">Jawaban Penolakan</label>
                                                        <textarea class="form-control" id="area-alasan-tolak" placeholder="Jawaban penolakan"></textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"
                                            id="save-konfirmasi-permohonan">KIRIM</button>
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
                                            Data Permohonan
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
                                                                rel="noopener noreferrer">Klik untuk melihat!</a></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Informasi diminta</label>
                                                        <!-- <textarea class="form-control tox-target" id="area-informasi-diminta-answer" placeholder="Informasi yang diminta"></textarea> -->
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5"
                                                                id="area-informasi-diminta-answer">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Tujuan Informasi</label>
                                                        <!-- <textarea class="form-control" id="area-tujuan-penggunaan-answer" placeholder="Tujuan penggunaan informasi"></textarea> -->
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5"
                                                                id="area-tujuan-penggunaan-answer">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
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

                        <!-- modal forward -->
                        <div class="modal fade" id="modalForward" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content" id="content-modal-forward">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Data Permohonan
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-data">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">File Identitas</label>
                                                        <p><a href="javascript:void(0)"
                                                                id="file-identitas-modalforward" target="_blank"
                                                                rel="noopener noreferrer">Klik untuk melihat!</a></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Informasi diminta</label>
                                                        <!-- <textarea class="form-control tox-target" id="area-informasi-diminta-forward" placeholder="Informasi yang diminta"></textarea> -->
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5"
                                                                id="area-informasi-diminta-forward">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Tujuan Informasi</label>
                                                        <!-- <textarea class="form-control" id="area-tujuan-penggunaan-forward" placeholder="Tujuan penggunaan informasi"></textarea> -->
                                                        <div class="card card-flush shadow-sm">
                                                            <div class="card-body py-5"
                                                                id="area-tujuan-penggunaan-forward">
                                                                Lorem Ipsum is simply dummy text...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Diteruskan kepada</label>
                                                    <select class="form-control" id="diteruskan-kepada">
                                                        <option value="-">-- Pilih User --</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Nomor ND (Referensi)</label>
                                                    <input type="text" class="form-control" id="nomor-referensi">
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <textarea class="form-control tox-target" id="area-forward"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="save-forward">Kirim Ke
                                            Penghubung</button>
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
                                            Data Permohonan
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
                                                    <div class="form-group">
                                                        <label class="form-label">Tanggal Status</label>
                                                        <input type="text" class="form-control"
                                                            id="tanggal-status" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 style="text-align: center">Data Permohonan</h4>
                                                    <div class="form-group mt-4 mb-4">
                                                        <label class="form-label">Informasi diminta</label>
                                                        <div id="area-informasi-diminta-detail-notiny"
                                                            class="form-detail-ctm">-</div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Tujuan Informasi</label>
                                                        <div id="area-tujuan-penggunaan-detail-notiny"
                                                            class="form-detail-ctm">-</div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Cara mendapat informasi</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-cara-dapat-info" disabled>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Cara memberi informasi</label>
                                                        <input type="text" class="form-control"
                                                            id="detail-cara-memberi-info" disabled>
                                                    </div>
                                                    <div class="form-group" id="file-identitas-detail"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"
                                            id="cetak-permohonan">CETAK</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="id-permohonan-edited">


                        <?php $__env->startPush('child-scripts'); ?>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"
                                integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw=="
                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                            <!-- <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
                                                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
                                                                                                integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
                                                                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
                            <script src="<?php echo e(asset('template/dist/assets/plugins/custom/tinymce/tinymce.bundle.js')); ?>"></script>
                            <script>
                                $(document).ready(function() {
                                    $("body").tooltip({
                                        selector: '[rel="tooltip"]'
                                    });
                                    var tablePermohonanUI = new KTBlockUI(document.getElementById('bd-table-permohonan-masuk'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });
                                    var tableSelesaiUI = new KTBlockUI(document.getElementById('bd-table-permohonan-selesai'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });
                                    var modalPermohonan = new KTBlockUI(document.getElementById('content-modal-permohonan'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });
                                    var modalAnswer = new KTBlockUI(document.getElementById('content-modal-answer'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });

                                    var modalForward = new KTBlockUI(document.getElementById('content-modal-forward'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });

                                    var modalDetail = new KTBlockUI(document.getElementById('content-modal-detail'), {
                                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                                    });

                                    async function loadDataPermintaanMasuk() {
                                        tablePermohonanUI.block()
                                        await ppidDataPermohonanMasuk()
                                        tablePermohonanUI.release()
                                    }

                                    async function loadDataPermintaanSelesai() {
                                        tableSelesaiUI.block()
                                        await ppidDataPermohonanSelesai()
                                        tableSelesaiUI.release()
                                    }


                                    const getDataPermohonanMasuk = (asal, status, date) => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: `/admin/ppid-data-permohonan?asal=${asal}&status=${status}&datestart=${date != null ? `${date.start}` : '-'}&dateend=${date != null ? `${date.end}` : '-'}`,
                                            dataType: 'json'
                                        });
                                    }

                                    const getDataPermohonanSelesai = (asal, status, date) => {
                                        return $.ajax({
                                            type: 'GET',
                                            // url: `/admin/ppid-data-permohonan-selesai?asal=${asal}&status=${status}`,
                                            url: `/admin/ppid-data-permohonan-selesai?asal=${asal}&status=${status}&datestart=${date != null ? `${date.start}` : '-'}&dateend=${date != null ? `${date.end}` : '-'}`,
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

                                    async function ppidDataPermohonanMasuk(asal = '-', status = '-', date = null) {
                                        try {

                                            if (jadwal == null) {
                                                jadwal = await jadwalKerja()
                                                jadwal = jadwal.result.data
                                            }

                                            const result = await getDataPermohonanMasuk(asal, status, date)
                                            const data = result.result
                                            const now = new Date().toJSON().slice(0, 10).replace(/-/g, '-').toString()
                                            let rowData = []
                                            for (let i = 0; i < data.length; i++) {
                                                let btnAction = ''
                                                let ticketAction = ''
                                                if (data[i].id_status == 1) {
                                                    btnAction =
                                                        `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Konfirmasi" href="javascript:void(0)" class="btn btn-icon btn-primary me-2 confirm-permohonan" data-permohonan="${data[i].id}"><i class="bi bi-check-lg"></i></a>`
                                                    ticketAction = data[i].ticket_permohonan
                                                } else {
                                                    btnAction = `
                            <a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Jawab" href="javascript:void(0)" class="btn btn-icon btn-success me-2 answer-permohonan mb-2" data-permohonan="${data[i].id}"><i class="bi bi-chat-left-quote fs-4"></i></a>
                            <a ${data[i].id_status == 3 ? 'style="pointer-events: none; background-color: rgb(229, 229, 229) !important"' : ''} rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Teruskan" href="javascript:void(0)" class="btn btn-icon btn-danger forward-permohonan" data-permohonan="${data[i].id}"><i
                                    class="bi bi bi-forward fs-4 "></i></a>
                            `
                                                    ticketAction =
                                                        `<a href="javascript:void(0)" class="detail-permohonan" data-permohonan="${data[i].id}">${data[i].ticket_permohonan}</a>`
                                                }

                                                let expiredDate = now > data[i].expired_date1 ? data[i].expired_date2 : data[i]
                                                    .expired_date1
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
                                                        `Perpangjangan ${Math.abs(diff) - hariLibur.length + 1} Hari Kerja`;
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
                                                    data[i].id_status == '1' ? '-' : (now > data[i].expired_date1 ? data[i]
                                                        .expired_date2 : data[i].expired_date1),
                                                    data[i].nama_status,
                                                    btnAction
                                                ])
                                            }

                                            tablePermohonanMasuk.clear().rows.add(rowData).draw()
                                        } catch (error) {
                                            console.log(error)
                                        }
                                    }

                                    async function ppidDataPermohonanSelesai(asal = '-', status = '-', date = null) {
                                        try {
                                            const result = await getDataPermohonanSelesai(asal, status, date)
                                            const data = result.result
                                            let rowData = []
                                            for (let i = 0; i < data.length; i++) {
                                                let btnAction = ''
                                                let ticketAction = ''
                                                if (data[i].id_status == 1) {
                                                    btnAction =
                                                        `<a href="javascript:void(0)" class="btn btn-icon btn-primary me-2 confirm-permohonan" data-permohonan="${data[i].id}"><i class="bi bi-check-lg"></i></a>`
                                                    ticketAction = data[i].ticket_permohonan
                                                } else {
                                                    btnAction = `
    <a href="javascript:void(0)" class="btn btn-icon btn-success me-2 answer-permohonan mb-2" data-permohonan="${data[i].id}"><i class="bi bi-chat-left-quote fs-4"></i></a>
    <a href="javascript:void(0)" class="btn btn-icon btn-danger forward-permohonan" data-permohonan="${data[i].id}"><i
            class="bi bi bi-forward fs-4 "></i></a>
    `
                                                    ticketAction =
                                                        `<a href="javascript:void(0)" class="detail-permohonan" data-permohonan="${data[i].id}">${data[i].ticket_permohonan}</a>`
                                                }

                                                let jawaban = '-'
                                                if (data[i].id_status == 4 || data[i].id_status == 5) {
                                                    let fileJawaban = ''
                                                    if (data[i].ket_jawaban_path) {
                                                        fileJawaban += `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="mb-4 jawban-file-st" title="File Jawaban" href="<?php echo e(asset('storage/${data[i].ket_jawaban_path}')); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo e(asset('template/src/media/svg/files/pdf.svg')); ?>"
                                                        alt="" /></a>`
                                                    }
                                                    jawaban = `
                                ${fileJawaban}
                                ${data[i].file_jawaban ? `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="jawban-file-st" title="File Pendukung" href="<?php echo e(asset('storage/${data[i].file_jawaban}')); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo e(asset('template/src/media/svg/files/dark/folder-document.svg')); ?>"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        alt="" /></a>` : '' }
                            `
                                                }


                                                rowData.push([
                                                    i + 1,
                                                    data[i].created_at.split(' ')[0].split('-').reverse().join('-'),
                                                    ticketAction,
                                                    data[i].nama_lengkap,
                                                    data[i].jenis_kanal,
                                                    jawaban,
                                                    data[i].nama_status,
                                                ])
                                            }

                                            tablePermohonanSelesai.clear().rows.add(rowData).draw()
                                        } catch (error) {
                                            console.log(error)
                                        }
                                    }

                                    var tablePermohonanMasuk = $("#kt_datatable_dom_positioning_daftarPermohonanMasuk").DataTable({
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
                                        columnDefs: [{
                                            target: 6,
                                            visible: false,
                                            searchable: false
                                        }],
                                        "createdRow": function(row, data, dataIndex) {
                                            if (data[5] != null && data[5] != '-') {

                                                let expiredDate = data[6]
                                                var start = moment().startOf('day');
                                                var end = moment(expiredDate, "YYYY-MM-DD");
                                                //Difference in number of days  
                                                let diff = moment.duration(end.diff(start)).asDays()

                                                if (diff < 0) {
                                                    $(row).addClass("bg-light-danger text-danger")
                                                }
                                            }
                                        },
                                    });

                                    var tablePermohonanSelesai = $("#kt_datatable_dom_positioning_daftarPermohonanSelesai").DataTable({
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

                                    $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").daterangepicker({
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
                                        const asalPermohonan = $("#asal_permohonan").val()
                                        const statusPermohonan = $("#status_permohonan").val()
                                        loadDataPermintaanMasukByFilter(asalPermohonan, statusPermohonan, filterDate)
                                    });

                                    $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").val('')

                                    $('input[id="kt_daterangepicker_tanggalMasuk_permohonanMasuk"]').on('apply.daterangepicker', function(
                                        ev, picker) {
                                        $(this).val(picker.startDate.format('DD/MM/Y') + ' - ' + picker.endDate.format('DD/MM/Y'));
                                    });

                                    $('input[id="kt_daterangepicker_tanggalMasuk_permohonanMasuk"]').on('cancel.daterangepicker', function(
                                        ev, picker) {
                                        $(this).val('');
                                        // trigger filter
                                        const asalPermohonan = $("#asal_permohonan").val()
                                        const statusPermohonan = $("#status_permohonan").val()
                                        loadDataPermintaanMasukByFilter(asalPermohonan, statusPermohonan)
                                    });

                                    $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").daterangepicker({
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
                                        const asalPermohonan = $("#asal-selesai").val()
                                        const statusPermohonan = $("#status-selesai").val()
                                        loadDataPermintaanSelesaiByFilter(asalPermohonan, statusPermohonan, filterDate)
                                    });

                                    $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").val('')

                                    $('input[id="kt_daterangepicker_tanggalMasuk_permohonanSelesai"]').on('apply.daterangepicker', function(
                                        ev, picker) {
                                        console.log('here')
                                        $(this).val(picker.startDate.format('DD/MM/Y') + ' - ' + picker.endDate.format('DD/MM/Y'));
                                    });

                                    $('input[id="kt_daterangepicker_tanggalMasuk_permohonanSelesai"]').on('cancel.daterangepicker',
                                        function(ev, picker) {
                                            $(this).val('');
                                            // trigger filter
                                            const asalPermohonan = $("#asal-selesai").val()
                                            const statusPermohonan = $("#status-selesai").val()
                                            loadDataPermintaanSelesaiByFilter(asalPermohonan, statusPermohonan)
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
                                            let option = '<option value="-">-- Asal Permohonan --</option>'
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

                                    const getStatusPermohonan = () => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: '/ppid-status-permohonan',
                                            dataType: 'json'
                                        })
                                    }

                                    async function statusPermohonan() {
                                        try {
                                            const result = await getStatusPermohonan()
                                            let dataOptionBelumSelesai = result.result.filter(data => [1, 2, 3].includes(data.id))
                                            let option = '<option value="-">-- Status Permohonan --</option>'
                                            for (let i = 0; i < dataOptionBelumSelesai.length; i++) {
                                                option +=
                                                    `<option value="${dataOptionBelumSelesai[i].id}">${dataOptionBelumSelesai[i].name}</option>`
                                            }
                                            $("#status_permohonan").html(option)

                                            let dataOptionSelesai = result.result.filter(data => [4, 5, 6].includes(data.id))
                                            let optionSelesai = '<option value="-">-- Status Permohonan --</option>'
                                            for (let i = 0; i < dataOptionSelesai.length; i++) {
                                                optionSelesai +=
                                                    `<option value="${dataOptionSelesai[i].id}">${dataOptionSelesai[i].name}</option>`
                                            }
                                            $("#status-selesai").html(optionSelesai)
                                        } catch (error) {
                                            console.log(error)
                                        }
                                    }

                                    statusPermohonan()

                                    // let configAreaInformasiDiminta = {selector: "#area-informasi-diminta", height : "300"};
                                    // let configAreaTujuanPenggunaan = {selector: "#area-tujuan-penggunaan", height : "300"};
                                    // let configAreaTujuanPenggunaanAnswer = {selector: "#area-tujuan-penggunaan-answer", height : "300"};
                                    // let configAreaInformasiDimintaAnswer = {selector: "#area-informasi-diminta-answer", height : "300"};
                                    let configAreaAlasanTolak = {
                                        selector: "#area-alasan-tolak",
                                        height: "300"
                                    };

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
                                    tinymce.init(configAreaAlasanTolak);


                                    $(document).on('click', '.confirm-permohonan', function() {
                                        const idPermohonan = $(this).data('permohonan')
                                        $("#exampleModalCenter").modal('show')
                                        loadModalPermohonan(idPermohonan)
                                    })

                                    const ppidPermohonanUser = (id) => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: "/ppid-data-permohonan-spec/" + id,
                                            dataType: 'json'
                                        })
                                    }

                                    async function loadModalPermohonan(data) {
                                        modalPermohonan.block()

                                        const dataPermohonan = await ppidPermohonanUser(data)
                                        $("#id-permohonan-edited").val(data)
                                        $("#area-informasi-diminta").html(dataPermohonan.result.informasi_diminta)
                                        // tinymce.get("area-informasi-diminta").setContent(dataPermohonan.result.informasi_diminta)
                                        // tinymce.get("area-informasi-diminta").getBody().setAttribute('contenteditable', false)
                                        $("#area-tujuan-penggunaan").html(dataPermohonan.result.tujuan_informasi)
                                        // tinymce.get("area-tujuan-penggunaan").setContent(dataPermohonan.result.tujuan_informasi)
                                        // tinymce.get("area-tujuan-penggunaan").getBody().setAttribute('contenteditable', false)

                                        tinymce.get("area-alasan-tolak").setContent('')

                                        $("#file-identitas-modalkonfirmasi").prop('href',
                                            `<?php echo e(asset('storage/${dataPermohonan.result.file_identitas}')); ?>`)
                                        $("#memberikan-informasi").val(dataPermohonan.result.cara_memberikan)
                                        $("#memperoleh-informasi").val(dataPermohonan.result.cara_mendapatkan)
                                        // $("#modal-file-identitas").html(`
            //     <label class="form-label">File identitas</label>
            //     <img style="max-width:100%;max-height:100%;" id="file-identitas" src="<?php echo e(asset('${dataPermohonan.result.file_identitas}')); ?>" alt="" srcset="">
            // `)
                                        $('.proses-konfirmasi').prop('checked', false)
                                        $("#alasan_penolakan_sl").hide()
                                        $("#alasan_penolakan").val('').trigger('change')
                                        $("#area_penolakan").hide()
                                        modalPermohonan.release()
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
                                            modalPermohonan.block()
                                            if (templateRejectData == null) {
                                                const result = await templateReject()
                                                templateRejectData = result.result
                                            }

                                            if (optionRejectData == '') {
                                                // optionRejectData = '<option value="-">-- Alasan Penolakan --</option>'
                                                optionRejectData = ''
                                                for (let i = 0; i < templateRejectData.length; i++) {
                                                    optionRejectData +=
                                                        `<option value="${templateRejectData[i].id}">${templateRejectData[i].name}</option>`
                                                }
                                            }

                                            $("#alasan_penolakan").html(optionRejectData)
                                            $("#alasan_penolakan_sl").show()
                                            $("#area_penolakan").show()
                                            modalPermohonan.release()
                                            return
                                        }

                                        $("#alasan_penolakan").val('').trigger('change')
                                        $("#alasan_penolakan_sl").hide()
                                        $("#area_penolakan").hide()
                                    })

                                    const submitKonfirmasiPermohonan = (data) => {
                                        return $.ajax({
                                            type: 'POST',
                                            url: "/admin/konfirmasi-data-permohonan",
                                            data: data,
                                            dataType: 'json'
                                        })
                                    }



                                    var jadwal = null
                                    $(document).on('click', '#save-konfirmasi-permohonan', async function() {
                                        const statusKonfirmasi = $('input[name="konfirmasi-radio"]:checked').val()
                                        if (statusKonfirmasi == undefined) {
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Error',
                                                html: 'Isian tidak terisi lengkap!'
                                            })
                                            return
                                        }

                                        const alasanPenolakan = $("#alasan_penolakan").val()
                                        const areaAlasanPenolakan = tinymce.get("area-alasan-tolak").getContent()
                                        if (statusKonfirmasi == 'tolak' && (alasanPenolakan.length == 0 || areaAlasanPenolakan
                                                .length == 0)) {
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Error',
                                                html: 'Isian tidak terisi lengkap!'
                                            })
                                            return
                                        }

                                        try {
                                            const data = {
                                                '_token': "<?php echo e(csrf_token()); ?>",
                                                'statusKonfirmasi': statusKonfirmasi,
                                                'alasanPenolakan': alasanPenolakan,
                                                'areaAlasanPenolakan': areaAlasanPenolakan,
                                                'id': $("#id-permohonan-edited").val(),
                                                'expired1': '-',
                                                'expired2': '-'
                                            }

                                            modalPermohonan.block()

                                            if (statusKonfirmasi == 'proses') {
                                                if (jadwal == null) {
                                                    jadwal = await jadwalKerja()
                                                    jadwal = jadwal.result.data
                                                }

                                                const hariKerja = jadwal.filter(jd => jd.tanggal > new Date().toJSON().slice(0,
                                                    10).replace(/-/g, '-') && jd.jenis == '0')
                                                data['expired1'] = hariKerja[8] ? hariKerja[8].tanggal : '2022-12-31'
                                                data['expired2'] = hariKerja[15] ? hariKerja[15].tanggal : '2022-12-31'
                                            }

                                            const result = await submitKonfirmasiPermohonan(data)
                                            modalPermohonan.release()
                                            $("#exampleModalCenter").modal('hide')
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Sukses',
                                                html: result.result
                                            })
                                            loadDataPermintaanMasuk()
                                            loadDataPermintaanSelesai()
                                        } catch (error) {
                                            modalPermohonan.release()
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                html: 'Something went wrong!'
                                            })
                                            console.log(error)
                                        }
                                    })


                                    $(document).on('click', '.answer-permohonan', function() {
                                        const idPermohonan = $(this).data('permohonan');
                                        $("#modalAnswer").modal('show')
                                        loadModalAnswer(idPermohonan)
                                    })

                                    async function loadModalAnswer(data) {
                                        modalAnswer.block()
                                        const dataPermohonan = await ppidPermohonanUser(data)
                                        $("#id-permohonan-edited").val(data)
                                        $("#file-identitas-modalanswer").prop('href',
                                            `<?php echo e(asset('storage/${dataPermohonan.result.file_identitas}')); ?>`)
                                        // tinymce.get("area-informasi-diminta-answer").setContent(dataPermohonan.result.informasi_diminta)
                                        // tinymce.get("area-informasi-diminta-answer").getBody().setAttribute('contenteditable', false)
                                        $("#area-informasi-diminta-answer").html(dataPermohonan.result.informasi_diminta)
                                        // tinymce.get("area-tujuan-penggunaan-answer").setContent(dataPermohonan.result.tujuan_informasi)
                                        // tinymce.get("area-tujuan-penggunaan-answer").getBody().setAttribute('contenteditable', false)
                                        $("#area-tujuan-penggunaan-answer").html(dataPermohonan.result.tujuan_informasi)

                                        tinymce.get("area-answer").setContent('')
                                        $("#file_dukung_answer").val(null)
                                        modalAnswer.release()
                                    }

                                    const submitAnswer = (data) => {
                                        return $.ajax({
                                            type: 'POST',
                                            url: "/admin/submit-answer-permohonan",
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
                                        fd.append('_token', "<?php echo e(csrf_token()); ?>")
                                        fd.append('id', $("#id-permohonan-edited").val())
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

                                    $(document).on('click', '.forward-permohonan', function() {
                                        const idPermohonan = $(this).data('permohonan');
                                        $("#modalForward").modal('show')
                                        loadModalForward(idPermohonan)
                                    })

                                    const getUserPenghubung = (data) => {
                                        return $.ajax({
                                            type: 'GET',
                                            url: "/admin/users-penghubung",
                                            dataType: 'json'
                                        })
                                    }

                                    async function loadModalForward(data) {
                                        modalForward.block()
                                        const daftarUserPenghubung = await getUserPenghubung()
                                        let optionUserPenghubung = '<option value="-">-- Pilih User --</option>'
                                        for (let i = 0; i < daftarUserPenghubung.result.length; i++) {
                                            optionUserPenghubung +=
                                                `<option value="${daftarUserPenghubung.result[i].id}">${daftarUserPenghubung.result[i].name}</option>`
                                        }
                                        $("#diteruskan-kepada").html(optionUserPenghubung)
                                        const dataPermohonan = await ppidPermohonanUser(data)
                                        $("#id-permohonan-edited").val(data)
                                        // tinymce.get("area-informasi-diminta-forward").setContent(dataPermohonan.result.informasi_diminta)
                                        // tinymce.get("area-informasi-diminta-forward").getBody().setAttribute('contenteditable', false)
                                        $("#area-informasi-diminta-forward").html(dataPermohonan.result.informasi_diminta)
                                        // tinymce.get("area-tujuan-penggunaan-forward").setContent(dataPermohonan.result.tujuan_informasi)
                                        // tinymce.get("area-tujuan-penggunaan-forward").getBody().setAttribute('contenteditable', false)
                                        $("#area-tujuan-penggunaan-forward").html(dataPermohonan.result.tujuan_informasi)

                                        tinymce.get("area-forward").setContent('')

                                        $("#file-identitas-modalforward").prop('href',
                                            `<?php echo e(asset('storage/${dataPermohonan.result.file_identitas}')); ?>`)

                                        $("#nomor-referensi").val('')
                                        modalForward.release()
                                    }

                                    const submitForward = (data) => {
                                        return $.ajax({
                                            type: 'POST',
                                            url: "/admin/submit-forward-permohonan",
                                            data: data,
                                            dataType: 'json'
                                        })
                                    }

                                    $(document).on('click', '#save-forward', async function() {
                                        const data = {
                                            'keterangan': tinymce.get("area-forward").getContent(),
                                            'id': $("#id-permohonan-edited").val(),
                                            '_token': "<?php echo e(csrf_token()); ?>",
                                            'forward_to': $("#diteruskan-kepada").val(),
                                            'nota_dinas': $("#nomor-referensi").val()
                                        }

                                        if (data.forward_to == '-') {
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Error',
                                                html: 'User tujuan diteruskan belum dipilih!'
                                            })

                                            return
                                        }

                                        try {
                                            modalForward.block()
                                            const result = await submitForward(data)
                                            modalForward.release()
                                            $("#modalForward").modal('hide')
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Sukses',
                                                html: result.result
                                            })
                                            loadDataPermintaanMasuk()
                                        } catch (error) {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                html: 'Something went wrong!'
                                            })
                                            console.log(error)
                                        }
                                    })

                                    $(document).on('click', '.detail-permohonan', function() {
                                        const idPermohonan = $(this).data('permohonan');
                                        $("#modalDetail").modal('show')
                                        loadModalDetail(idPermohonan)
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
                                        const dataPermohonan = await ppidPermohonanUser(data)
                                        const dataPemohon = await ppidPendaftar(dataPermohonan.result.id_ppid_pendaftar)

                                        $("#id-permohonan-edited").val(data)

                                        $("#area-tujuan-penggunaan-detail-notiny").html(dataPermohonan.result.tujuan_informasi)
                                        $("#area-informasi-diminta-detail-notiny").html(dataPermohonan.result.informasi_diminta)
                                        $("#detail-cara-memberi-info").val(dataPermohonan.result.cara_memberikan)
                                        $("#detail-cara-dapat-info").val(dataPermohonan.result.cara_mendapatkan)

                                        $("#detail-tanggal-masuk").val(dataPemohon.result.created_at)
                                        $("#detail-noregistrasi").val(dataPermohonan.result.ticket_permohonan)
                                        $("#detail-nama-pemohon").val(dataPemohon.result.nama_lengkap)
                                        $("#detail-jenis-pemohon").val(dataPemohon.result.nama_jenis_pemohon)
                                        $("#detail-identitas").val(dataPemohon.result.nama_jenis_identitas)
                                        $("#detail-nomor-identitas").val(dataPemohon.result.nomor_identitas)
                                        $("#detail-alamat").val(dataPemohon.result.alamat)
                                        $("#detail-pekerjaan").val(dataPemohon.result.pekerjaan)
                                        $("#detail-email").val(dataPemohon.result.email)
                                        $("#detail-status").val(dataPermohonan.result.nama_status_permohonan)
                                        $("#tanggal-status").val(dataPermohonan.result.tanggal_status)
                                        console.log(dataPermohonan.result)
                                        $("#file-identitas-detail").html(`
<label class="form-label">File identitas</label>
<img style="max-width:100%;max-height:100%;" id="file-identitas" src="<?php echo e(asset('storage/${dataPermohonan.result.file_identitas}')); ?>" alt="" srcset="">
`)

                                        modalDetail.release()
                                    }

                                    async function loadDataPermintaanMasukByFilter(asal, status, date = null) {
                                        tablePermohonanUI.block()
                                        await ppidDataPermohonanMasuk(asal, status, date)
                                        tablePermohonanUI.release()
                                    }

                                    async function loadDataPermintaanSelesaiByFilter(asal, status, date = null) {
                                        tableSelesaiUI.block()
                                        await ppidDataPermohonanSelesai(asal, status, date)
                                        tableSelesaiUI.release()
                                    }

                                    $("#asal_permohonan").on('change', function() {
                                        const dateSelected = $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").val()
                                        let filterDate = null
                                        if (dateSelected != '') {
                                            filterDate = {
                                                'start': $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").data(
                                                    'daterangepicker').startDate.format('YYYY-MM-DD'),
                                                'end': $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").data(
                                                    'daterangepicker').endDate.format('YYYY-MM-DD')
                                            }
                                        }
                                        const asalPermohonan = $(this).val()
                                        const statusPermohonan = $("#status_permohonan").val()
                                        loadDataPermintaanMasukByFilter(asalPermohonan, statusPermohonan, filterDate)
                                    })

                                    $("#status_permohonan").on('change', function() {
                                        const dateSelected = $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").val()
                                        let filterDate = null
                                        if (dateSelected != '') {
                                            filterDate = {
                                                'start': $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").data(
                                                    'daterangepicker').startDate.format('YYYY-MM-DD'),
                                                'end': $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").data(
                                                    'daterangepicker').endDate.format('YYYY-MM-DD')
                                            }
                                        }
                                        const statusPermohonan = $(this).val()
                                        const asalPermohonan = $("#asal_permohonan").val()
                                        loadDataPermintaanMasukByFilter(asalPermohonan, statusPermohonan, filterDate)
                                    })

                                    $("#asal-selesai").on('change', function() {
                                        const dateSelected = $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").val()
                                        let filterDate = null
                                        if (dateSelected != '') {
                                            filterDate = {
                                                'start': $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").data(
                                                    'daterangepicker').startDate.format('YYYY-MM-DD'),
                                                'end': $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").data(
                                                    'daterangepicker').endDate.format('YYYY-MM-DD')
                                            }
                                        }

                                        const asalPermohonan = $(this).val()
                                        const statusPermohonan = $("#status-selesai").val()
                                        loadDataPermintaanSelesaiByFilter(asalPermohonan, statusPermohonan, filterDate)
                                    })

                                    $("#status-selesai").on('change', function() {
                                        const dateSelected = $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").val()
                                        let filterDate = null
                                        if (dateSelected != '') {
                                            filterDate = {
                                                'start': $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").data(
                                                    'daterangepicker').startDate.format('YYYY-MM-DD'),
                                                'end': $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").data(
                                                    'daterangepicker').endDate.format('YYYY-MM-DD')
                                            }
                                        }

                                        const statusPermohonan = $(this).val()
                                        const asalPermohonan = $("#asal-selesai").val()
                                        loadDataPermintaanSelesaiByFilter(asalPermohonan, statusPermohonan, filterDate)
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
                        <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0)): ?>
<?php $component = $__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0; ?>
<?php unset($__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0); ?>
<?php endif; ?>
<?php /**PATH /Data/ppiddev2022/resources/views/admin/layanan_ppid/data_permohonan.blade.php ENDPATH**/ ?>