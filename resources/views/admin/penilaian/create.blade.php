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
                        <br>
                        {{-- Modal Keterangan Sub Bobot --}}
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="ri-error-warning-fill"></i> Ket Sub Bobot</button>
                                <div class="modal fade" id="basicModal" tabindex="-1">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Keterangan Sub Bobot Kriteria</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped" style="text-align: center">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Nilai</th>
                                                    <th scope="col">Bobot</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1-20</td>
                                                    <td> 1 </td>
                                                </tr>
                                                <tr>
                                                    <td>21-40</td>
                                                    <td> 2 </td>
                                                </tr>
                                                <tr>
                                                    <td>41-60</td>
                                                    <td> 3 </td>
                                                </tr>
                                                <tr>
                                                    <td>61-72</td>
                                                    <td> 4 </td>
                                                </tr>
                                                <tr>
                                                    <td>73-100</td>
                                                    <td> 5 </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <!-- End Basic Modal-->
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
                                <label for="validationDefault04" class="form-label">Bulan & Tahun Penilaian <span class="required">*</span></label>
                                <div class="">
                                    <input type="month" class="form-control" name="bulan" max="{{date('Y-m')}}">
                                </div>
                            </div>

                            <div class="card-body">
                                    <h5>Masukan Nilai Evaluasi Sesuai Kriteria</h5>

                                    @foreach ($datakriteria as $kriteria)
                                        <div class="row mb-3">
                                            <label for="validationDefault04" class="col-md-2 col-form-label ">{{$kriteria->kriteria}}
                                                <span class="required">*</span></label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="id_kriteria_{{ $kriteria->id }}" id="id_kriteria_{{ $kriteria->id }}" value="{{ $kriteria->id }}">
                                                    <select class="form-select" name="nilai_{{ $kriteria->id }}" id="nilai_{{ $kriteria->id }}" required>
                                                        <option selected disabled value="">Pilih Penilaian</option>
                                                        @foreach($datasubkriteria as $subkriteria)
                                                            @if ($subkriteria->id_kriteria == $kriteria->id)
                                                                <option value="{{ $subkriteria->bobot }}">{{ $subkriteria->subkriteria }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                        </div>
                                    @endforeach



                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary"  style="width: 200px" type="submit">Save</button>
                                <a href="{{ route('penilaian.create') }}">
                                    <button class="btn btn-secondary"  style="width: 200px" type="reset">Clear</button>
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
