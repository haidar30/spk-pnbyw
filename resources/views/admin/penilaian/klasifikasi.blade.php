@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Perhitungan Kinerja</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item"><a>Proses Penilaian</a></li>
        <li class="breadcrumb-item active">Perhitungan Kinerja</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->


<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                {{-- Create Form Pengalaman Kerja --}}
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title"> HASIL PERHITUNGAN KINERJA PEGAWAI MENGGUNAKAN METODE SAW</h5>

                            <div class="row">
                                <div class="col card-header">
                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        Pilih Bulan & Tahun
                                    </button>
                                    <form class="dropdown-menu p-4">
                                        <div class="mb-3">
                                            <label for="validationDefault04" class="form-label">Bulan & Tahun Penilaian <span class="required">*</span></label>
                                                <div class="">
                                                <input type="month" class="form-control" name="bulan" max="{{date('Y-m')}}">
                                                </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Cari</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Vertical Form -->


                        <div class="card">
                            <div class="card-header">
                                <H5>BOBOT KRITERIA</H5>
                            </div>
                            <div class="card-title">
                            {{-- <blockquote class="blockquote mb-0"> --}}
                                <!-- Table with stripped rows -->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"><i class="bi bi-bag-dash"></i> Jenis Kriteria</th>
                                        <th scope="col"><i class="bi bi-receipt"></i> Bobot</th>
                                        <th scope="col"><i class="bi bi-bag"></i> Jenis</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($kriteria as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->kriteria }}</td>
                                            <td>{{ $item->bobot }}</td>
                                            <td>{{ $item->jenis }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            {{-- </blockquote> --}}
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <H5>NILAI EVALUASI PEGAWAI</H5>
                            </div>
                            <div class="card-title">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pegawai</th>
                                            @foreach ($kriteria as $item)
                                                <th scope="col">{{ $item->kriteria }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        @forelse ($eval_pegawai->groupBy('pegawai.nama') as $eval)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $eval->first()->pegawai->nama }}</td>
                                            @foreach ($kriteria as $item)
                                            <td>
                                                {{ $eval->where('id_kriteria', $item->id)->first()->nilai }}
                                            </td>
                                            @endforeach
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="{{ count($kriteria) + 2 }}">Tidak ada data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <H5>NORMALISASI NILAI EVALUASI PEGAWAI</H5>
                            </div>
                            <div class="card-title">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pegawai</th>
                                            @foreach ($kriteria as $item)
                                                <th scope="col">{{ $item->kriteria }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        @forelse ($eval_pegawai->groupBy('pegawai.nama') as $eval)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $eval->first()->pegawai->nama }}</td>
                                            @foreach ($kriteria as $item)
                                            <td>
                                                {{ $eval->where('id_kriteria', $item->id)->first()->nilai }}
                                            </td>
                                            @endforeach
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="{{ count($kriteria) + 2 }}">Tidak ada data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <H5>PREFERENSI</H5>
                            </div>
                            <div class="card-title">
                                {{-- <blockquote class="blockquote mb-0"> --}}
                                    <!-- Table with stripped rows -->
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pegawai</th>
                                            <th scope="col">Perhitungan</th>
                                            <th scope="col">Peringkat</th>
                                        </tr>
                                        </thead>

                                        {{-- <tbody>
                                        @foreach ($kriteria as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->kriteria }}</td>
                                                <td>{{ $item->bobot }}</td>
                                                <td>{{ $item->jenis }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody> --}}
                                    </table>
                                    <!-- End Table with stripped rows -->
                                {{-- </blockquote> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
