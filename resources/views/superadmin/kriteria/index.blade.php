@extends("superadmin.layouts.sidebar")

@section('content')
<section id="main-content">

<!--  Page Title -->
<div class="pagetitle">
    <h1>Data Kriteria</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item active">Data Kriteria</li>
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
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="bi bi-bag-dash"></i> Jenis Kriteria</th>
                            <th scope="col"><i class="bi bi-receipt"></i> Bobot</th>
                            <th scope="col"><i class="bi bi-bag"></i> Jenis</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($kriteria as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->kriteria }}</td>
                                <td>{{ $item->bobot }}</td>
                                <td>{{ $item->jenis }}</td>
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
