@extends("admin.layouts.sidebar")

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
                            <a href="{{ route('subkriteria.create') }}">
                                <button class="btn btn-primary" style="width: 200px" type="button">
                                    Tambah
                                </button>
                            </a> 
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
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="bi bi-bag-dash"></i> Kriteria</th>
                            <th scope="col"><i class="bi bi-bag"></i> Sub-Kriteria</th>
                            <th scope="col"><i class="bi bi-receipt"></i> Bobot</th>
                            <th scope="col"><i class="bi bi-gear"></i> Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($subkriteria as $no => $item)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $item->kriteria->kriteria }}</td>
                                <td>{{ $item->subkriteria }}</td>
                                <td>{{ $item->bobot }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('subkriteria.destroy',$item->id) }}" method="POST">
                                        <a href="{{ route('subkriteria.edit',$item->id) }}"
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
