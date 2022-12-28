
$(document).ready(function() {
    console.log('dari external')
    //Modal Keberatan
    var modalKeberatan = new KTBlockUI(document.getElementById('content-modal-keberatan'), {
        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
    });
    var tableKeberatanUI = new KTBlockUI(document.getElementById('bd-table-keberatan'), {
        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
    });


    // var bodyUI = new KTBlockUI(document.getElementsByTagName("body")[0], {
    //             message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
    //         });   
    $("#btn-show-modal-keberatan").on('click', function() {
        loadModalKeberatan()
    })

   
    async function loadModalKeberatan(type = 'add-new', data = null) {
        modalKeberatan.block()
        const user = {!! Auth::user()->toJson() !!}

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

        modalKeberatan.release()
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

    function checkKategori() {
        let selectedKategoriId = $("#select-kategori-keberatan")[0].value
        if (selectedKategoriId == 3 || selectedKategoriId == 4 || selectedKategoriId == 5) {
            document.getElementById('select-permohonan-sebelumnya').hidden = false
        } else {
            document.getElementById('select-permohonan-sebelumnya').hidden = true
        }
    }
    $("#select-kategori-keberatan").on("change", checkKategori);


    
    let configPerihalKeberatanInformasi = {
        selector: "#perihal-keberatan-informasi",
        height: "300"
    }

    tinymce.init(configPerihalKeberatanInformasi);

    $("#save-permohonan").click(function() {
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

        if (data.informasi_diminta.length == 0 || data.tujuan_informasi.length == 0 || data
            .id_cara == '-' || data.id_mendapatkan == '-') {
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
            if (dt.isConfirmed) {

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

    $("#save-keberatan").click(function() {
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

        if (data.informasi_diminta.length == 0 || data.tujuan_informasi.length == 0 || data
            .id_cara == '-' || data.id_mendapatkan == '-') {
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
            if (dt.isConfirmed) {

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
