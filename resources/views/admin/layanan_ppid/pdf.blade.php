<?php
// echo '<pre>';
// print_r($data);
// echo '</pre>';
// exit();
setlocale(LC_ALL, 'IND');
global $i;
$i = 0;
function n($reset = null){
    global $i;
    if($reset){
        $i = 0;
    } else {
        $i++;
        return $i.'.';
    }
}
?>
<html>
<head>
    <style>
        /* custom */
        body,
        html, p, div, table {
            margin: 0;
            padding: 0;
            text-rendering: optimizeLegibility;
            font-size: 12.5px;
            color: #111315;
            font-family:"Book Antiqua";
            line-height: normal;
        }
        div{
            line-height:1;
        }

        h1 {
            
            text-align: center;
            font-size: 1.56em;
            line-height: 1;
            letter-spacing: 1px;
            margin:5px 0px;
        }

        hr{
            margin:8px 0px;
            color: #333;
            height:2px;
        }
        .subtitle{
            line-height:0;
            margin:0;
            font-size:10px;
        }
        table {
            font-weight:normal;
            border-collapse: collapse;
        }
        /* custom */
        .page-break {
            page-break-after: always;
        }
        .page-break-avoid{
            page-break-inside: avoid;
        }
        /* default */
        .padding-0{
            padding: 0!important;
        }

        .width-33,.width-66,
        .width-15,.width-30,.width-45,.width-90,
        .width-50,.width-25,.width-75,.width-100 {
            float: left;
            padding: 0px 15px;
        }
        .width-33{
            width: 33.33333%;
        }
        .width-66{
            width: 66.667%;
        }
        .width-15{
            width: 15%;
        }
        .width-30{
            width: 30%;
        }
        .width-45{
            width: 45%;
        }
        .width-90{
            width: 90%;
        }
        .width-50 {
            width: 50%;
        }

        .width-25 {
            width: 25%;
        }

        .width-75 {
            width: 75%;
        }
        .width-85 {
            width: 85%;
        }
        .width-100 {
            width: 75%;
        }
        .clearfix{
            clear:both;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-justify {
            text-align: justify;
        }

        .text-nowrap {
            white-space: nowrap;
        }

        .text-lowercase {
            text-transform: lowercase;
        }

        .text-uppercase,
        .initialism {
            text-transform: uppercase;
        }

        .text-capitalize {
            text-transform: capitalize;
        }
        .margin-top-10 {
            margin-top:10px;
        }
        .margin-top-15 {
            margin-top:15px;
        }
        .margin-top-20 {
            margin-top:20px;
        }

        .border-top{
            border-top:3px solid #333;
            padding:0px 8px;
        }
        .left{
            float: left;
        }
        .bold{
            font-weight:bold;
        }
        .barcode {
            padding: 0.5mm;
            color: #000044;
            width:40px;
        }
        .barcodecell {
            text-align: center;
            vertical-align: top;
        }
        /* default */
    </style>
</head>
<body>
    @php
        $new_peserta = array();
        $j = 1;
        $hl = 1;
        foreach ($listPeserta as $key => $val){
            $new_peserta[$hl][$j] = $val;
            $j++;
            if ($j==21){
                $j=1;
                $hl++;
            }
        }
    @endphp
    <div class="padding-0">
        <div class="text-center">
            <p class="text-uppercase bold margin-top-20">surat tugas</p>
            <p class="margin-top-10">Nomor : <span>{{$data->no_st}}</span></p>
        </div>
        <div class="margin-top-15">
            @if($jenisST->is_narasumber)
            <p style="text-indent:40px" class="text-justify">Dalam rangka {{$data->keperluan}}, dengan ini kami menugaskan sebagai {{$jenisST->nama}} kepada:</p>
            @else
            <p style="text-indent:40px" class="text-justify">Dalam rangka {{$data->keperluan}}, dengan ini kami menugasi nama-nama 
                @if (count($listPeserta) <= 6) berikut 
                @else sebagaimana terlampir 
                @endif
            untuk melakukan {{$jenisST->nama}} :</p>
            @endif
        </div>

        @if (count($listPeserta) <= 6)
        <table style="margin:20px 0px; font-size:11px;" width="100%" border="1" cellspacing="0" cellpadding="2">
            <tr style="background-color: #B7B7B7; margin-top:10px">
                @if($jenisST->is_narasumber)
                <th width="5%" align="center">No</th>
                <th width="47.5%" align="center">Nama / NIP</th>
                <th width="47.5%" align="center">Jabatan</th>
                @else
                <th width="5%" align="center">No</th>
                <th width="35%" align="center">Nama / NIP</th>
                <th width="20%" align="center">Pangkat / Golongan</th>
                <th width="40%" align="center">Jabatan</th>
                @endif
            </tr>
            
            @foreach($listPeserta as $key => $val)
            @if ($key < 6)
            <tr>
                <td class="text-center">{{n()}}</td>
                <td>{{$val->nama}} <br />NIP : {{($val->nip ? $val->nip : '-')}}</td>
                @if(!$jenisST->is_narasumber)
                <td>{{(empty($val->golongan_full_nama)?'-':$val->golongan_full_nama)}}</td>
                @endif

                <td>
                    @if($val->pref_jabatan=='pelaksana')
                    {{'Plt.'}}
                    @endif
                    {{(empty($val->jabatan)?'-':$val->jabatan)}}</td>
            </tr>
            @endif
            @endforeach
        </table>
        @else <br/><br/>
        @endif
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                @php
                if ($jenisST->is_narasumber) {
                    $tgl_narsum = [];
                    foreach($tgl_agendas as $k => $agenda){
                        $tgl_narsum[] = Helper::tglFormat($agenda->tgl);
                    }
                    $haritgl = implode(', ',$tgl_narsum);
                    $tujuan = '';
                } else {
                    $hari = Helper::tglFormat($data->tgl_awal,2);
                    $hari2 = Helper::tglFormat($data->tgl_akhir,2);
                    $harie = explode(' ',$hari);
                    $hari2e = explode(' ',$hari2);
                    if($harie[3] == $hari2e[3]){
                        $tglsd = (trim($harie[2]) == trim($hari2e[2]) ? ($harie[1].' s.d. '.$hari2e[1].' '.$harie[2].' '.$harie[3]) : ($harie[1].' '.$harie[2].' s.d. '.$hari2e[1].' '.$hari2e[2].' '.$harie[3]));
                        $haritgl = (trim($hari) == trim($hari2) ? 
                            $hari :
                            explode(',',$hari)[0].' - '.explode(',',$hari2)[0].' / '.$tglsd
                            );
                    }else{
                        $haritgl = explode(',',$hari)[0].' - '.explode(',',$hari2)[0].' / '.$harie[1].' '.$harie[2].' '.$harie[3].' s.d. '.$hari2e[1].' '.$hari2e[2].' '.$hari2e[3];
                    }
                    
                    $kota_atr = 'Tujuan';
                    $kotas = '';
                    if(isset($kota)){
                        foreach($kota as $kval){
                            $tempKota[] = $kval->namaKota;
                        }
                        $kotas .= (count($kota) > 1 ? implode(', ',$tempKota) : $kota[0]->namaKota);
                    }else{
                        $kotas = 'Jakarta';
                    }
                    if(!$jenisST->is_kota_tujuan) $kotas = 'Jakarta';
                    $tujuan = '<tr>
                        <td width="30%">'.$kota_atr.'</td>
                        <td width="2%">:</td>
                        <td width="68%">'.$kotas.'</td>
                    </tr>';
                }
                @endphp       
                {!!$tujuan!!}
                <tr>
                    <td width="30%">Hari / Tanggal</td>
                    <td width="2%">:</td>
                    <td width="68%">{!!$haritgl!!}</td>
                </tr>
                @if($jenisST->is_waktu)
                if (!is_null($data->jam_mulai) && !is_null($data->jam_akhir)){
                $data->jam_mulai = str_replace(':', '.', $data->jam_mulai);
                $data->jam_akhir = str_replace(':', '.', $data->jam_akhir);
                    <tr>
                        <td width="30%">Waktu</td>
                        <td width="2%">:</td>
                        <td width="68%">{{Helper::waktuFormat($data->jam_mulai).' - '.Helper::waktuFormat($data->jam_akhir)}}</td>
                    </tr>
                @endif
                @if($jenisST->is_angkutan)
                <tr>
                    @php
                    if ($data->angkutan_id == 1) {
                        $angkutan = "Angkutan Darat";
                    } else if ($data->angkutan_id == 2) {
                        $angkutan = "Pesawat Terbang";
                    } else if ($data->angkutan_id == 3) {
                        $angkutan = "Kapal Laut";
                    }
                    @endphp
                        <td width="30%">Alat Transportasi</td>
                        <td width="2%">:</td>
                        <td width="68%">{{$angkutan}}</td>
                </tr>
                @endif
                <?php 
                $mak_full = '';
                foreach ($biaya as $val){
                    $mak_full .= $val->kode_full;
                    $mak_full .= '<br/>';
                }
                ?>
                <tr>
                    <td valign="top" width="30%">Alokasi Dana</td>
                    <td valign="top" width="2%">:</td>
                    <td width="68%">{!!($data->tipe_biaya == 3 ? 'Sepenuhnya Ditanggung Pihak Ketiga': (!empty($biaya) ? $mak_full : '<span class="bold" style="color:red">(data alokasi dana (MAK) masih kosong)</span>'))!!}</td>
                </tr>
        </table>
            <p style="margin-top:20px; text-indent:40px" class="text-justify">Setelah tugas tersebut selesai dilaksanakan agar menyampaikan laporan pelaksanaan kegiatan kepada pejabat pemberi tugas.</p>
            <p style="margin-top:20px; text-indent:40px" class="text-justify">Demikian surat tugas ini dibuat untuk dilaksanakan dengan sebaik-baiknya dan penuh tanggung jawab.</p>
       
        <table style="margin:30px 0px" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="60%">&nbsp;</td>
                <td colspan="2">Ditetapkan di Jakarta<br/>Pada Tanggal {{ $tgl_surat }}</td>
            </tr>
            <tr>
                <td width="60%">&nbsp;</td>
                <td width="40%"><font style="font-weight: bold;">
                @if ($data->is_kpa)
                    Kuasa Pengguna Anggaran
                @elseif(!empty($data->prefix_pemberi_tugas) || !empty($pp_organisasi->jabatan_nama))
                        {{$data->prefix_pemberi_tugas}} {{$pt_organisasi->jabatan_nama}}
                        <br>
                    @else
                {!!(empty($penandatangan->jabatan)?'<span class="bold" style="color:red">(data penandatangan masih kosong)</span>':$penandatangan->jabatan)!!}.
                @endif
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        {!!(empty($penandatangan->pegawai_nama)?'<span class="bold" style="color:red">(data penandatangan masih kosong)</span>':$penandatangan->pegawai_nama)!!}<br/>
                        {{empty($penandatangan->pegawai_nip) ? 'NIP -' : ($penandatangan->pegawai_nip == 'MT0003' ? '' : 'NIP '.$penandatangan->pegawai_nip)}}
                    </font>
                </td>
            </tr>
        </table>
        <?php 
        $str = '';
        if ($jenisST->is_waktu){
            $str .= 'NB : Tetap diwajibkan melakukan absensi finger print.<br/><br/>';
        }
        $str .= 'Tembusan:';
        $arrayTembusan = array();
        if (!empty($data->pp_organisasi_id)){
            $arrayTembusan[] = $pt_organisasi->jabatan_nama;
        }
        $arrayTembusan[] = 'Kuasa Pengguna Anggaran';
        $arrayTembusan[] = 'Kepala Bagian Kepegawaian';
        $arrayTembusan[] = 'Pejabat Pembuat Komitmen';
        $arrayTembusan[] = 'Kepala Bagian Tata Usaha dan Keuangan';
        $no = 1;
        foreach ($arrayTembusan as $val){
            $str .= '<br/>';
            $str .= $no.'. '.$val;
            $no++;
        }?>
        <div>{!!$str!!}</div>
        <!--mpdf
            <htmlpageheader name="MyHeader1">
                <br/>
                <div class="width-15 padding-0 margin-top-10">
                    <img src="file://{{ public_path() }}/file/rsz_icon_simple.png" style="width:125px;height:80px;">
                </div>
                <div class="left width-85 padding-0  text-center">
                    <h1 style="height:14px;">KEMENTERIAN BADAN USAHA MILIK NEGARA <br/>REPUBLIK INDONESIA</h1>
                    <div class="subtitle padding-0">GEDUNG KEMENTERIAN BUMN, JALAN MEDAN MERDEKA SELATAN NO. 13 JAKARTA 10110<br/>TELEPHONE (021) 2311949, SITUS www.bumn.go.id</div>
                </div>
                <hr>
            </htmlpageheader>

            <htmlpagefooter name="myfooter">
                
                <div class="width-75 padding-0 text-right margin-top-20">
                    <i style="font-size:10px;">Copyright © PPID Kementerian BUMN</i>
                </div>

            </htmlpagefooter>
        <sethtmlpagefooter name="myfooter" value="on" />
        <sethtmlpageheader name="MyHeader1" value="on" show-this-page="1" />
        mpdf-->
        <?php $t = true; $hal = 1; ?>
        @if (count($listPeserta) > 6)
        @foreach ($listPeserta as $ik => $vk)
        @if ($t == true)
        
        <div class="page-break"></div>
        
        <table width="100%">
            <tr>
                <td rowspan="4" width="55%">&nbsp;</td>
                <td colspan="3">
                    <font style="font-weight: bold;">Lampiran Surat Tugas</font>
                </td>
            </tr>
            <tr>
                <td width="15%">Nomor</td>
                <td width="2%">:</td>
                <td width="28%">{{$data->no_st}}</td>
            </tr>
            <tr>
                <td width="15%">Tanggal</td>
                <td width="2%">:</td>
                <td width="28%">{{($data->is_cetak_tanggal) ? Helper::tglFormat($data->tgl_st, 1):'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'}}</td>
            </tr>
            <tr>
                <td width="15%">Lembar ke</td>
                <td width="2%">:</td>
                <td width="28%">{{$hal}}</td>
            </tr>
        </table>
        <table style="margin:20px 0px; font-size:11px;" width="100%" border="1" cellspacing="0" cellpadding="2">
            <tr style="background-color: #B7B7B7; margin-top:10px">
                @if($jenisST->is_narasumber)
                <th width="5%" align="center">No</th>
                <th width="47.5%" align="center">Nama / NIP</th>
                <th width="47.5%" align="center">Jabatan</th>
                @else
                <th width="5%" align="center">No</th>
                <th width="35%" align="center">Nama / NIP</th>
                <th width="20%" align="center">Pangkat / Golongan</th>
                <th width="40%" align="center">Jabatan</th>
                @endif
            </tr>
            <?php $k =1; $tt = $ik +1;?>
            @foreach($new_peserta[$tt] as $key => $val)
            @if ($key < 21)
            <tr>
                <td class="text-center">{{n()}}</td>
                <td>{{$val->nama}} <br />NIP : {{($val->nip ? $val->nip : '-')}}</td>
                @if(!$jenisST->is_narasumber)
                <td>{{(empty($val->golongan_full_nama)?'-':$val->golongan_full_nama)}}</td>
                @endif
                
                <td> @if($val->pref_jabatan=='pelaksana')
                    {{'Plt.'}}
                    @endif
                    {{(empty($val->jabatan)?'-':$val->jabatan)}}</td>
            </tr>
            @endif
            <?php $k++; ?>
            @endforeach
        </table>
        
        @if ($tt==max(array_keys($new_peserta)))
        <table class="page-break-avoid" style="margin:30px 0px" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="60%">&nbsp;</td>
                <td width="40%"><font style="font-weight: bold;">
                @if ($data->is_kpa)
                    Kuasa Pengguna Anggaran
                @elseif(!empty($data->prefix_pemberi_tugas) || !empty($pp_organisasi->jabatan_nama))
                        {{$data->prefix_pemberi_tugas}} {{$pt_organisasi->jabatan_nama}}
                        <br>
                    @else
                {!!(empty($penandatangan->jabatan)?'<span class="bold" style="color:red">(data penandatangan masih kosong)</span>':$penandatangan->jabatan)!!}.
                @endif
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        {!!(empty($penandatangan->pegawai_nama)?'<span class="bold" style="color:red">(data penandatangan masih kosong)</span>':$penandatangan->pegawai_nama)!!}<br/>
                        {{empty($penandatangan->pegawai_nip) ? 'NIP -' : ($penandatangan->pegawai_nip == 'MT0003' ? '' : 'NIP '.$penandatangan->pegawai_nip)}}
                    </font>
                </td>
            </tr>
        </table>
        <?php $t = false; ?>
        {{n(true)}}
        @endif
        <?php $hal++; ?>
        @endif
        @endforeach

        @endif
        @if($jenisST->is_narasumber)
        <div class="page-break"></div>
        <table width="100%">
            <tr>
                <td rowspan="4" width="55%">&nbsp;</td>
                <td colspan="3">
                    <font style="font-weight: bold;">Lampiran Surat Tugas</font>
                </td>
            </tr>
            <tr>
                <td width="15%">Nomor</td>
                <td width="2%">:</td>
                <td width="28%">{{$data->no_st}}</td>
            </tr>
            <tr>
                <td width="15%">Tanggal</td>
                <td width="2%">:</td>
                <td width="28%">{{($data->is_cetak_tanggal) ? Helper::tglFormat($data->tgl_st, 1):'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'}}</td>
            </tr>
            <tr>
                <td width="15%">Lembar ke</td>
                <td width="2%">:</td>
                <td width="28%">{{$hal}}</td>
            </tr>
        </table>
       
        <table width="100%" border="1" cellspacing="0" cellpadding="2" class="margin-top-20">
                <tr style="background-color: #B7B7B7;">
                    <th width="5%" align="center">No</th>
                    <th width="30%" align="center">Nama</th>
                    <th width="25%" align="center">Waktu</th>
                    <th width="40%" align="center">Agenda</th>
                </tr>
                @php
                $nTRAgenda = '';
                $no = 1;
                @endphp
                @foreach ($listAgenda as $key => $val)
                    <tr>
                        <td class="text-center">{{$no}}</td>
                        <td>{{$val['peserta']}}</td>
                        <td>{{Helper::tglFormat($val['tanggal'], 2)}}<br>{{substr($val['waktu_awal'], 0, -3)}} - {{substr($val['waktu_akhir'], 0, -3)}} WIB</td>
                        <td>{{$val['dalam_rangka']}}</td>
                    </tr>
                    @php($no++)
                @endforeach
                </table>
        @endif
    </div>

    
</body>
<html>