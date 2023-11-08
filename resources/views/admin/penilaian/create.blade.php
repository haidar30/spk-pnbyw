@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Masukan Penilaian Kinerja Pegawai</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item"><a>Proses Penilaian</a></li>
        <li class="breadcrumb-item active">Penilaian Pegawai</li>
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
                        <h5 class="card-title">
                            {{ isset($admin_lecturer) ? 'Mengubah' : 'Memilih' }} Nama Pegawai
                        </h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops</strong> Ada yang salah dengan yang kamu inputkan. <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Vertical Form -->

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        <form class="row g-3" action="{{ isset($penilaian) ?
                        route('penilaian.update', $penilaian->id) : route('penilaian.store') }}"
                        id="penilaian_form" method="POST">
                            {!! csrf_field() !!}
                            {!! isset($penilaian) ? method_field('PUT') : '' !!}
                            @if(isset($penilaian))
                                <input type="hidden" name="id" value="{{ $penilaian->id }}">
                            @endif
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label"> Nama Pegawai
                                    <span class="required">*</span></label>
                                <select class="form-select" name="id_pegawai" id="id_pegawai" required>
                                    <option selected disabled value="">Pilih Nama Pegawai</option>
                                    @foreach ($datapegawai as $item)
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Bulan
                                    <span class="required">*</span></label>
                                <select class="form-select" name="bulan" id="bulan" required>
                                    <option selected disabled value="">Pilih Bulan</option>
                                    <option>Januari</option>
                                    <option>Februari</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Tahun
                                    <span class="required">*</span></label>
                                <select class="form-select" name="tahun" id="tahun" required>
                                    <option selected disabled value="">Pilih Tahun</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                </select>
                            </div>

                            <div class="card-body">
                                    <h5>Masukan Nilai Evaluasi Sesuai Kriteria</h5>
{{--
                                    <div class="row mb-3">
                                        <label for="validationDefault04" class="col-md-2 col-form-label ">INTEGRITAS
                                            <span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="bobot" id="bobot" required>
                                            <option selected disabled value="">Nilai</option>
                                            <option value="10 {{ (isset($kriteria) && $kriteria->bobot == 1)
                                                ? 'selected' : '' }}">10</option>
                                            <option value="20 {{ (isset($kriteria) && $kriteria->bobot == 2)
                                                ? 'selected' : '' }}">20</option>
                                        </select>
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="validationDefault04" class="col-md-2 col-form-label ">KEHADIRAN
                                            <span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="bobot" id="bobot" required>
                                            <option selected disabled value="">Nilai</option>
                                            <option value="10 {{ (isset($kriteria) && $kriteria->bobot == 1)
                                                ? 'selected' : '' }}">10</option>
                                            <option value="20 {{ (isset($kriteria) && $kriteria->bobot == 2)
                                                ? 'selected' : '' }}">20</option>
                                        </select>
                                    </div>
                                    </div> --}}

                                    @foreach ($datakriteria as $item)
                                        <div class="row mb-3">
                                            <label for="validationDefault04" class="col-md-2 col-form-label ">{{$item->kriteria}}
                                                <span class="required">*</span></label>
                                        <div class="col-md-10">
                                            {{-- <select class="form-select" name="bobot" id="bobot" required>
                                                <option selected disabled value="">Nilai</option> --}}
                                                <input class="form" type="text" name="nilai_{{ $item->id }}" id="nilai_{{ $item->id }}" >
                                                <input type="hidden" name="id_kriteria_{{ $item->id }}" id="id_kriteria_{{ $item->id }}" value="{{ $item->id }}">
                                            {{-- </select> --}}
                                        </div>
                                        </div>
                                    @endforeach

                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a href="{{ route('penilaian.create') }}">
                                    <button class="btn btn-secondary" type="reset">Clear</button>
                                </a>
                            </div>
                        </form>
                        <!-- Vertical Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
