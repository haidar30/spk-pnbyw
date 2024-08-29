<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Kinerja Pegawai</title>
    <style>
        @page {
            size: landscape;
        }
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

        table.evaluation {
            border: 1px solid #000;
            /* margin-top: 10px; */
        }
        table.evaluation th {
            background-color: #cacaca;
            padding: 5px 0;
        }
        table.evaluation td {
            padding: 5px 0;
        }

        table.evaluation th, table.evaluation td {
            border: 1px solid #000;
            /* padding: 10px; */
            text-align: center;
        }

        table.evaluation td.name {
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
    </style>
</head>
<body onload="window.print()">
    <h1>HASIL PENILAIAN KINERJA PEGAWAI PEMERINTAH NON PEGAWAI NEGERI</h1>
    <h1>DALAM PENGAMBILAN KEPUTUSAN KONTRAK KERJA</h1>
    <h1>TAHUN {{$tahun}}</h1>
    <br>

    <table class="evaluation">
        <thead>
            <tr>
                <th colspan="16">Penilaian Pegawai Honorer Perpanjangan Kontrak Kerja</th>
            </tr>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Pegawai</th>
                <th colspan="12">Bulan</th>
                <th rowspan="2">Rata-<br>Rata</th>
                <th rowspan="2">Ket</th>
                
            </tr>
            <tr>
                <th>Jan</th>
                <th>Feb</th>
                <th>Mar</th>
                <th>Apr</th>
                <th>Mei</th>
                <th>Jun</th>
                <th>Jul</th>
                <th>Aug</th>
                <th>Sept</th>
                <th>Okt</th>
                <th>Nov</th>
                <th>Des</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tampil_preferensi as $k => $preferensi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="name">{{ $preferensi['nama'] }}</td>
                @foreach ($preferensi_perbulan[$k] as $item)
                <td>
                    {{ $item }}
                </td>
                @endforeach
                <td>{{ round($preferensi['nilai_preferensi'], 2) }}</td>
                <td>{{ $preferensi['kontrak'] == "diperpanjang" ? "P" : "TP" }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="14">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <br>

    <div class="note">
        <p>* - Nilai Perpanjangan Kontrak = Nilai Preferensi Perbulan diambil Rata-Rata Pertahun</p>
        <p>&ensp;- Nilai diatas 0,7 Kontrak di perpanjang, Jika dibawah 0,7 Kontrak tidak diperpanjang</p>
    </div>

    <div class="footer">
        <table class="signature">
            <tr>
                <td class="left">
                    <p>Mengetahui,</p>
                    <p>Ketua Pengadilan Negeri Banyuwangi</p>
                    <br><br><br>
                    <p>Moehammad Pandji Santoso, S.H., M.H.,</p>
                    <p>NIP. 19700218 199603 1 003</p>
                </td>
                <td class="right">
                    <p>Banyuwangi, &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; {{$tahun + 1}}</p>
                    <p>Kuasa Pengguna Anggaran</p>
                    <br><br><br>
                    <p>Linda Kusumawati, SH.,</p>
                    <p>NIP. 19710529 199903 2 002</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
