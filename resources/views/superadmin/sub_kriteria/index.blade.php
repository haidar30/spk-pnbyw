@extends("superadmin.layouts.sidebar")

@section('content')
<section id="main-content">

<!--  Page Title -->
<div class="pagetitle">
    <h1>Data Sub-Kriteria</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item"><a>Dashboard</a></li>
        <li class="breadcrumb-item active">Data Sub-Kriteria</li>
    </ol>
    </nav>
</div>
<!-- End Page Title -->

<!-- Isinya Dari Isi -->
    <div class="col-lg-12">
        <div class="row">
            <section class="card-body">
                <div class="card">
                    <div class="card-body"> <br>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="bi bi-bag-dash"></i> Kriteria</th>
                            <th scope="col"><i class="bi bi-bag"></i> Sub-Kriteria</th>
                            <th scope="col"><i class="bi bi-receipt"></i> Bobot</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($subkriteria as $no => $item)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $item->kriteria->kriteria }}</td>
                                <td>{{ $item->subkriteria }}</td>
                                <td>{{ $item->bobot }}</td>
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
