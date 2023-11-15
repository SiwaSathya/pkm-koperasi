@extends("template.template")
 @push('css')
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href={{asset("asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href={{asset("asset/plugins/fontawesome-free/css/all.min.css")}}>

    <link rel="stylesheet" href={{asset("asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
    <link rel="stylesheet" href={{asset("asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}>
    <link rel="stylesheet" href={{asset("asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}>

    <link rel="stylesheet" href={{asset("asset/dist/css/adminlte.min.css?v=3.2.0")}}>
    <script src="{{ asset('assets/plugins/orgChart/js/jquery.orgchart.js') }}"></script>
    <style>
        .star::after{
        content: " *";
        color: red;
        }
    </style>
  @endpush
@section("content")
<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard Monitoring Koperasi</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{$koperasi->count()}}</h3>
    
                    <p>Total Koperasi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer"><i class="fas fa-home"></i> Koperasi </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$pelaporan->count()}}</h3>
                    <p>Sudah Pelaporan</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer"><i class="fas fa-home"></i> Koperasi </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{$pelaporan->where('status',2)->count()}}</h3>
                    <p>Laporan di Revisi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer"><i class="fas fa-file"></i> Dokumen </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h3>{{$pelaporan->where('status',1)->count()}}</h3>
    
                    <p>Pelaporan Disetujui</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer"><i class="fas fa-file"></i> Dokumen </a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="col-lg-6 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-home mr-1"></i>
                      Jumlah Koperasi Berdasarkan Kelompok Koperasi
                    </h3>
           
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content p-0">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" id="revenue-chart"
                           style="position: relative; height: 300px;">
                           <canvas id="bar-chart-kelompok" width="1000" height="450"></canvas>
                       </div>
                      <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                        <!-- <canvas id="bar-chart-kelompok" width="800" height="450"></canvas> -->
                      </div>
                    </div>
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                <!-- DIRECT CHAT -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-home mr-1"></i>
                      Jumlah Koperasi Berdasarkan Bentuk Koperasi
                    </h3>
           
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content p-0">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" id="revenue-chart"
                           style="position: relative; height: 300px;">
                           <canvas id="bar-chart-bentuk" width="1000" height="450"></canvas>
                       </div>
                      <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                        <!-- <canvas id="bar-chart-kelompok" width="800" height="450"></canvas> -->
                      </div>
                    </div>
                  </div><!-- /.card-body -->
                </div>
                <!--/.direct-chat -->
    
              
                <!-- /.card -->
              </section>
              <!-- /.Left col -->
              <!-- right col (We are only adding the ID to make the widgets sortable)-->
              <section class="col-lg-6 connectedSortable">
    
                <!-- Map card -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-home mr-1"></i>
                      Jumlah Koperasi Berdasarkan Sektor Usaha
                    </h3>
           
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content p-0">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" id="revenue-chart"
                           style="position: relative; height: 300px;">
                           <canvas id="bar-chart-sektor" width="800" height="450"></canvas>
                       </div>
                      <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                        <!-- <canvas id="bar-chart-kelompok" width="800" height="450"></canvas> -->
                      </div>
                    </div>
                  </div><!-- /.card-body -->
                </div>
    
                <!-- solid sales graph -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-home mr-1"></i>
                      Jumlah Koperasi Berdasarkan Jenis Koperasi
                    </h3>
           
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content p-0">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" >
                           <canvas id="bar-chart-jenis" width="1000" height="200"></canvas>
                       </div>
                      <div class="chart tab-pane" style="position: relative; height: 300px;">
                        <!-- <canvas id="bar-chart-kelompok" width="800" height="450"></canvas> -->
                      </div>
                    </div>
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
    
              
                <!-- /.card -->
              </section>
              <!-- right col -->
            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
</body>
@endsection

<!-- ./wrapper -->

@push('scripts')

<script src={{asset("asset/plugins/jquery/jquery.min.js")}}></script>
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<script src={{asset("asset/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>

<script src={{asset("asset/plugins/datatables/jquery.dataTables.min.js")}}></script>
<script src={{asset("asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}></script>
<script src={{asset("asset/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}></script>
<script src={{asset("asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}></script>
<script src={{asset("asset/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}></script>
<script src={{asset("asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}></script>
<script src={{asset("asset/plugins/jszip/jszip.min.js")}}></script>
<script src={{asset("asset/plugins/pdfmake/pdfmake.min.js")}}></script>
<script src={{asset("asset/plugins/pdfmake/vfs_fonts.js")}}></script>
<script src={{asset("asset/plugins/datatables-buttons/js/buttons.html5.min.js")}}></script>
<script src={{asset("asset/plugins/datatables-buttons/js/buttons.print.min.js")}}></script>
<script src={{asset("asset/plugins/datatables-buttons/js/buttons.colVis.min.js")}}></script>




<script>
    $(function() {
        kelompok();
        sektor();
        bentuk();
    });
    function kelompok() {
        $.ajax({
                dataType : "json",
                type: 'post',
                url:"{{ route('pelaporan.chart') }}",
                data: {tipe:'kelompok',_token: "{{ csrf_token() }}"},
                success: function (data) {
                barChart(data,'Kelompok Koperasi','bar-chart-kelompok');
                }
            });
    }

    function sektor() {
        $.ajax({
                dataType : "json",
                type: 'post',
                url:"{{ route('pelaporan.chart') }}",
                data: {tipe:'sektor_usaha',_token: "{{ csrf_token() }}"},
                success: function (data) {
                barChart(data,'Sektor Usaha Koperasi','bar-chart-sektor');
                }
            });
    }
    function bentuk() {
        $.ajax({
                dataType : "json",
                type: 'post',
                url:"{{ route('pelaporan.chart') }}",
                data: {tipe:'bentuk',_token: "{{ csrf_token() }}"},
                success: function (data) {
                barChart(data,'Bentuk Koperasi','bar-chart-bentuk');
                }
            });
    }

    

    function barChart(data,label,element){
    var labels = data.datas.map(function(e) {
         return e.label;
      });
      var datas = data.datas.map(function(e) {
         return e.data;
      });
     

    var barOptions_stacked = {
      plugins: {
					colorschemes: {
						scheme: 'brewer.Paired12'
					}
				},
    tooltips: {
        enabled: true
    },
    hover :{
        animationDuration:0
    },
    scales: {
        xAxes: [{
          categorySpacing: 0,
            ticks: {
                beginAtZero:true,
                fontFamily: "'Open Sans Bold', sans-serif",
                fontSize:5
            },
            scaleLabel:{
                display:false
            },
            gridLines: {
                display:false,
            }, 
            stacked: false
        }],
        yAxes: [{
            gridLines: {
                drawBorder: false,
                display:false,
            },
        }]
    },
    legend:{
        display:false
    },
    
    animation: {
        onComplete: function () {
            var chartInstance = this.chart;
            var ctx = chartInstance.ctx;
            ctx.textAlign = "left";
            ctx.font = "18px Open Sans";
            ctx.fillStyle = "#fff";
            Chart.helpers.each(this.data.datasets.forEach(function (dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                Chart.helpers.each(meta.data.forEach(function (bar, index) {
                    data = dataset.data[index];
                    if(i==0){
                        ctx.fillText(data, bar._model.x-10, bar._model.y+20);
                    } else {
                        ctx.fillText(data, bar._model.x-10, bar._model.y+20);
                    }
                }),this)
            }),this);
        }
    },
    pointLabelFontFamily : "Quadon Extra Bold",
    scaleFontFamily : "Quadon Extra Bold",
};

var ctx = document.getElementById(element);
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                data: datas,
                 backgroundColor: [
                    "rgb(34,139,34)",
                    "rgb(135,206,235)",
                    "rgb(70,130,180)",
                    "rgb(102,205,170)",
                    "rgb(240,128,128)"
                ],
                fill: false
            }]
        },
        options: {
          scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },
      legend: { display: false },
      plugins: {
					colorschemes: {
						scheme: 'brewer.Paired12'
					}
				},
      title: {
        display: true,
        text: label
      }
    }
    });
  }


//     new Chart(document.getElementById("bar-chart-kelompok"), {
//       type: 'bar',
//       data: {
//         labels: ["Kop. Pertanian", "Kop. Karyawan", "Kop. Simpan Pinjam", "Kop. Serba Usaha"],
//         datasets: [
//           {
//             label: "Kelompok Koperasi Per Tahun 2023",
//             backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
//             data: [8,2,15,10]
//           }
//         ]
//       },
//       options: {
//         legend: { display: false },
//         title: {
//           display: true,
//           text: 'Kelompok Koperasi Per Tahun 2023'
//         }
//       }
//   });
  
//   new Chart(document.getElementById("bar-chart-sektor"), {
//       type: 'bar',
//       data: {
//         labels: ["Pertanian, Kehutanan dan Perikanan", "Jasa Keuangan dan Asuransi", "Pengadaan Air, Peng. Sampah, Limbah dan Daur Ulang", "Jasa Lainnya"],
//         datasets: [
//           {
//             label: "Sektor Usaha Koperasi Per Tahun 2023",
//             backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
//             data: [6,19,7,3]
//           }
//         ]
//       },
//       options: {
//         legend: { display: false },
//         title: {
//           display: true,
//           text: 'Sektor Usaha Koperasi Per Tahun 2023'
//         }
//       }
//   });
  
//   new Chart(document.getElementById("bar-chart-bentuk"), {
//       type: 'bar',
//       data: {
//         labels: ["Primer Nasional", "Primer Provinsi", "Primer Kab/Kota", "Sekunder Kab/Kota"],
//         datasets: [
//           {
//             label: "Bentuk Koperasi Per Tahun 2023",
//             backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
//             data: [1,10,20,4]
//           }
//         ]
//       },
//       options: {
//         legend: { display: false },
//         title: {
//           display: true,
//           text: 'Sektor Usaha Koperasi Per Tahun 2023'
//         }
//       }
//   });
  
  
//   new Chart(document.getElementById("bar-chart-jenis"), {
//       type: 'pie',
//       data: {
//         labels: ["Komsumen", "Pemasaran", "Jasa", "Produsen","Simpan Pinjam"],
//         datasets: [
//           {
//             label: "Jenis Koperasi Per Tahun 2023",
//             backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
//             data: [2,3,5,5,20]
//           }
//         ]
//       },
//       options: {
//         legend: { display: false },
//         title: {
//           display: true,
//           text: 'Sektor Usaha Koperasi Per Tahun 2023'
//         }
//       }
//   });
  
  
  </script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endpush
</body>
</html>


