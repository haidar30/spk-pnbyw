@extends("users.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>    Hasil Akhir Keputusan Evaluasi Kinerja Pegawai    </h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item active">Hasil Penilaian Pegawai</li>
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
                            
                            <div class="row">
                                <div class="col card-header">
                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        Pilih Bulan & Tahun
                                    </button>
                                    <form class="dropdown-menu p-4">
                                        <div class="mb-3">
                                            <label for="validationDefault04" class="form-label">Bulan
                                                <span class="required">*</span></label>
                                            <select class="form-select" name="bobot" id="bobot" required>
                                                <option selected disabled value="">Pilih Bulan</option>
                                                <option value="10 {{ (isset($kriteria) && $kriteria->bobot == 1)
                                                    ? 'selected' : '' }}">Januari</option>
                                                <option value="20 {{ (isset($kriteria) && $kriteria->bobot == 2)
                                                    ? 'selected' : '' }}">Februari</option>
                                                <option value="30 {{ (isset($kriteria) && $kriteria->bobot == 3)
                                                    ? 'selected' : '' }}">Maret</option>
                                                <option value="40 {{ (isset($kriteria) && $kriteria->bobot == 4)
                                                    ? 'selected' : '' }}">April</option>
                                                <option value="50 {{ (isset($kriteria) && $kriteria->bobot == 5)
                                                    ? 'selected' : '' }}">Mei</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="validationDefault04" class="form-label">Tahun
                                                <span class="required">*</span></label>
                                            <select class="form-select" name="bobot" id="bobot" required>
                                                <option selected disabled value="">Pilih Tahun</option>
                                                <option value="10 {{ (isset($kriteria) && $kriteria->bobot == 1)
                                                    ? 'selected' : '' }}">2021</option>
                                                <option value="20 {{ (isset($kriteria) && $kriteria->bobot == 2)
                                                    ? 'selected' : '' }}">2023</option>
                                                <option value="30 {{ (isset($kriteria) && $kriteria->bobot == 3)
                                                    ? 'selected' : '' }}">2024</option>
                                            </select>
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
                            <div class="card-title">
                                {{-- <blockquote class="blockquote mb-0"> --}}
                                    <!-- Table with stripped rows -->
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pegawai</th>
                                            <th scope="col">Nilai</th>
                                            <th scope="col">Rangking</th>
                                            <th scope="col">Perpanjangan</th>
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