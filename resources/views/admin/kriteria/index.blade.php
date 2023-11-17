@extends("admin.layouts.sidebar")

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
                    <div class="card-body"> <br>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <a href="{{ route('kriteria.create') }}"><button class="btn btn-primary" style="width: 200px" type="button">
                                Tambah</button></a> <br> 
                                <br>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="bi bi-bag-dash"></i> Jenis Kriteria</th>
                            <th scope="col"><i class="bi bi-receipt"></i> Bobot</th>
                            <th scope="col"><i class="bi bi-bag"></i> Jenis</th>
                            <th scope="col"><i class="bi bi-gear"></i> Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($kriteria as $no => $item)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $item->kriteria }}</td>
                                <td>{{ $item->bobot }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('kriteria.destroy',$item->id) }}" method="POST">
                                        <a href="{{ route('kriteria.edit',$item->id) }}"
                                            class="btn btn-warning">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                        </form>
                                    </div>
                                </td>
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
