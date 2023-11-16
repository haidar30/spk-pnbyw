@extends("users.layouts.sidebar")
@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Dashboard Pegawai</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
<!-- End Page Title -->

<!--  Isinya Dari Isi -->
<div class="row">
    <!-- Top Selling -->
    <div class="col-12">
        <div class="card top-selling overflow-auto">

          <div class="card-body pb-0">
            <h4 class="card-title">SELAMAT DATANG {{ Auth::user()->name }}</h4>
            <h6 class="title">E-EKP Merupakan Elektronik Evaluasi Kinerja Pegawai Pada Honorer di Pengadilan Negeri Banyuwangi</h6>

          </div>

        </div>
    </div><!-- End Top Selling -->

    <!-- Sales Card -->
    <div class="col-xxl-6 col-md-6">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Data Pegawai Honorer</h5>

          <div class="d-flex align-items-center">
            <div class="ps-4">
              <h2>20</h2>
              
            </div>
          </div>
        </div>

      </div>
    </div><!-- End Sales Card -->

    <!-- Revenue Card -->
    <div class="col-xxl-6 col-md-6">
      <div class="card info-card revenue-card">

        <div class="card-body">
          <h5 class="card-title">Data Kriteria</h5>

          <div class="d-flex align-items-center">
            <div class="ps-4">
              <h2>6</h2>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Revenue Card -->

</div>
<!--  End Page Title -->

@endsection