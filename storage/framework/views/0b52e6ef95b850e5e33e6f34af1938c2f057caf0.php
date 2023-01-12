<?php if (isset($component)) { $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50 = $component; } ?>
<?php $component = App\View\Components\Frontend\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Frontend\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startPush('head-scripts'); ?>
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/dashboard/index.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('template/dist/assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet"
            type="text/css" />
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
    <?php $__env->stopPush(); ?>
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
                                <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_people.svg')); ?>"
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
                                <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_people.svg')); ?>"
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

    </div>
    <input type="hidden" id="id-permohonan-edited">
    <input type="hidden" id="id-keberatan-edited">
    <!-- content -->

    <!-- Content -->

    <?php $__env->startPush('child-scripts'); ?>
        <script src="<?php echo e(asset('template/dist/assets/plugins/global/plugins.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('template/dist/assets/js/scripts.bundle.js')); ?>"></script>
        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="<?php echo e(asset('template/dist/assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
        
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
                    const user = <?php echo Auth::user()->toJson(); ?>


                    $("#name-user-modal").html(user.nama_lengkap)
                    $("#nomor-user-modal").html(user.nomor_identitas)

                    const ppidJenisPemohon = await getPpidJenisPemohon()
                    const jenisPemohon = ppidJenisPemohon.result.find(el => el.id == user.jenis_pemohon)
                    if (jenisPemohon != undefined) {
                        $("#jpemohon-user-modal").html(jenisPemohon.name)
                    } else {
                        $("#jpemohon-user-modal").html('-')
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



                var jadwal = null
                async function ppidDataPermohonan() {
                    try {

                        if (jadwal == null) {
                            jadwal = await jadwalKerja()
                            jadwal = jadwal.result.data
                        }

                        const result = await getDataPermohonan()
                        const data = result.result
                        let rowData = []
                        const now = new Date().toJSON().slice(0, 10).replace(/-/g, '-').toString()
                        for (let i = 0; i < data.length; i++) {
                            let btnAction = `<button class="btn btn-sm edit-permohonan" data-permohonan="${data[i].id}">
                                <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_edit.svg')); ?>"
                                    alt="" />
                            </button>
                            <button class="btn btn-sm delete-permohonan" data-permohonan="${data[i].id}">
                                <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_trash.svg')); ?>"
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
                            let jawaban = '-'
                            if (data[i].id_status == 4 || data[i].id_status == 5) {
                                let fileJawaban = ''
                                if (data[i].ket_jawaban_path) {
                                    fileJawaban += `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="mb-4 jawban-file-st" title="File Jawaban" href="<?php echo e(asset('storage/${data[i].ket_jawaban_path}')); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo e(asset('template/src/media/svg/files/pdf.svg')); ?>"
                                                        alt="" /></a>`
                                }
                                jawaban = `
                                ${fileJawaban}
                                ${data[i].file_jawaban ? `<a rel='tooltip' data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" class="jawban-file-st" title="File Pendukung" href="<?php echo e(asset('storage/${data[i].file_jawaban}')); ?>"><img src="<?php echo e(asset('template/src/media/svg/files/dark/folder-document.svg')); ?>"
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
                            "_token": "<?php echo e(csrf_token()); ?>"
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

                $("#save-permohonan").click(function() {
                    const user = <?php echo Auth::user()->toJson(); ?>

                    const data = {
                        'id': $("#id-permohonan-edited").val(),
                        '_token': "<?php echo e(csrf_token()); ?>",
                        'id_ppid_pendaftar': user.id,
                        'ticket_permohonan': '-',
                        'jenis_kanal': 'web',
                        'informasi_diminta': $("#area-informasi-diminta").val(),
                        'tujuan_informasi': $("#area-tujuan-penggunaan").val(),
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
    <?php $__env->stopPush(); ?>

    <?php $__env->startPush('child-scripts'); ?>
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


                async function loadModalKeberatan(type = 'add-new', data = null) {
                    document.getElementById('select-permohonan-sebelumnya').hidden = true
                    modalKeberatan.block()
                    const user = <?php echo Auth::user()->toJson(); ?>


                    $("#name-user-modal-keb").html(user.nama_lengkap)
                    $("#nomor-user-modal-keb").html(user.nomor_identitas)

                    const ppidJenisPemohon = await getPpidJenisPemohon()
                    const jenisPemohon = ppidJenisPemohon.result.find(el => el.id == user.jenis_pemohon)
                    if (jenisPemohon != undefined) {
                        $("#jpemohon-user-modal-keb").html(jenisPemohon.name)
                    } else {
                        $("#jpemohon-user-modal-keb").html('-')
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
                            const userId = <?php echo e(auth()->id()); ?>

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
                            if (data[i].ket_jawaban_path) {
                                jawabanPath = `<a rel='tooltip' data-bs-toggle="tooltip"
                                                                data-bs-custom-class="tooltip-inverse"
                                                                data-bs-placement="top" class="mb-4 jawban-file-st"
                                                                title="File Jawaban"
                                                                href="<?php echo e(asset('storage/${data[i] . ket_jawaban_path}')); ?>"><img
                                                                    src="<?php echo e(asset('template/src/media/svg/files/pdf.svg')); ?>"
                                                                    alt="" /></a>`
                            }

                            let filePendukung = ''
                            if (data[i].file_jawaban) {
                                filePendukung = ` <a rel='tooltip' data-bs-toggle="tooltip"
                                                                data-bs-custom-class="tooltip-inverse"
                                                                data-bs-placement="top" class="jawban-file-st"
                                                                title="File Pendukung"
                                                                href="<?php echo e(asset('storage/${data[i] . file_jawaban}')); ?>"><img
                                                                    src="<?php echo e(asset('template/src/media/svg/files/dark/folder-document.svg')); ?>"
                                                                    alt="" /></a>`
                            }

                            //buttonAction
                            let buttonAction = `<button class="btn btn-sm edit-keberatan" data-keberatan="${data[i].id}">
                                <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_edit.svg')); ?>"
                                    alt="" />
                            </button>
                            <button class="btn btn-sm delete-keberatan" data-keberatan="${data[i].id}">
                                <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_trash.svg')); ?>"
                                    alt="" />
                            </button>`
                            rowData.push([
                                data[i].ticket_keberatan,
                                data[i].perihal_keberatan,
                                data[i].nama_status,
                                expiredDate,
                                (jawabanPath == '' && filePendukung == '') ? '-' :
                                `${jawabanPath} ${filePendukung}`,
                                (data[i].id_status != 1) ? '-' : buttonAction

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

                $("#save-keberatan").click(function() {
                    let permohonanSebelumnya = null
                    if ($("#select-permohonan-sebelumnya")[0].value == '-') {
                        permohonanSebelumnya = null
                    } else {
                        permohonanSebelumnya = $("#select-permohonan-sebelumnya")[0].value
                    }
                    const user = <?php echo Auth::user()->toJson(); ?>

                    const data = {
                        'id': $("#id-keberatan-edited").val(),
                        '_token': "<?php echo e(csrf_token()); ?>",
                        'id_ppid_pendaftar': user.id,
                        'ticket_keberatan': '-',
                        'jenis_kanal': 'web',
                        'perihal_keberatan': $("#perihal-keberatan-informasi")
                            .val(),
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
                    const userId = <?php echo e(auth()->id()); ?>

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
                            "_token": "<?php echo e(csrf_token()); ?>"
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
                                jd.tanggal <= end.format("YYYY-MM-DD")) && jd.jenis != '0'
                                )
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
    <?php $__env->stopPush(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50)): ?>
<?php $component = $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50; ?>
<?php unset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50); ?>
<?php endif; ?>
<?php /**PATH /Data/ppiddev2022/resources/views/frontend/dashboard/dashboard.blade.php ENDPATH**/ ?>