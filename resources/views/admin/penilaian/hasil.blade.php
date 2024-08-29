@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Hasil Penilaian Kinerja Pegawai</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item"><a>Proses Penilaian</a></li>
        <li class="breadcrumb-item active">Hasil Penilaian Pegawai</li>
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
                    <h5 class="card-title">Pilih Tahun Penilaian Evaluasi</h5>

                    <form method="post" action="{{ url('admin/hasil') }}">
                        @csrf
                        @method("GET")

                        <div class="row mb-3">
                            <label for="bulan" class="col-md-4 col-lg-3 col-form-label">Tahun Penilaian</label>
                            <div class="col-md-8 col-lg-9">
                                {{-- <input type="year" class="form-control" name="tahun" max="{{date('Y')}}"> --}}
                                <input type="number" class="form-control" name="tahun" placeholder="YYYY" min="1999" max="{{date('Y')}}">
                            </div>
                        </div>
                        <div class="row mb-3 text-center">
                            <div class="col-sm-12">
                                <button type="submit" style="width: 200px" class="btn btn-primary">Cari Penilaian</button>
                                @if (!empty($tampil_preferensi))
                                    <a href="{{ url('admin/cetak_pertahun') . '/' . $tahun  }}" class="btn btn-warning" target="_blank">Cetak PDF</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="card">
        <div class="card-body">
            @if (isset($preferensi_perbulan))
                <div class="card">
                    <div class="card-header">
                        <H5>Nilai Preferensi Bulanan</H5>
                    </div>
                    <div class="card-title">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2">No</th>
                                    <th scope="col" rowspan="2">Nama Pegawai</th>
                                    <th scope="col" class="text-center" colspan="12">Bulan</th>
                                </tr>
                                <tr>
                                    <th scope="col">Jan</th>
                                    <th scope="col">Feb</th>
                                    <th scope="col">Mar</th>
                                    <th scope="col">Apr</th>
                                    <th scope="col">Mei</th>
                                    <th scope="col">Jun</th>
                                    <th scope="col">Jul</th>
                                    <th scope="col">Aug</th>
                                    <th scope="col">Sept</th>
                                    <th scope="col">Okt</th>
                                    <th scope="col">Nov</th>
                                    <th scope="col">Des</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tampil_preferensi as $k => $preferensi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $preferensi['nama'] }}</td>
                                    @foreach ($preferensi_perbulan[$k] as $item)
                                        <td>
                                            {{ $item }}
                                        </td>
                                    @endforeach
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="14">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <H5>Nilai Preferensi Tahunan</H5>
                </div>
                <div class="card-title">
                    <div class="card">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Rangking</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Perpanjangan</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($tampil_preferensi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ round($item['nilai_preferensi'], 2) }}</td>
                                    <td>{{ $item['kontrak'] }}</td>
                                    <td></td>
                                </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
