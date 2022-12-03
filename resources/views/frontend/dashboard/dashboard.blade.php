<x-frontend.layout>
    @push('head-scripts')
        
        <link href="{{ asset('ppid_fe/assets/css/page/dashboard/index.css') }}" rel="stylesheet" />     
        <link href="{{ asset('template/dist/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>   
        <style>            
            .blockui{position:relative}
            .blockui .blockui-overlay{
                transition:all .3s ease;position:absolute;top:0;bottom:0;left:0;right:0;display:flex;justify-content:center;align-items:center;
                background-color:rgba(25, 22, 22, 0.47)
            }
            .blockui .blockui-overlay .spinner-border{height:1.35rem;width:1.35rem}
            .blockui .blockui-message{
                display:flex;align-items:center;border-radius:.475rem;
                box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
                background-color:#fff;
                color: #5E6278;
                font-weight:600;margin:0!important;width:auto;padding:.85rem 1.75rem!important
            }
            .blockui .blockui-message .spinner-border{margin-right:.65rem}
            .form-select.form-select-solid {
                background-color: #f5f8fa;
                border-color: #f5f8fa;
                color: #5E6278
                transition: color 0.2s ease;
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

            div.dataTables_length + div.dataTables_info {
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

.page-link.disabled, .disabled > .page-link {
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

.page-item .page-link .previous, .page-item .page-link .next {
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
                                    <tbody id="bd-table-permohonan">
                                        <!-- <tr>
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
                                        </tr> -->
                                                                                
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
        <div class="modal fade" id="exampleModalCenter" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <img src="{{asset('ppid_fe/assets/images/content/icon/ic_people.svg')}}" class="img-fluid"
                                    alt="" />
                                <div class="ml-2">
                                    <div class="name font-weight-bold" id="name-user-modal">
                                        -                                       
                                    </div>
                                    <div class="number" id="nomor-user-modal">-</div>
                                </div>
                                <div class="ml-auto">
                                    <div class="jenis">Jenis pemohon</div>
                                    <div style="text-transform: uppercase" class="type font-weight-bold" id="jpemohon-user-modal">-</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-data mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control tox-target" id="area-informasi-diminta" placeholder="Informasi yang diminta"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" id="select-memperoleh-informasi" placeholder="">
                                            <option>Cara memperoleh informasi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" id="select-memberikan-informasi" placeholder="">
                                            <option>Cara memberikan informasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="area-tujuan-penggunaan"
                                            placeholder="Tujuan penggunaan informasi"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancel-permohonan" class="btn btn-outline-primary-ppid" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" id="save-permohonan" class="btn btn-lg btn-primary-ppid w-25">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="id-permohonan-edited">
    <!-- content -->

    <!-- Content -->

    @push('child-scripts')    
    <script src="{{ asset('template/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('template/dist/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('template/dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    
    <script src="{{ asset('template/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $(document).ready(function(){

            var modalPermohonan = new KTBlockUI(document.getElementById('content-modal-permohonan'), {
                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                    });
            var tablePermohonanUI = new KTBlockUI(document.getElementById('bd-table-permohonan'), {
                        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
                    });   
                    
            // var bodyUI = new KTBlockUI(document.getElementsByTagName("body")[0], {
            //             message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
            //         });   
                    
                        
            $("#btn-show-modal-permohonan").on('click', function(){
                loadModalPermohonan()
            })

            async function loadModalPermohonan(type='add-new', data=null) {
                modalPermohonan.block()
                const user = {!! Auth::user()->toJson() !!}

                $("#name-user-modal").html(user.nama_lengkap)
                $("#nomor-user-modal").html(user.nomor_identitas)
                             
                const ppidJenisPemohon = await getPpidJenisPemohon()
                const jenisPemohon = ppidJenisPemohon.result.find(el => el.id == user.jenis_pemohon)
                if(jenisPemohon != undefined) {
                    $("#jpemohon-user-modal").html(jenisPemohon.name)   
                } else {
                    $("#jpemohon-user-modal").html('-')   
                }

                await ppidCaraMendapatkan()
                await ppidCaraMemberikan()

                if(type == 'add-new') {
                    tinymce.get("area-informasi-diminta").setContent('')
                    tinymce.get("area-tujuan-penggunaan").setContent('')
                    $("#id-permohonan-edited").val('')
                } else {
                    const dataPermohonan = await ppidPermohonanUser(data)
                    $("#id-permohonan-edited").val(data)
                    tinymce.get("area-informasi-diminta").setContent(dataPermohonan.result.informasi_diminta)
                    tinymce.get("area-tujuan-penggunaan").setContent(dataPermohonan.result.tujuan_informasi)
                    $("#select-memberikan-informasi").val(dataPermohonan.result.id_cara)
                    $("#select-memperoleh-informasi").val(dataPermohonan.result.id_mendapatkan)                    
                }             
                
                modalPermohonan.release()
            }

            
            const ppidPermohonanUser= (id) => {
                return $.ajax({
                    type: 'GET',
                    url: "ppid-data-permohonan-spec/"+id,
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
                initComplete: function () {
                    loadData()
                }
            });

            async function loadData() {
                tablePermohonanUI.block()
                await ppidDataPermohonan()
                tablePermohonanUI.release()
            }

            async function ppidDataPermohonan() {
                try {
                    const result = await getDataPermohonan()
                    const data = result.result
                    let rowData = []
                    for(let i=0; i<data.length; i++) {
                        rowData.push([
                            data[i].ticket_permohonan,
                            data[i].informasi_diminta,
                            data[i].nama_status,
                            '-',
                            '-',
                            `<button class="btn btn-sm edit-permohonan" data-permohonan="${data[i].id}">
                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_edit.svg') }}"
                                    alt="" />
                            </button>
                            <button class="btn btn-sm delete-permohonan" data-permohonan="${data[i].id}">
                                <img src="{{ asset('ppid_fe/assets/images/content/icon/ic_trash.svg') }}"
                                    alt="" />
                            </button>`
                        ])
                    }
                    
                    tablePermohonan.clear().rows.add(rowData).draw()
                } catch (error) {
                    console.log(error.responseText)
                }
            }

            $(document).on('click', '#cancel-permohonan', function(){
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
                    url: "/ppid-data-permohonan/"+id,
                    data: {"_token": "{{ csrf_token() }}"},
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
                    preConfirm: async () => {
                        try {
                            await deleteDataPermohonan(idPermohonan)                            
                        } catch(error) {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        }
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((dt) => {
                    if(dt.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            html: 'Berhasil menghapus data permohonan!'
                        })
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
                    for(let i=0; i<result.result.length; i++) {
                        option += `<option value="${result.result[i].id}">${result.result[i].name}</option>`
                    }
                    $("#select-memperoleh-informasi").html(option)
                } catch(err) {
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
                    for(let i=0; i<result.result.length; i++) {
                        option += `<option value="${result.result[i].id}">${result.result[i].name}</option>`
                    }
                    $("#select-memberikan-informasi").html(option)
                } catch(err) {
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
                        

            let configAreaInformasiDiminta = {selector: "#area-informasi-diminta", height : "300"};
            let configAreaTujuanPenggunaan = {selector: "#area-tujuan-penggunaan", height : "300"};
            tinymce.init(configAreaInformasiDiminta);
            tinymce.init(configAreaTujuanPenggunaan);           

            $("#save-permohonan").click(function(){
                const user = {!! Auth::user()->toJson() !!}
                const data = {
                    'id': $("#id-permohonan-edited").val(),
                    '_token': "{{ csrf_token() }}",
                    'id_ppid_pendaftar': user.id,
                    'ticket_permohonan': '-',
                    'jenis_kanal': 'web',
                    'informasi_diminta': tinymce.get("area-informasi-diminta").getContent(),
                    'tujuan_informasi': tinymce.get("area-tujuan-penggunaan").getContent(),
                    'id_cara': $("#select-memberikan-informasi").val(),
                    'id_mendapatkan': $("#select-memperoleh-informasi").val(),
                    'file_identitas': user.identitas_file_path,
                }

                if(data.informasi_diminta.length == 0 || data.tujuan_informasi.length == 0 || data.id_cara == '-' || data.id_mendapatkan == '-')
                {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Warning',
                        html: 'Isian tidak lengkap!'
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
                    if(dt.isConfirmed) {
                        
                        try {
                            modalPermohonan.block();
                            const result = await submitDataPermohonan(data)
                            modalPermohonan.release();
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses',
                                html: 'Berhasil menyimpan data permohonan!'
                            })
                            $("#cancel-permohonan").click()
                            loadData()
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


</x-frontend.layout>
