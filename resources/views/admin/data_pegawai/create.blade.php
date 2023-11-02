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
                        <form class="row g-3" action="{{ isset($data_pegawai) ? route('data_pegawai.update',
                        $data_pegawai->id) : route('data_pegawai.store') }}"
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
                                <label for="cname" class="form-label">Jabatan
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" minlength="2"
                                value="{{ isset($data_pegawai) ? $data_pegawai->jabatan : '' }}" required>
                            </div>
                            <div class="col-12">
                                <label for="cname" class="form-label">Status
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="status" name="status" minlength="3"
                                value="{{ isset($data_pegawai) ? $data_pegawai->status : '' }}"
                                required>
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
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a href="{{ route('data_pegawai.index') }}">
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