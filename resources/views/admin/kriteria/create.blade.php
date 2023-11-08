@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Tambah Data Kriteria</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item"><a>Data Kriteria</a></li>
        <li class="breadcrumb-item active">Tambah Data Kriteria</li>
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
                            {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Data Kriteria
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
                                <label for="cname" class="form-label">Nama Kriteria
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="kriteria" name="kriteria" minlength="5"
                                value="{{ isset($kriteria) ? $kriteria->kriteria : '' }}" required>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Nilai Bobot
                                    <span class="required">*</span></label>
                                <select class="form-select" name="bobot" id="bobot" required>
                                    <option selected disabled value="">Pilih Nilai Bobot</option>
                                    <option value="10 {{ (isset($kriteria) && $kriteria->bobot == 1)
                                        ? 'selected' : '' }}">10</option>
                                    <option value="20 {{ (isset($kriteria) && $kriteria->bobot == 2)
                                        ? 'selected' : '' }}">20</option>
                                    <option value="30 {{ (isset($kriteria) && $kriteria->bobot == 3)
                                        ? 'selected' : '' }}">30</option>
                                    <option value="40 {{ (isset($kriteria) && $kriteria->bobot == 4)
                                        ? 'selected' : '' }}">40</option>
                                    <option value="50 {{ (isset($kriteria) && $kriteria->bobot == 5)
                                        ? 'selected' : '' }}">50</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Jenis Kriteria
                                    <span class="required">*</span></label>
                                <select class="form-select" name="jenis" id="jenis" required>
                                    <option selected disabled value="">Pilih Jenis Kriteria</option>
                                    <option value="BENEFIT {{ (isset($kriteria) && $kriteria->bobot == 1)
                                        ? 'selected' : '' }}">BENEFIT (Plus)</option>
                                    <option value="CONST {{ (isset($kriteria) && $kriteria->bobot == 2)
                                        ? 'selected' : '' }}">CONST (Minus)</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a href="{{ route('kriteria.index') }}">
                                    <button class="btn btn-secondary" type="button">Cancel</button>
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
