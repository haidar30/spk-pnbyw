@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Merubah Data Kriteria</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item"><a>Data Kriteria</a></li>
        <li class="breadcrumb-item active">Merubah Data Kriteria</li>
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
                        <h5 class="card-title"></h5>
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
                                    <option value="10" {{ (isset($kriteria) && $kriteria->bobot == "1")
                                        ? 'selected' : '' }}>10</option>
                                    <option value="20" {{ (isset($kriteria) && $kriteria->bobot == "2")
                                        ? 'selected' : '' }}>20</option>
                                    <option value="30" {{ (isset($kriteria) && $kriteria->bobot == "3")
                                        ? 'selected' : '' }}>30</option>
                                    <option value="40" {{ (isset($kriteria) && $kriteria->bobot == "4")
                                        ? 'selected' : '' }}>40</option>
                                    <option value="50" {{ (isset($kriteria) && $kriteria->bobot == "5")
                                        ? 'selected' : '' }}>50</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Jenis Kriteria
                                    <span class="required">*</span></label>
                                <select class="form-select" name="jenis" id="jenis" required>
                                    <option value="BENEFIT" {{ (isset($kriteria) && $kriteria->bobot == "BENEFIT")
                                        ? 'selected' : '' }}>BENEFIT (Plus)</option>
                                    <option value="COST" {{ (isset($kriteria) && $kriteria->bobot == "COST")
                                        ? 'selected' : '' }}>COST (Minus)</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" style="width: 200px" type="submit">Save</button>
                                <a href="{{ url('admin/kriteria') }}">
                                    <button class="btn btn-secondary" style="width: 200px" type="button">Cancel</button>
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
