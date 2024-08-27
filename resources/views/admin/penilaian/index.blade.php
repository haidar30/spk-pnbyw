@extends("admin.layouts.sidebar")

@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Penilaian Kinerja Pegawai Honorer</h1>
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
                    <a href="{{ route('penilaian.create') }}"><button class="btn btn-primary" style="width: 200px" type="button">
                        Tambah Penilaian Pegawai Honorer</button></a> 
                        <br> 
                        
                        <br>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"><i class="bi bi-bag-dash"></i> Nama Pegawai</th>
                                    <th scope="col"><i class="bi bi-receipt"></i> Bulan/Tahun</th>
                                    <th scope="col"><i class="bi bi-bag"></i> Kriteria</th>
                                    <th scope="col"><i class="bi bi-bag"></i> Nilai</th>
                                    {{-- <th scope="col"><i class="bi bi-gear"></i> Action</th> --}}
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($penilaians as $no => $item)
                                <tr>
                                    <th scope="row">{{ ++$no }}</th>
                                    <td>{{ $item->pegawai->nama }}</td>
                                    <td>{{ $item->bulan }}</td>
                                    <td>{{ $item->kriteria->kriteria }}</td>
                                    <td>{{ $item->nilai }}</td>
                                    {{-- <td> --}}
                                        {{-- <div class="btn-group">
                                            <form action="{{ route('penilaian.destroy',$item->id) }}" method="POST">
                                                <a href="{{ route('penilaian.edit',$item->id) }}"
                                                    class="btn btn-warning">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </a>
                                            </form>
                                        </div> --}}
                                        <!-- Vertically centered Modal -->
                                        {{-- <a href="#" type="button" data-nama="{{ $item->pegawai->nama }}" data-bulan="{{ $item->bulan }}" data-kriteria="{{ $item->kriteria->kriteria }}" data-nilai="{{ $item->nilai }}" class="btn btn-small btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a> --}}
                                    {{-- </td> --}}
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
    
    {{-- <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Nilai </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        
                        <form id="editForm" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="modal-id" name="id">
                            <div class="form-group mb-3 ">
                                <label for="modal-nama">Nama</label>
                                <input type="text" class="form-control" id="modal-nama" name="nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="modal-bulan">Bulan</label>
                                <input type="text" class="form-control" id="modal-bulan" name="bulan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="modal-kriteria">Kriteria</label>
                                <input type="text" class="form-control" id="modal-kriteria" name="kriteria">
                            </div>
                            <div class="form-group">
                                <label for="modal-nilai">Nilai</label>
                                <select class="form-control" id="modal-nilai" name="nilai">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cari semua elemen yang membuka modal
            document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function(element) {
                // Ketika tombol diklik
                element.addEventListener('click', function(event) {
                    // Dapatkan data dari atribut data-*
                    var nama = event.currentTarget.getAttribute('data-nama');
                    var bulan = event.currentTarget.getAttribute('data-bulan');
                    var kriteria = event.currentTarget.getAttribute('data-kriteria');
                    var nilai = event.currentTarget.getAttribute('data-nilai');
                    
                    // Set nilai input dengan data yang diambil
                    document.getElementById('modal-nama').value = nama;
                    document.getElementById('modal-bulan').value = bulan;
                    document.getElementById('modal-kriteria').value = kriteria;
                    document.getElementById('modal-nilai').value = nilai;
                    
                    selectElement.value = nilai;
                    
                    // Set action form dengan URL yang sesuai
                    var formAction = '/admin/penilaian/' + id; // Pastikan URL ini sesuai dengan route update
                    document.getElementById('editForm').setAttribute('action', formAction);
                });
            });
        });
        
    </script> --}}
    
    
    @endsection
    