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
    <h3 class="card-title">Data Koperasi</h3>
    </div>

    <!-- Button trigger modal -->
<!-- Modal -->
<button id="btnStart" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah Buku!</button>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel">Tambah Buku</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formPeminjaman" method="post" action="proces/proces-create-buku.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group row">
            <label for="firstName" class="col-sm-6 col-form-label">
              Kode Buku
            </label>
            <div class="col-sm-6">
              <input type="text" name="id_buku" class="form-control" id="firstName" placeholder="KD_00" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
              Nama Buku
            </label>
            <div class="col-sm-6">
              <input type="text" name="nama" class="form-control" id="lastName" placeholder="Kancil Yang Nakal" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
            Penulis
            </label>
            <div class="col-sm-6">
            <input type="text" name="penulis" class="form-control" id="lastName" placeholder="Yayan" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-6 col-form-label">
              Penerbit</label>
            <div class="col-sm-6">
            <input type="text" name="penerbit" class="form-control" id="lastName" placeholder="Trans Media" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-6 col-form-label">
              Pilih Nama Buku</label>
            <div class="col-sm-6">
            <input type="file" name="gambar" class="form-control" id="lastName" placeholder="Trans Media" required>
            </div>
          </div>
          <div class="form-check">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" onclick="AlertCreate()" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
    <th>Rendering engine</th>
    <th>Browser</th>
    <th>Platform(s)</th>
    <th>Engine version</tsh>
    <th>CSS grade</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($pelaporans as $pelaporan)
    <tr>
    <td>{{ $pelaporan->keterangan }}</td>
    <td>{{ $pelaporan->file }}</td>
    <td>test</td>
    <td>test</td>
    <td>test</td>
    <td>
        <a href="{{ route('pelaporan.detail', ['id' => $pelaporan->id]) }}"><button type="button" class="btn btn-info">Info</button></a>
    </td>
    </tr>
    @endforeach
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

<!-- <script src={{asset("asset/dist/js/adminlte.min.js?v=3.2.0")}}></script>

<script src={{asset("asset/dist/js/demo.js")}}></script> -->

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


