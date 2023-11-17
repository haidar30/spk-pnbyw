@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Mengubah Data Sub-Kriteria</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item"><a>Data Kriteria</a></li>
        <li class="breadcrumb-item active">Mengubah Data Sub-Kriteria</li>
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
                        <h5 class="card-title"> </h5>
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




                        <form class="row g-3" action="{{ isset($subkriteria) ?
                            route('subkriteria.update', $subkriteria->id) : route('subkriteria.store') }}"
                            id="subkriteria_form" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Kriteria
                                    <span class="required">*</span></label>
                                <select class="form-select" name="id_kriteria" id="id_kriteria" required>
                                    <option disabled value="">Pilih Kriteria</option>
                                    @foreach($kriteria as $item)
                                    <option value="{{ $item->id }}">{{ $item->kriteria }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="cname" class="form-label">Nama Sub-Kriteria
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="subkriteria" name="subkriteria" minlength="5" 
                                    value="{{ isset($subkriteria) ? $subkriteria->subkriteria : '' }}" required>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Nilai Bobot
                                    <span class="required">*</span></label>
                                <select class="form-select" name="bobot" id="bobot" required>
                                    <option selected disabled value="">Pilih Nilai Bobot</option>
                                    <option value="1" {{ (isset($subkriteria) && $subkriteria->bobot == "1")
                                        ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ (isset($subkriteria) && $subkriteria->bobot == "2")
                                        ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ (isset($subkriteria) && $subkriteria->bobot == "3")
                                        ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ (isset($subkriteria) && $subkriteria->bobot == "4")
                                        ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ (isset($subkriteria) && $subkriteria->bobot == "5")
                                        ? 'selected' : '' }}>5</option>
                                </select>
                            </div>
                            
                            <div class="text-center">
                                <button class="btn btn-primary" style="width: 200px" type="submit">Save</button>
                                <a href="{{ url('admin/subkriteria') }}">
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
