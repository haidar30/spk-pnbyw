@extends("admin.layouts.sidebar")

@section('content')
<section id="main-content">

<!--  Page Title -->
    <div class="pagetitle">
        <h1>Data Pengguna</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Home</a></li>
            <li class="breadcrumb-item"><a>Dashboard</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
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
                    <a href="{{ route('pengguna.create') }}"><button class="btn btn-primary" style="width: 200px" type="button">
                        Tambah</button></a> <br> <br>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="bi bi-bag-dash"></i> Nama</th>
                            <th scope="col"><i class="bi bi-bag-dash"></i> NIP</th>
                            <th scope="col"><i class="bi bi-receipt"></i> Email</th>
                            <th scope="col"><i class="bi bi-emoji-sunglasses"></i> Jabatan</th>
                            <th scope="col"><i class="ri-organization-chart"></i> Role</th>
                            <th scope="col"><i class="bi bi-gear"></i> Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($users as $no => $item)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>
                                    @if($item->type == 0)
                                        User
                                    @elseif($item->type == 1)
                                        Admin
                                    @elseif($item->type == 2)
                                        Superadmin
                                    @endif
                                </td>  
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('pengguna.destroy',$item->id) }}" method="POST">
                                        <a href="{{ route('pengguna.edit',$item->id) }}"
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