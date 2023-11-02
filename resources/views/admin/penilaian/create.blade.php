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

                        <form class="row g-3" action="{{ isset($kriteria) ? 
                        route('kriteria.update', $kriteria->id) : route('kriteria.store') }}"
                        id="kriteria_form" method="POST">
                            {!! csrf_field() !!}
                            {!! isset($kriteria) ? method_field('PUT') : '' !!}
                            @if(isset($kriteria))
                                <input type="hidden" name="id" value="{{ $kriteria->id }}">
                            @endif
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label"> Nama Pegawai
                                    <span class="required">*</span></label>
                                <select class="form-select" name="bobot" id="bobot" required>
                                    <option selected disabled value="">Pilih Nama Pegawai</option>
                                    <option value="10 {{ (isset($kriteria) && $kriteria->bobot == 1)
                                        ? 'selected' : '' }}">Ahmad Zainudin</option>
                                    <option value="20 {{ (isset($kriteria) && $kriteria->bobot == 2)
                                        ? 'selected' : '' }}">Zulkarnaim Sohibul</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Bulan
                                    <span class="required">*</span></label>
                                <select class="form-select" name="jenis" id="jenis" required>
                                    <option selected disabled value="">Pilih Bulan</option>
                                    <option value="BENEFIT {{ (isset($kriteria) && $kriteria->bobot == 1)
                                        ? 'selected' : '' }}">Januari</option>
                                    <option value="CONST {{ (isset($kriteria) && $kriteria->bobot == 2)
                                        ? 'selected' : '' }}">Februari</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Tahun
                                    <span class="required">*</span></label>
                                <select class="form-select" name="jenis" id="jenis" required>
                                    <option selected disabled value="">Pilih Tahun</option>
                                    <option value="BENEFIT {{ (isset($kriteria) && $kriteria->bobot == 1)
                                        ? 'selected' : '' }}">2022</option>
                                    <option value="CONST {{ (isset($kriteria) && $kriteria->bobot == 2)
                                        ? 'selected' : '' }}">2023</option>
                                    <option value="CONST {{ (isset($kriteria) && $kriteria->bobot == 3)
                                        ? 'selected' : '' }}">2024</option>
                                </select>
                            </div>
                            <div class="card-body">
                                    <h5>Masukan Nilai Evaluasi Sesuai Kriteria</h5>
                                    
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
                                    </div>

                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a href="{{ route('kriteria.index') }}">
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