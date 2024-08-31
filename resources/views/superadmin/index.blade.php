@extends("superadmin.layouts.sidebar")
@section('content')

<!--  Page Title -->
<div class="pagetitle">
    <h1>Dashboard Superadmin</h1>
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
            <h4 class="card-title">SELAMAT DATANG!! {{ Auth::user()->name }} (Ketua Pengadilan)</h4>
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
              <h2>{{$jumlahPegawai}}</h2>
              
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
              <h2>{{$jumlahKriteria}}</h2>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Revenue Card -->
    
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grafik Kinerja Pegawai Honorer</h5>
          <!-- Line Chart -->
          <div id="reportsChart"></div>
    
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              new ApexCharts(document.querySelector("#reportsChart"), {
                series: [{
                  name: 'Hariyanto',
                  data: [94, 92, 100, 100, 100, 94, 100, 98, 98, 100, 98, 98],
                }, {
                  name: 'Hillarius Suparwanto',
                  data: [82, 94, 100, 100, 100, 94, 100, 98, 96, 100, 100, 98]
                }, {
                  name: 'Septian Eko Laksono',
                  data: [100, 98, 100, 90, 90, 98, 100, 98, 100, 100, 100, 98]
                }, {
                  name: 'Ike Agung Maulida',
                  data: [74, 94, 100, 98, 100, 94, 100, 88, 98, 98, 100, 98]
                }, {
                  name: 'Didin Bramiana',
                  data: [100, 98, 100, 100, 100, 98, 100, 98, 100, 100, 90, 98]
                }, {
                  name: 'Afiif Hadiani',
                  data: [82, 98, 100, 100, 90, 98, 98, 98, 98, 98, 98, 98]
                }, {
                  name: 'Rudianto',
                  data: [60, 80, 96, 84, 90, 80, 88, 94, 96, 94, 96, 96]
                }, {
                  name: 'Ummah Hayrofiq',
                  data: [96, 98, 100, 100, 90, 98, 100, 90, 98, 100, 100, 98]
                }],
                chart: {
                  height: 350,
                  type: 'area',
                  toolbar: {
                    show: false
                  },
                },
                markers: {
                  size: 4
                },
                colors: ['#e63946', '#7b2cbf', '#f4d35e', '#8d5524', '#00b4d8', '#ff4d6d', '#6a994e', '#6c757d'],
                fill: {
                  type: "gradient",
                  gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.3,
                    opacityTo: 0.4,
                    stops: [0, 90, 100]
                  }
                },
                dataLabels: {
                  enabled: false
                },
                stroke: {
                  curve: 'smooth',
                  width: 2
                },
                xaxis: {
                  type: 'datetime',
                  categories: [
                    "2023-01-01T00:00:00.000Z", "2023-02-01T00:00:00.000Z", "2023-03-01T00:00:00.000Z", 
                    "2023-04-01T00:00:00.000Z", "2023-05-01T00:00:00.000Z", "2023-06-01T00:00:00.000Z", 
                    "2023-07-01T00:00:00.000Z", "2023-08-01T00:00:00.000Z", "2023-09-01T00:00:00.000Z", 
                    "2023-10-01T00:00:00.000Z", "2023-11-01T00:00:00.000Z", "2023-12-01T00:00:00.000Z"
                  ]
                },
                tooltip: {
                  x: {
                    format: 'MMM yyyy' // Menampilkan bulan dan tahun di tooltip
                  },
                }
              }).render();
            });
          </script>
          <!-- End Line Chart -->
        </div>
      </div>
    </div>

</div>
<!--  End Page Title -->

@endsection