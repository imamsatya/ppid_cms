<!DOCTYPE html>
<html>

<head>
	<title>{{$dataPermohonan->ticket_permohonan}} - Detail</title>
	<style type="text/css">
		@page {
                margin: 0cm 0cm;
            }

		body {
			height: 842px;
			width: 595px;
			/* to centre page on screen*/
			margin-left: auto;
			margin-right: auto;
			margin-top: 140px;
			margin-bottom: 30px;

		}

		header {
			position: fixed;
			/* top: 0.75cm;                 */
			top: -2px;
			margin-top: 10px;
			text-align: center
		}

		footer {
			position: fixed;
			bottom: 15px;
			text-align: center;
			margin-bottom: 10px;
		}

		hr {
			margin: 8px 0px;
			color: #333;
			height: 2px;
		}

		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}

		
		table tr td {
			font-size: 13px;
		}
	</style>
</head>

<body>
	<header>
		<center>
			<table>
				<tr>
					<td><img src="logo_only.png" height="80"></td>
					<td>
						<center>

							<h2 style="height:14px;">KEMENTERIAN BADAN USAHA MILIK NEGARA <br />REPUBLIK INDONESIA</h2>
							<br>
							<font size="1">GEDUNG KEMENTERIAN BUMN, JALAN MEDAN MERDEKA SELATAN NO. 13 JAKARTA
								10110<br />TELEPHONE (021) 2311949, SITUS www.bumn.go.id</font><br>

						</center>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<hr style="width: 585px">
					</td>
				</tr>

			</table>
		</center>
	</header>
	


	<footer>
		<center>
			<hr style="width: 585px">
			<div style="text-align: left;">AKHLAK - Amanah, Kompeten, Harmonis, Loyal, Adaptif, Kolaboratif</div>
		</center>
	</footer>

	<main>
  
		<h4>Data Permohonan</h4>
		<table style="width:100%">
			<tr>
				<th style="width:30%"></th>
				<th style="width:2%"></th>
				<th style="width:68%"></th>
			</tr>
            <tr>
                <td>Nomor Registrasi</td>
                <td>:</td><td>{{$dataPermohonan->ticket_permohonan}}</td>
            </tr>
            <tr>
                <td>Nama Pemohon</td>
                <td>:</td><td>{{$dataPemohon->nama_lengkap}}</td>
            </tr>
            <tr>
                <td>Jenis Pemohon</td>
                <td>:</td><td>{{$dataPemohon->nama_jenis_pemohon}}</td>
            </tr>
			<tr>
                <td>Informasi diminta</td>
                <td>:</td><td>{{$dataPermohonan->informasi_diminta}}</td>
            </tr>
            <tr>
                <td>Tujuan Informasi</td>
                <td>:</td><td>{{$dataPermohonan->tujuan_informasi}}</td>
            </tr>
            <tr>
                <td>Cara mendapatkan informasi</td>
                <td>:</td><td>{{$dataPermohonan->cara_mendapatkan}}</td>
            </tr>
            <tr>
                <td>Cara memberikan informasi</td>
                <td>:</td><td>{{$dataPermohonan->cara_memberikan}}</td>
            </tr>
            
            
        </table>
        <!-- <h4 style="page-break-before: always">Data Permohonan</h4>
		<table style="width:100%">
			<tr>
				<th style="width:30%"></th>
				<th style="width:2%"></th>
				<th style="width:68%"></th>
			</tr>
            
            

        </table> -->
	</main>
</body>

</html>