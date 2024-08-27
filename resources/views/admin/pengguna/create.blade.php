@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Tambah Data Pengguna</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item"><a>Data Pengguna</a></li>
        <li class="breadcrumb-item active">Tambah Data Pengguna</li>
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
                            {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Data Pengguna
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
                        <form class="row g-3" action="{{ isset($users) ? route('pengguna.update',
                        $users->id) : route('pengguna.store') }}"
                        id="users_form" method="POST">
                            {!! csrf_field() !!}
                            {!! isset($users) ? method_field('PUT') : '' !!}
                            @if(isset($users))
                                <input type="hidden" name="id" value="{{ $users->id }}">
                            @endif
                            <div class="col-12">
                                <label for="cname" class="form-label">Nama Pengguna
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" minlength="5"
                                value="{{ isset($users) ? $users->name : '' }}" required>
                            </div>
                            <div class="col-12">
                                <label for="cname" class="form-label">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip" minlength="5"
                                value="{{ isset($users) ? $users->nip : '' }}" required>
                            </div>
                            <div class="col-12">
                                <label for="cname" class="form-label">Email
                                    <span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" minlength="2"
                                value="{{ isset($users) ? $users->email : '' }}" required>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Jabatan
                                    <span class="required">*</span></label>
                                <select class="form-select" name="jabatan" id="jabatan" required>
                                    <option selected disabled value="">Pilih Jabatan</option>
                                    <option value="Administrator" {{ (isset($users) && $users->jabatan == "Administrator")
                                        ? 'selected' : '' }}>Administrator</option>
                                    <option value="Ketua" {{ (isset($users) && $users->jabatan == "Ketua")
                                        ? 'selected' : '' }}>|-- Ketua</option>
                                    <option value="Wakil Ketua" {{ (isset($users) && $users->jabatan == "Wakil Ketua")
                                        ? 'selected' : '' }}>|-- Wakil Ketua</option>
                                    <option value="Panitera" {{ (isset($users) && $users->jabatan == "Panitera")
                                        ? 'selected' : '' }}>|-- |-- Panitera</option>
                                    <option value="Sekretaris" {{ (isset($users) && $users->jabatan == "Sekretaris")
                                        ? 'selected' : '' }}>|-- |-- Sekretaris</option>
                                    <option value="Kasubag Kepegawaian" {{ (isset($users) && $users->jabatan == "Kasubag Kepegawaian")
                                        ? 'selected' : '' }}>|-- |-- |-- Kasubag Kepegawaian</option>
                                    <option value="Kasubag Umum & Keuangan" {{ (isset($users) && $users->jabatan == "Kasubag Umum & Keuangan")
                                        ? 'selected' : '' }}>|-- |-- |-- Kasubag Umum & Keuangan</option>
                                    <option value="Kasubag PTIP" {{ (isset($users) && $users->jabatan == "Kasubag PTIP")
                                        ? 'selected' : '' }}>|-- |-- |-- Kasubag PTIP</option>
                                    <option value="Panmud Perdata" {{ (isset($users) && $users->jabatan == "Panmud Perdata")
                                        ? 'selected' : '' }}>|-- |-- |-- Panmud Perdata</option>
                                    <option value="Panmud Pidana" {{ (isset($users) && $users->jabatan == "Panmud Pidana")
                                        ? 'selected' : '' }}>|-- |-- |-- Panmud Pidana</option>
                                    <option value="Panmud Hukum" {{ (isset($users) && $users->jabatan == "Panmud Hukum")
                                        ? 'selected' : '' }}>|-- |-- |-- Panmud Hukum</option>
                                    <option value="Honorer Dipa" {{ (isset($users) && $users->jabatan == "Honorer Dipa")
                                        ? 'selected' : '' }}>|-- |-- |-- |-- Honorer Dipa</option>
                                    <option value="Honorer Non-Dipa" {{ (isset($users) && $users->jabatan == "Honorer Non-Dipa")
                                        ? 'selected' : '' }}>|-- |-- |-- |-- Honorer Non-Dipa</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="validationDefault04" class="form-label">Role / Hak Akses
                                    <span class="required">*</span></label>
                                <select class="form-select" name="type" id="type" required>
                                    <option selected disabled value="">Pilih Role</option>
                                    <option value="0" {{ (isset($users) && $users->type == "0")
                                        ? 'selected' : '' }}>User</option>
                                    <option value="1" {{ (isset($users) && $users->type == "1")
                                        ? 'selected' : '' }}>Admin</option>
                                    <option value="2" {{ (isset($users) && $users->type == "2")
                                        ? 'selected' : '' }}>Superadmin</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="cname" class="form-label">Password
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="password" name="password" minlength="8"
                                value="{{ isset($users) ? $users->password : '' }}"
                                required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary"  style="width: 200px" type="submit">Save</button>
                                <a href="{{ url('admin/pengguna') }}">
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