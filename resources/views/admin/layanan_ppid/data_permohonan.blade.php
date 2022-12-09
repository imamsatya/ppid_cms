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
</style>
@endpush

    <x-slot:isShowAccordion_layananPPID>
        show
        </x-slot>
        <x-slot:isActiveLink_layananPPID>
            active
            </x-slot>
            <x-slot:isActiveLink_dataPermohonan>
                active
                </x-slot>
                <x-slot:subMenuTitle>
                    Data Permohonan
                    </x-slot>

                    <x-slot:mainMenuTitle>
                        Layanan PPID
                        </x-slot>

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
                                            id="kt_daterangepicker_tanggalMasuk_permohonanMasuk" />
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
                                            <th> Batas Waktu </th>
                                            <th>Status</th>
                                            <th>Aksi</th>
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
                                            id="kt_daterangepicker_tanggalMasuk_permohonanSelesai" />
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <select id="asal-selesai" class="form-select" aria-label="Select Asal Permohonan">
                                            <option value="-">-- Asal Permohonan --</option>
                                            <!-- <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option> -->
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <select id="status-selesai" class="form-select" aria-label="Select Asal Permohonan">
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
                                            <th> Batas Waktu </th>
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
                        <div class="form-data mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Informasi diminta</label>
                                        <textarea class="form-control tox-target" id="area-informasi-diminta" placeholder="Informasi yang diminta"></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Cara mendapat informasi</label>
                                        <input type="text" id="memperoleh-informasi" class="form-control" disabled/>
                                    </div>
                                    <div class="form-group mt-4">                                        
                                        <label class="form-label">Cara memberikan informasi</label>
                                        <input type="text" id="memberikan-informasi" class="form-control" disabled/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tujuan Informasi</label>
                                        <textarea class="form-control" id="area-tujuan-penggunaan"
                                            placeholder="Tujuan penggunaan informasi"></textarea>
                                    </div>
                                    <div class="form-group mt-4" id="modal-file-identitas">                                                                                
                                    </div>
                                    <div class="form-group mt-8">  
                                        <div class="d-flex">
                                            
                                            <div class="form-check form-check-custom me-10">
                                                <input class="form-check-input proses-konfirmasi" type="radio" value="proses" id="proses-permohonan" name="konfirmasi-radio">
                                                <label class="form-check-label" for="proses-permohonan">Proses</label>
                                            </div>
                                            
                                            <div class="form-check form-check-custom">
                                                <input class="form-check-input proses-konfirmasi" type="radio" value="tolak" id="tolak-permohonan" name="konfirmasi-radio">
                                                <label class="form-check-label" for="tolak-permohonan">Ditolak</label>
                                            </div>
                                            
                                        </div>                                        
                                    </div>
                                    <div class="form-group mt-4">
                                        <select style="display: none" id="alasan_penolakan" class="form-select"
                                            aria-label="Select Alasan Penolakan">
                                            <option value="-">-- Alasan Penolakan --</option>                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">                        
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save-konfirmasi-permohonan">KIRIM</button>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Informasi diminta</label>
                                        <textarea class="form-control tox-target" id="area-informasi-diminta-answer" placeholder="Informasi yang diminta"></textarea>
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tujuan Informasi</label>
                                        <textarea class="form-control" id="area-tujuan-penggunaan-answer"
                                            placeholder="Tujuan penggunaan informasi"></textarea>
                                    </div>                                                                                                           
                                </div>
                                <div class="col-12 mt-4">
                                    <textarea class="form-control tox-target" id="area-answer"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="form-group">
                                        <label class="form-label">Data Dukung Jawaban</label>
                                        <input type="file" id="file_dukung_answer" class="form-control">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">                        
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save-answer">KIRIM</button>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Informasi diminta</label>
                                        <textarea class="form-control tox-target" id="area-informasi-diminta-forward" placeholder="Informasi yang diminta"></textarea>
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tujuan Informasi</label>
                                        <textarea class="form-control" id="area-tujuan-penggunaan-forward"
                                            placeholder="Tujuan penggunaan informasi"></textarea>
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
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save-forward">Kirim Ke Penghubung</button>
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
                                    <div class="form-group mt-4">
                                        <label class="form-label">Tanggal Masuk</label>
                                        <input type="text" class="form-control" id="detail-tanggal-masuk" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nomor Registrasi</label>
                                        <input type="text" class="form-control" id="detail-noregistrasi" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nama Pemohon</label>
                                        <input type="text" class="form-control" id="detail-nama-pemohon" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Jenis Pemohon</label>
                                        <input type="text" class="form-control" id="detail-jenis-pemohon" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Identitas</label>
                                        <input type="text" class="form-control" id="detail-identitas" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nomor Identitas</label>
                                        <input type="text" class="form-control" id="detail-nomor-identitas" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="detail-alamat" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" id="detail-pekerjaan" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" id="detail-email" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <input type="text" class="form-control" id="detail-status" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 style="text-align: center">Data Permohonan</h4>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Informasi diminta</label>
                                        <textarea class="form-control tox-target" id="area-informasi-diminta-detail" placeholder="Informasi yang diminta"></textarea>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="form-label">Tujuan Informasi</label>
                                        <textarea class="form-control" id="area-tujuan-penggunaan-detail"
                                            placeholder="Tujuan penggunaan informasi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cara mendapat informasi</label>
                                        <input type="text" class="form-control" id="detail-cara-dapat-info" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cara memberi informasi</label>
                                        <input type="text" class="form-control" id="detail-cara-memberi-info" disabled>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">                        
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="cetak-permohonan">CETAK</button>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" id="id-permohonan-edited">


    @push('child-scripts') 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="{{ asset('template/dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script>
        $(document).ready(function(){
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
            

            const getDataPermohonanMasuk = (asal, status) => {
                return $.ajax({
                    type: 'GET',
                    url: `/admin/ppid-data-permohonan?asal=${asal}&status=${status}`,
                    dataType: 'json'
                });
            }

            const getDataPermohonanSelesai = (asal, status) => {
                return $.ajax({
                    type: 'GET',
                    url: `/admin/ppid-data-permohonan-selesai?asal=${asal}&status=${status}`,
                    dataType: 'json'
                });
            }

            async function ppidDataPermohonanMasuk(asal='-', status='-') {
                try {                    
                    const result = await getDataPermohonanMasuk(asal, status)
                    const data = result.result
                    const now = new Date().toJSON().slice(0,10).replace(/-/g,'-').toString()
                    let rowData = []
                    for(let i=0; i<data.length; i++) {
                        let btnAction = ''
                        let ticketAction = ''
                        if(data[i].id_status == 1) {
                            btnAction = `<a href="javascript:void(0)" class="btn btn-icon btn-primary me-2 confirm-permohonan" data-permohonan="${data[i].id}"><i class="bi bi-check-lg"></i></a>`
                            ticketAction = data[i].ticket_permohonan
                        } else {
                            btnAction = `
                            <a href="javascript:void(0)" class="btn btn-icon btn-success me-2 answer-permohonan mb-2" data-permohonan="${data[i].id}"><i class="bi bi-chat-left-quote fs-4"></i></a>
                            <a href="javascript:void(0)" class="btn btn-icon btn-danger forward-permohonan" data-permohonan="${data[i].id}"><i
                                    class="bi bi bi-forward fs-4 "></i></a>
                            ` 
                            ticketAction = `<a href="javascript:void(0)" class="detail-permohonan" data-permohonan="${data[i].id}">${data[i].ticket_permohonan}</a>`
                        }

                        
                        rowData.push([
                            i+1,
                            data[i].created_at.split(' ')[0],
                            ticketAction,
                            data[i].nama_lengkap,
                            data[i].jenis_kanal,
                            data[i].id_status == '1' ? '-' : ( now > data[i].expired_date1 ? data[i].expired_date2 : data[i].expired_date1),
                            data[i].nama_status,
                            btnAction                           
                        ])
                    }
                    
                    tablePermohonanMasuk.clear().rows.add(rowData).draw()
                } catch (error) {
                    console.log(error)
                }
            } 
            // yovi
            async function ppidDataPermohonanSelesai(asal='-', status='-') {
                try {                    
                    const result = await getDataPermohonanSelesai(asal, status)
                    const data = result.result
                    let rowData = []
                    for(let i=0; i<data.length; i++) {
                        let btnAction = ''
                        let ticketAction = ''
                        if(data[i].id_status == 1) {
                            btnAction = `<a href="javascript:void(0)" class="btn btn-icon btn-primary me-2 confirm-permohonan" data-permohonan="${data[i].id}"><i class="bi bi-check-lg"></i></a>`
                            ticketAction = data[i].ticket_permohonan
                        } else {
                            btnAction = `
                            <a href="javascript:void(0)" class="btn btn-icon btn-success me-2 answer-permohonan mb-2" data-permohonan="${data[i].id}"><i class="bi bi-chat-left-quote fs-4"></i></a>
                            <a href="javascript:void(0)" class="btn btn-icon btn-danger forward-permohonan" data-permohonan="${data[i].id}"><i
                                    class="bi bi bi-forward fs-4 "></i></a>
                            ` 
                            ticketAction = `<a href="javascript:void(0)" class="detail-permohonan" data-permohonan="${data[i].id}">${data[i].ticket_permohonan}</a>`
                        }


                        rowData.push([
                            i+1,
                            data[i].created_at,
                            ticketAction,
                            data[i].nama_lengkap,
                            data[i].jenis_kanal,
                            data[i].expired_date2,
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
                initComplete: function () {
                    loadDataPermintaanMasuk()
                },
                "createdRow": function(row, data, dataIndex) {
                    if (data[5] != null && data[5] != '-') {
                        const now = new Date().toJSON().slice(0,10).replace(/-/g,'-').toString()
                        if(now > data[5]) {
                            $(row).css("background-color", "Orange");
                        }
                        // $(row).addClass("warning");
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
                initComplete: function () {
                    loadDataPermintaanSelesai()
                }
            });

            $("#kt_daterangepicker_tanggalMasuk_permohonanMasuk").daterangepicker({
                timePicker: true,
                startDate: moment().startOf("hour"),
                endDate: moment().startOf("hour").add(32, "hour"),
                locale: {
                    format: "M/DD hh:mm A"
                }
            });

            $("#kt_daterangepicker_tanggalMasuk_permohonanSelesai").daterangepicker({
                timePicker: true,
                startDate: moment().startOf("hour"),
                endDate: moment().startOf("hour").add(32, "hour"),
                locale: {
                    format: "M/DD hh:mm A"
                }
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
                    for(let i=0; i<result.result.length; i++) {
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
                    let dataOptionBelumSelesai = result.result.filter(data => [1,2,3].includes(data.id))
                    let option = '<option value="-">-- Status Permohonan --</option>'
                    for(let i=0; i<dataOptionBelumSelesai.length; i++) {
                        option += `<option value="${dataOptionBelumSelesai[i].id}">${dataOptionBelumSelesai[i].name}</option>`
                    }
                    $("#status_permohonan").html(option)

                    let dataOptionSelesai = result.result.filter(data => [4, 5, 6].includes(data.id))
                    let optionSelesai = '<option value="-">-- Status Permohonan --</option>'
                    for(let i=0; i<dataOptionSelesai.length; i++) {
                        optionSelesai += `<option value="${dataOptionSelesai[i].id}">${dataOptionSelesai[i].name}</option>`
                    }
                    $("#status-selesai").html(optionSelesai)
                } catch (error) {
                    console.log(error)
                }
            }

            statusPermohonan()

            let configAreaInformasiDiminta = {selector: "#area-informasi-diminta", height : "300"};
            let configAreaTujuanPenggunaan = {selector: "#area-tujuan-penggunaan", height : "300"};
            let configAreaTujuanPenggunaanAnswer = {selector: "#area-tujuan-penggunaan-answer", height : "300"};
            let configAreaInformasiDimintaAnswer = {selector: "#area-informasi-diminta-answer", height : "300"};
            let configAreaAnswer = {selector: "#area-answer", height : "300"};
            let configAreaTujuanPenggunaanForward = {selector: "#area-tujuan-penggunaan-forward", height : "300"};
            let configAreaInformasiDimintaForward = {selector: "#area-informasi-diminta-forward", height : "300"};
            let configAreaForward = {selector: "#area-forward", height : "300"};
            let configAreaTujuanPenggunaanDetail = {selector: "#area-tujuan-penggunaan-detail", height : "300"};
            let configAreaInformasiDimintaDetail = {selector: "#area-informasi-diminta-detail", height : "300"};
            tinymce.init(configAreaInformasiDiminta);
            tinymce.init(configAreaTujuanPenggunaan);
            tinymce.init(configAreaInformasiDimintaAnswer);
            tinymce.init(configAreaTujuanPenggunaanAnswer);
            tinymce.init(configAreaAnswer);
            tinymce.init(configAreaInformasiDimintaForward);
            tinymce.init(configAreaTujuanPenggunaanForward);
            tinymce.init(configAreaForward);
            tinymce.init(configAreaInformasiDimintaDetail);
            tinymce.init(configAreaTujuanPenggunaanDetail);


            $(document).on('click', '.confirm-permohonan', function(){
                const idPermohonan = $(this).data('permohonan')
                $("#exampleModalCenter").modal('show')
                loadModalPermohonan(idPermohonan)
            })            

            const ppidPermohonanUser= (id) => {
                return $.ajax({
                    type: 'GET',
                    url: "/ppid-data-permohonan-spec/"+id,
                    dataType: 'json'
                })
            }            

            async function loadModalPermohonan(data) {
                modalPermohonan.block()

                const dataPermohonan = await ppidPermohonanUser(data)
                $("#id-permohonan-edited").val(data)
                tinymce.get("area-informasi-diminta").setContent(dataPermohonan.result.informasi_diminta)
                tinymce.get("area-informasi-diminta").getBody().setAttribute('contenteditable', false)
                tinymce.get("area-tujuan-penggunaan").setContent(dataPermohonan.result.tujuan_informasi)
                tinymce.get("area-tujuan-penggunaan").getBody().setAttribute('contenteditable', false)
                $("#memberikan-informasi").val(dataPermohonan.result.cara_memberikan)
                $("#memperoleh-informasi").val(dataPermohonan.result.cara_mendapatkan)  
                $("#modal-file-identitas").html(`
                    <label class="form-label">File identitas</label>
                    <img style="max-width:100%;max-height:100%;" id="file-identitas" src="{{ asset('${dataPermohonan.result.file_identitas}') }}" alt="" srcset="">
                `)
                $('.proses-konfirmasi').prop('checked', false)
                $("#alasan_penolakan").hide()
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

            $(document).on('change', '.proses-konfirmasi', async function(){
                const statusKonfirmasi = $(this).val()
                if(statusKonfirmasi == 'tolak') {
                    modalPermohonan.block()
                    if(templateRejectData == null) {
                        const result = await templateReject()
                        templateRejectData = result.result
                    } 

                    if(optionRejectData == '') {
                        optionRejectData = '<option value="-">-- Alasan Penolakan --</option>'
                        for(let i=0; i<templateRejectData.length; i++) {
                            optionRejectData += `<option value="${templateRejectData[i].id}">${templateRejectData[i].name}</option>`
                        }
                    }
                    
                    $("#alasan_penolakan").html(optionRejectData)
                    $("#alasan_penolakan").show()
                    modalPermohonan.release()
                    return
                }

                $("#alasan_penolakan").hide()
            })

            const submitKonfirmasiPermohonan = (data) => {
                return $.ajax({
                    type: 'POST',
                    url: "/admin/konfirmasi-data-permohonan",
                    data: data,
                    dataType: 'json'
                })
            }

            const jadwalKerja = () => {
                return $.ajax({
                    type: 'GET',
                    url: "/admin/jadwal-kerja",
                    dataType: 'json'
                })
            }

            let jadwal = null
            $(document).on('click', '#save-konfirmasi-permohonan', async function() {
                const statusKonfirmasi = $('input[name="konfirmasi-radio"]:checked').val()
                if(statusKonfirmasi == undefined) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Error',
                        html: 'Isian tidak terisi lengkap!'
                    })
                    return
                }

                const alasanPenolakan = $("#alasan_penolakan").val()
                if(statusKonfirmasi == 'tolak' && alasanPenolakan == '-') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Error',
                        html: 'Isian tidak terisi lengkap!'
                    })
                    return
                }

                try {
                    const data = {
                        '_token': "{{ csrf_token() }}",
                        'statusKonfirmasi': statusKonfirmasi,
                        'alasanPenolakan': alasanPenolakan,
                        'id': $("#id-permohonan-edited").val(),
                        'expired1': '-',
                        'expired2': '-'
                    }                                                          

                    modalPermohonan.block()

                    if(statusKonfirmasi == 'proses') {
                        if(jadwal == null) {
                            jadwal = await jadwalKerja()
                            jadwal = jadwal.result.data
                        }

                        const hariKerja = jadwal.filter(jd => jd.tanggal > new Date().toJSON().slice(0,10).replace(/-/g,'-') && jd.jenis == '0')
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


            $(document).on('click', '.answer-permohonan', function(){
                const idPermohonan = $(this).data('permohonan');
                $("#modalAnswer").modal('show')
                loadModalAnswer(idPermohonan)
            })

            async function loadModalAnswer(data) {
                modalAnswer.block()
                const dataPermohonan = await ppidPermohonanUser(data)
                $("#id-permohonan-edited").val(data)
                tinymce.get("area-informasi-diminta-answer").setContent(dataPermohonan.result.informasi_diminta)
                tinymce.get("area-informasi-diminta-answer").getBody().setAttribute('contenteditable', false)
                tinymce.get("area-tujuan-penggunaan-answer").setContent(dataPermohonan.result.tujuan_informasi)
                tinymce.get("area-tujuan-penggunaan-answer").getBody().setAttribute('contenteditable', false)

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

            $(document).on('click', '#save-answer', async function(){
                let fileDukung = $("#file_dukung_answer")[0].files
                let fd = new FormData()
                if(fileDukung.length > 0) {                    
                    fd.append('file_dukung', fileDukung[0])                    
                } else {
                    fd.append('file_dukung', '')
                }
                fd.append('_token', "{{ csrf_token() }}")
                fd.append('id', $("#id-permohonan-edited").val())
                fd.append('answer', tinymce.get("area-answer").getContent())
                

                if(fd.get('answer') == '') {
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

            $(document).on('click', '.forward-permohonan', function(){
                const idPermohonan = $(this).data('permohonan');
                $("#modalForward").modal('show')
                loadModalForward(idPermohonan)
            })

            async function loadModalForward(data) {
                modalForward.block()
                const dataPermohonan = await ppidPermohonanUser(data)
                $("#id-permohonan-edited").val(data)
                tinymce.get("area-informasi-diminta-forward").setContent(dataPermohonan.result.informasi_diminta)
                tinymce.get("area-informasi-diminta-forward").getBody().setAttribute('contenteditable', false)
                tinymce.get("area-tujuan-penggunaan-forward").setContent(dataPermohonan.result.tujuan_informasi)
                tinymce.get("area-tujuan-penggunaan-forward").getBody().setAttribute('contenteditable', false)

                tinymce.get("area-forward").setContent('')
                $("#diteruskan-kepada").val('-')
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

            $(document).on('click', '#save-forward', async function(){
                const data = {
                    'keterangan': tinymce.get("area-forward").getContent(),
                    'id': $("#id-permohonan-edited").val(),
                    '_token': "{{ csrf_token() }}",
                    'forward_to': $("#diteruskan-kepada").val(),
                    'nota_dinas': $("#nomor-referensi").val()
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

            $(document).on('click', '.detail-permohonan', function(){
                const idPermohonan = $(this).data('permohonan');
                $("#modalDetail").modal('show')
                loadModalDetail(idPermohonan)
            })

            const ppidPendaftar = (data) => {
                return $.ajax({
                    type: 'GET',
                    url: "/admin/ppid-pendaftar/"+data,
                    dataType: 'json'
                })
            }

            async function loadModalDetail(data) {
                modalDetail.block()
                const dataPermohonan = await ppidPermohonanUser(data)
                const dataPemohon = await ppidPendaftar(dataPermohonan.result.id_ppid_pendaftar)

                console.log(dataPermohonan)
                
                $("#id-permohonan-edited").val(data)
                tinymce.get("area-informasi-diminta-detail").setContent(dataPermohonan.result.informasi_diminta)
                tinymce.get("area-informasi-diminta-detail").getBody().setAttribute('contenteditable', false)
                tinymce.get("area-tujuan-penggunaan-detail").setContent(dataPermohonan.result.tujuan_informasi)
                tinymce.get("area-tujuan-penggunaan-detail").getBody().setAttribute('contenteditable', false)
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

                modalDetail.release()
            }

            async function loadDataPermintaanMasukByFilter(asal, status) {
                tablePermohonanUI.block()
                await ppidDataPermohonanMasuk(asal, status)
                tablePermohonanUI.release()
            }

            async function loadDataPermintaanSelesaiByFilter(asal, status) {
                tableSelesaiUI.block()
                await ppidDataPermohonanSelesai(asal, status)
                tableSelesaiUI.release()
            }

            $("#asal_permohonan").on('change', function(){
                const asalPermohonan = $(this).val()
                const statusPermohonan = $("#status_permohonan").val()
                loadDataPermintaanMasukByFilter(asalPermohonan, statusPermohonan)
            })

            $("#status_permohonan").on('change', function(){
                const statusPermohonan = $(this).val()
                const asalPermohonan = $("#asal_permohonan").val()
                loadDataPermintaanMasukByFilter(asalPermohonan, statusPermohonan)
            })

            $("#asal-selesai").on('change', function(){
                const asalPermohonan = $(this).val()
                const statusPermohonan = $("#status-selesai").val()
                loadDataPermintaanSelesaiByFilter(asalPermohonan, statusPermohonan)
            })

            $("#status-selesai").on('change', function(){
                const statusPermohonan = $(this).val()
                const asalPermohonan = $("#asal-selesai").val()
                loadDataPermintaanSelesaiByFilter(asalPermohonan, statusPermohonan)
            })

            $(document).on('click', '#cetak-permohonan', function(){
                modalDetail.block()
                // const { jsPDF } = window.jspdf
                // window.html2canvas = html2canvas;
                // var doc = new jsPDF();            
                // doc.html($("#data-cetak-field")[0], {
                //     callback: function (doc) {
                //         doc.save('Permohonan PPID');
                //     },
                //     width: 170, //target width in the PDF document
                //     windowWidth: 650, //window width in CSS pixels
                //     x: 15,
                //     y: 15,
                // });
                var opt = {
                margin:       1,
                filename:     'myfile.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
                };
                var worker = html2pdf().set(opt).from($("#data-cetak-field")[0]).save();

                modalDetail.release()
                              
            })
            
        })
    </script>    
    @endpush

</x-admin.layout>
