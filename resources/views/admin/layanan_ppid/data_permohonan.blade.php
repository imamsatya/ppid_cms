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
                                        <select class="form-select" aria-label="Select Asal Permohonan">
                                            <option> Asal Permohonan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <select class="form-select" aria-label="Select Asal Permohonan">
                                            <option> Status Permohonan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>11 Oktober 2022</td>
                                            <td>---</td>
                                            <td>Pemohon A</td>
                                            <td>Apps</td>
                                            <td> --- </td>
                                            <td>Belum diverifikasi</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>9 Oktober 2022</td>
                                            <td>05/Per-app/01/2022</td>
                                            <td>Pemohon B</td>
                                            <td>Apps</td>
                                            <td>7 Hari hingga batas waktu</td>
                                            <td>Proses</td>
                                            <td><a href="#" class="btn btn-icon btn-primary me-2"><i
                                                        class="bi bi-pencil fs-4 "></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i
                                                        class="bi bi-x-lg fs-4 "></i></a>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

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
                                                <input class="form-check-input" type="radio" value="" id="proses-permohonan" name="konfirmasi-radio">
                                                <label class="form-check-label" for="proses-permohonan">Proses</label>
                                            </div>
                                            
                                        
                                        
                                            <div class="form-check form-check-custom">
                                                <input class="form-check-input" type="radio" value="" id="tolak-permohonan" name="konfirmasi-radio">
                                                <label class="form-check-label" for="tolak-permohonan">Ditolak</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">                        
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save-konfirmasi-permohonan">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" id="id-permohonan-edited">


    @push('child-scripts')    
    <script src="{{ asset('template/dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script>
        $(document).ready(function(){
            var tablePermohonanUI = new KTBlockUI(document.getElementById('bd-table-permohonan-masuk'), {
                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                    });             
            var modalPermohonan = new KTBlockUI(document.getElementById('content-modal-permohonan'), {
                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                    });

            async function loadDataPermintaanMasuk() {
                tablePermohonanUI.block()
                await ppidDataPermohonanMasuk()
                tablePermohonanUI.release()
            }
            

            const getDataPermohonanMasuk = () => {
                return $.ajax({
                    type: 'GET',
                    url: "/admin/ppid-data-permohonan",
                    dataType: 'json'
                });
            }

            async function ppidDataPermohonanMasuk() {
                try {                    
                    const result = await getDataPermohonanMasuk()
                    const data = result.result
                    let rowData = []
                    for(let i=0; i<data.length; i++) {
                        let btnAction = ''
                        if(data[i].id_status == 1) {
                            btnAction = `<a href="javascript:void(0)" class="btn btn-icon btn-primary me-2 confirm-permohonan" data-permohonan="${data[i].id}"><i class="bi bi-check-lg"></i></a>`
                        } else {
                            btnAction = `
                            <a href="javascript:void(0)" class="btn btn-icon btn-primary me-2 edit-permohonan" data-permohonan="${data[i].id}"><i
                                    class="bi bi-pencil fs-4 "></i></a>
                            <a href="javascript:void(0)" class="btn btn-icon btn-danger delete-permohonan" data-permohonan="${data[i].id}"><i
                                    class="bi bi-x-lg fs-4 "></i></a>
                            ` 
                        }
                        rowData.push([
                            i+1,
                            data[i].created_at,
                            data[i].ticket_permohonan,
                            data[i].nama_lengkap,
                            data[i].jenis_kanal,
                            '-',
                            data[i].nama_status,
                            btnAction                           
                        ])
                    }
                    
                    tablePermohonanMasuk.clear().rows.add(rowData).draw()
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
                }
            });

            $("#kt_datatable_dom_positioning_daftarPermohonanSelesai").DataTable({
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
                    ">"
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
                    let option = '<option value="-">-- Status Permohonan --</option>'
                    for(let i=0; i<result.result.length; i++) {
                        option += `<option value="${result.result[i].id}">${result.result[i].name}</option>`
                    }
                    $("#status_permohonan").html(option)
                } catch (error) {
                    console.log(error)
                }
            }

            statusPermohonan()

            let configAreaInformasiDiminta = {selector: "#area-informasi-diminta", height : "300"};
            let configAreaTujuanPenggunaan = {selector: "#area-tujuan-penggunaan", height : "300"};
            tinymce.init(configAreaInformasiDiminta);
            tinymce.init(configAreaTujuanPenggunaan);

            $(document).on('click', '.confirm-permohonan', function(){
                const idPermohonan = $(this).data('permohonan')
                $("#exampleModalCenter").modal('show')
                loadModalPermohonan(idPermohonan)
            })

            // $("#exampleModalCenter").on('shown.bs.modal', function(){
            //     loadModalPermohonan()
            // })

            // $("#exampleModalCenter").on('hidden.bs.modal', function(){
            //     console.log('closing modal')
            // })

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
                console.log(dataPermohonan)
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
                modalPermohonan.release()

                // const user = {!! Auth::user()->toJson() !!}

                // $("#name-user-modal").html(user.nama_lengkap)
                // $("#nomor-user-modal").html(user.nomor_identitas)
                             
                // const ppidJenisPemohon = await getPpidJenisPemohon()
                // const jenisPemohon = ppidJenisPemohon.result.find(el => el.id == user.jenis_pemohon)
                // if(jenisPemohon != undefined) {
                //     $("#jpemohon-user-modal").html(jenisPemohon.name)   
                // } else {
                //     $("#jpemohon-user-modal").html('-')   
                // }

                // await ppidCaraMendapatkan()
                // await ppidCaraMemberikan()

                // if(type == 'add-new') {
                //     tinymce.get("area-informasi-diminta").setContent('')
                //     tinymce.get("area-tujuan-penggunaan").setContent('')
                //     $("#id-permohonan-edited").val('')
                // } else {
                //     const dataPermohonan = await ppidPermohonanUser(data)
                //     $("#id-permohonan-edited").val(data)
                //     tinymce.get("area-informasi-diminta").setContent(dataPermohonan.result.informasi_diminta)
                //     tinymce.get("area-tujuan-penggunaan").setContent(dataPermohonan.result.tujuan_informasi)
                //     $("#select-memberikan-informasi").val(dataPermohonan.result.id_cara)
                //     $("#select-memperoleh-informasi").val(dataPermohonan.result.id_mendapatkan)                    
                // }             
                
                // modalPermohonan.release()
            }
            
        })
    </script>    
    @endpush

</x-admin.layout>
