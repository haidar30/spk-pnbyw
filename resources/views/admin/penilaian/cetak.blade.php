<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Kinerja Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
            margin: 2cm;
        }

        p {
            margin: 0;
        }

        h1, h2, h3 {
            text-align: center;
            margin: 0;
        }

        h1 {
            font-size: 14pt;
            font-weight: bold;
            text-transform: uppercase;
        }

        h2, h3 {
            font-size: 12pt;
            font-weight: bold;
        }

        table {
            width: 100%;
            /* margin-top: 20px; */
            border-collapse: collapse;
            page-break-inside: avoid;
        }

        table.info td {
            padding: 4px 0;
        }

        table.evaluation, table.preference {
            border: 1px solid #000;
            /* margin-top: 10px; */
        }
        table.evaluation th, table.preference th {
            background-color: #cacaca;
            /* margin-top: 10px; */
        }

        table.evaluation th, table.evaluation td, table.preference td {
            border: 1px solid #000;
            /* padding: 10px; */
            text-align: center;
        }
        table.evaluation td.kriteria {
            padding-left: 10px;
            text-align: left;
        }

        table.signature td {
            width: 50%;
            vertical-align: top;
            padding: 10px;
        }

        table.signature .left {
            text-align: left;
        }

        table.signature .right {
            text-align: right;
        }

        .note {
            font-size: 10pt;
            margin: 10px 0;
        }
        .note p{
            font-style: italic;
        }

        .footer {
            margin-top: 30px;
        }

        .footer p {
            text-align: center;
            font-size: 10pt;
        }

        .nilai-ket {
            font-size: 10pt;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
            border-top: none;
        }

        .catatan {
            width: 100%;
            margin-top: 10px;
            padding: 2px;
            min-height: 3cm;
            box-sizing: border-box;
            border: 1px solid #000;
            font-family: Arial, sans-serif;
        }
        .catatan p{
            text-align: left;
            font-size: 12pt;
        }
        .catatan .header{
            margin: 0;
            text-align: left;
            font-weight: bold;
            font-size: 14pt;
            font-style: italic;
            text-decoration: underline;
        }
    </style>
</head>
<body onload="window.print()">
    <h1>PENILAIAN KINERJA PEGAWAI PEMERINTAH NON PEGAWAI NEGERI</h1>
    <h2>BULAN {{ strtoupper($tanggal['bulan'])}} TAHUN {{$tanggal['tahun']}}</h2>
    <h3>MENGGUNAKAN METODE <i>SIMPLE ADDITIVE WEIGHTING</i> </h3>
    <br>

    <table class="info">
        <tr>
            <td>Nama</td>
            <td>: {{ $data_preferensi['nama'] }}</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: {{ $data_preferensi['jabatan'] }}</td>
        </tr>
        <tr>
            <td>Unit Kerja</td>
            <td>: Pengadilan Negeri Banyuwangi</td>
        </tr>
    </table>
    <br>

    <table class="evaluation">
        <thead>
            <tr>
                <th colspan="3">Nilai Evaluasi Pegawai</th>
            </tr>
            <tr>
                <th>Indikator Perilaku Kerja / Kriteria</th>
                <th>Bobot</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eval_pegawai as $eval)
            <tr>
                <td class="kriteria">{{ $eval['kriteria'] }}</td>
                <td>{{ $eval['bobot'] }}</td>
                <td>{{ $eval['nilai'] }}</td>
            </tr>
            @endforeach
            <!-- <tr>
                <td>Integritas</td>
                <td>10</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Kedisiplinan</td>
                <td>10</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Kerjasama</td>
                <td>10</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Komunikasi</td>
                <td>10</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Pelayanan</td>
                <td>10</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Kehadiran</td>
                <td>50</td>
                <td>4</td>
            </tr> -->
        </tbody>
    </table>

    <div class="note">
        <p>* Ket Nilai : - Point 5 = 100-73 &emsp; - Point 3 = 60-41 &emsp; - Point 1 = 20-1</p>
        <p style="margin-left: 68px;"> - Point 4 = 72-61 &emsp; &ensp;- Point 2 = 40-21</p>
    </div>
    <table class="preference">
        <thead>
            <tr>
                <th colspan="2">Nilai Preferensi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nilai Akhir</td>
                <td>{{$data_preferensi['nilai_preferensi']}}</td>
            </tr>
        </tbody>
    </table>

    <div class="note">
        <p>* - Nilai Akhir didapatkan setelah melakukan perhitungan menggunakan metode simple additive weighting.</p>
        <p>&ensp;- Untuk melihat perhitungan melalui web E-EKP.</p>
    </div>

    <div class="footer">
        <div class="catatan">
            <p class="header">Catatan Penilaian Kinerja*</p>
        </div>

        <table class="signature">
            <tr>
                <td class="left">
                    <p>Mengetahui,</p>
                    <p>Kuasa Pengguna Anggaran</p>
                    <br><br><br>
                    <p>Linda Kusumawati, SH.,</p>
                    <p>NIP. 19710529 199903 2 002</p>
                </td>
                <td class="right">
                    <p>Banyuwangi, &emsp;{{$tanggal['tgl_surat']}}</p>
                    <p>Penilai Kinerja,</p>
                    <br><br><br>
                    <p>{{Auth::user()->name}}</p>
                    <p>NIP. {{Auth::user()->nip}}</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
