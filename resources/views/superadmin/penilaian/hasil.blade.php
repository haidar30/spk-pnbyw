@extends("superadmin.layouts.sidebar")

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

                    <form method="post" action="{{ url('superadmin/hasil') }}">
                        @csrf
                        @method("GET")

                        <div class="row mb-3">
                            <label for="bulan" class="col-md-4 col-lg-3 col-form-label">Tahun Penilaian</label>
                            <div class="col-md-8 col-lg-9">
                                <input type="number" class="form-control" name="tahun" placeholder="YYYY" min="1999" max="{{date('Y')}}">
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
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="card">
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
    </div>
</section>

@endsection