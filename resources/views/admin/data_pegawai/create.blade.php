@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Tambah Data Pegawai</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item"><a>Data Pegawai</a></li>
        <li class="breadcrumb-item active">Tambah Data Pegawai</li>
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
                            {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Data Pegawai
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
                        <form class="row g-3" action="{{ isset($data_pegawai) ? route('pegawai.update',
                        $data_pegawai->id) : route('pegawai.store') }}"
                        id="data_pegawai_form" method="POST">
                            {!! csrf_field() !!}
                            {!! isset($data_pegawai) ? method_field('PUT') : '' !!}
                            @if(isset($data_pegawai))
                                <input type="hidden" name="id" value="{{ $data_pegawai->id }}">
                            @endif
                            <div class="col-12">
                                <label for="cname" class="form-label">Nama Pegawai
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" minlength="5"
                                value="{{ isset($data_pegawai) ? $data_pegawai->nama : '' }}" required>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Jabatan
                                    <span class="required">*</span></label>
                                <select class="form-select" name="jabatan" id="jabatan" required>
                                    <option selected disabled value="">Pilih Jabatan</option>
                                    <option value="Honorer Dipa" {{ (isset($data_pegawai) && $data_pegawai->jabatan == "Honorer Dipa")
                                        ? 'selected' : '' }}>Honorer Dipa</option>
                                    <option value="Honorer Non-Dipa" {{ (isset($data_pegawai) && $data_pegawai->jabatan == "Honorer Non-Dipa")
                                        ? 'selected' : '' }}>Honorer Non-Dipa</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Status
                                    <span class="required">*</span></label>
                                <select class="form-select" name="status" id="status" required>
                                    <option selected disabled value="">Pilih Status</option>
                                    <option value="Pramubakti" {{ (isset($data_pegawai) && $data_pegawai->status == "Pramubakti")
                                        ? 'selected' : '' }}>Pramubakti</option>
                                    <option value="Driver" {{ (isset($data_pegawai) && $data_pegawai->status == "Driver")
                                        ? 'selected' : '' }}>Driver</option>
                                    <option value="Satpam" {{ (isset($data_pegawai) && $data_pegawai->status == "Satpam")
                                        ? 'selected' : '' }}>Satpam</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="curl" class="form-label">Tahun Masuk
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                value="{{ isset($data_pegawai) ? $data_pegawai->tahun_masuk : '' }}"
                                required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Alamat
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                value="{{ isset($data_pegawai) ? $data_pegawai->alamat : '' }}"
                                required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary"  style="width: 200px" type="submit">Save</button>
                                <a href="{{ url('admin/pegawai') }}">
                                    <button class="btn btn-secondary"  style="width: 200px" type="button">Cancel</button>
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