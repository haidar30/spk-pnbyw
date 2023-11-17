@extends("superadmin.layouts.sidebar")

@section('content')
<section id="main-content">

<!--  Page Title -->
    <div class="pagetitle">
        <h1>Data Pegawai</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Home</a></li>
            <li class="breadcrumb-item"><a>Dashboard</a></li>
            <li class="breadcrumb-item active">Data Pegawai</li>
        </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- Isinya Dari Isi -->
        <div class="col-lg-12">
            <div class="row">
            <section class="card-body">
                <div class="card">
                    <div class="card-body">
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="bi bi-bag-dash"></i> Nama</th>
                            <th scope="col"><i class="bi bi-receipt"></i> Jabatan</th>
                            <th scope="col"><i class="bi bi-gear"></i> Status</th>
                            <th scope="col"><i class="bi bi-calendar-event"></i> Tahun Masuk</th>
                            <th scope="col"><i class="bi bi-receipt"></i> Alamat</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($data_pegawai as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->tahun_masuk }}</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    </div>
                </div>
            </section>
            </div>
        </div>
<!-- End Isinya Dari Isi -->

</section>
@endsection