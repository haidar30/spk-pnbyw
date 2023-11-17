@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Perhitungan Kinerja Pegawai Menggunakan Metode SAW</h1>
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

@if($errors->any())
    @foreach ($errors->all() as $danger)
        <h6 class="alert alert-danger">{{ $danger }}</h6>
    @endforeach
@endif
@if (session('message'))
    <h6 class="alert alert-success">{{ session('message') }}</h6>
@endif


<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pilih Bulan dan Tahun Penilaian Evaluasi</h5>
                    
                    <form method="post" action="{{ url('admin/klasifikasi') }}">
                        @csrf
                        @method("GET")

                        <div class="row mb-3">
                            <label for="bulan" class="col-md-4 col-lg-3 col-form-label">Bulan Penilaian</label>
                            <div class="col-md-8 col-lg-9">
                                <input type="month" class="form-control" name="bulan" max="{{date('Y-m')}}">
                            </div>
                        </div>
                        <div class="row mb-3 text-center">
                            <div class="col-sm-12">
                                <button type="submit" style="width: 200px" class="btn btn-primary">Cari Penilaian</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            
                <div class="card">
                    <div class="card-body">
                            <h5 class="card-title"> HASIL PERHITUNGAN KINERJA PEGAWAI MENGGUNAKAN METODE SAW</h5>

                            <div class="card">
                            <div class="card-header">
                                <H5>BOBOT KRITERIA</H5>
                            </div>
                            <div class="card-title">
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
                                <table class="table table-striped">

                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pegawai</th>
                                            <th scope="col">Perhitungan</th>
                                            <th scope="col">Peringkat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($eval_pegawai->groupBy('pegawai.nama') as $eval)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $eval->first()->pegawai->nama }}</td>
                                            <td></td>
                                            <td></td>
                                            @foreach ($kriteria as $item)
                                            
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
