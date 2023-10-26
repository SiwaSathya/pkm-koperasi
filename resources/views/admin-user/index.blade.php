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

  @endpush
@section("content")
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <div class="content-wrapper">
    
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>DataTables</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">DataTables</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    
    <section class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header">
    
    
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
    </div>
    
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
    <th>Rendering engine</th>
    <th>Browser</th>
    <th>Platform(s)</th>
    <th>Engine version</th>
    <th>CSS grade</th>
    </tr>
    </thead>
    <tbody>

    <td>Other browsers</td>
    <td>All others</td>
    <td>-</td>
    <td>-</td>
    <td>U</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
    <th>Rendering engine</th>
    <th>Browser</th>
    <th>Platform(s)</th>
    <th>Engine version</th>
    <th>CSS grade</th>
    </tr>
    </tfoot>
    </table>
    </div>
    
    </div>
    
    </div>
    
    </div>
    
    </div>
    
    </section>
    
    </div>
    
    <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    
    <aside class="control-sidebar control-sidebar-dark">
    
    </aside>
    
</div>
    
    </section>
</body>
@endsection

<!-- ./wrapper -->

@push('scripts')

<script src={{asset("asset/plugins/jquery/jquery.min.js")}}></script>

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

<script src={{asset("asset/dist/js/adminlte.min.js?v=3.2.0")}}></script>

<script src={{asset("asset/dist/js/demo.js")}}></script>

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


