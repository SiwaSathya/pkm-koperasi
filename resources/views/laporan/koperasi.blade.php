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
    <style>
        .star::after{
        content: " *";
        color: red;
        }
    </style>
  @endpush
@section("content")
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Pelaporan</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Pelaporan</li>
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
@if($records != null)
    <h3 class="card-title">Data Pelaporan Koperasi Periode <b> {{$records->tgl_awal}} s/d {{$records->tgl_akhir}}</b></h3>
@elseif($periode != null)
    <h3 class="card-title">Data Pelaporan Koperasi Periode <b>{{$periode->tgl_awal}} s/d {{$periode->tgl_akhir}}</b></h3>
@else
    <h3 class="card-title">Data Pelaporan Koperasi</h3>
@endif
    </div>
@if($records == null && $periode == null)
    <button id="btnStart" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal" style="">Set Periode</button>
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
        <div class="modal-content ">
        <div class="modal-header">
            <h3 class="modal-title" id="formModalLabel">Periode</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formPeminjaman" method="post" action="{{route('periode.store')}}" enctype="multipart/form-data">
            <div class="modal-body">
            @csrf
            <div class="form-group row">
                <label for="firstName" class="col-sm-5 ml-5 col-form-label star">
                Tahun
                </label>
                <div class="col-sm-6">
                <input type="number" name="tahun" class="form-control" id="firstName" placeholder="Masukan Tahun" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-sm-5 ml-5 col-form-label star">
                Tanggal Awal
                </label>
                <div class="col-sm-6">
                <input type="date" name="tgl_awal" class="form-control" id="lastName" placeholder="Pilih Tanggal Awal" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-sm-5 ml-5 col-form-label star">
                Tanggal Akhir
                </label>
                <div class="col-sm-6">
                <input type="date" name="tgl_akhir" class="form-control" id="lastName" placeholder="Pilih Tanggal Akhir" required>
                </div>
            </div>
            <div class="form-check">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </form>
        </div>
    </div>
    </div>
@elseif(!empty($records) || empty($periode))
<a href="{{route('periode.setToNotNull')}}" class="btn btn-danger" data-confirm-periode="true">Akhiri Periode</a>
@endif
@if($records == null)
<form action="{{route('pelaporan.filters', ['id' => $id])}}" method="POST"  enctype="multipart/form-data">
    @csrf
<div class="form-group" style="max-width: 20%;  text-align:center; margin:auto;">
    <label class="mt-2" for="selectData">Pilih Filter Periode:</label>
    <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" id="selectData" name="periode_id">
        <option value="">Tampilkan Semua</option>
        @foreach ($periodenotnull as $data)
            <option value="{{ $data->id }}">{{ $data->tgl_awal }} s/d {{$data->tgl_akhir}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary mt-3">Filter</button>
</div>
</form>
@endif
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
    <th>Nama Koperasi</th>
    <th>Periode</th>
    <th>Keterangan</th>
    <th>File</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
@if(!empty($records))
    @foreach ($pelaporans as $pelaporan)
    <tr>
    <td>{{ $pelaporan->koperasi->users->name }}</td>
    <td>{{$pelaporan->periode->tgl_awal}} s/d {{$pelaporan->periode->tgl_akhir}}</td>
    <td>{{ $pelaporan->keterangan }}</td>
    <td>{{ $pelaporan->file }}</td>
    <td>
        @if ( $pelaporan->status == 1)
        <a href="{{ route('pelaporan.detail', ['id' => $pelaporan->id]) }}"><button type="button" class="btn btn-info">Info</button></a>
        <button class="btn btn-success" id="btnStart" type="button" disabled><i class="far fa-check-circle" ></i> Disetujui</button>
        @elseif ($pelaporan->status == 2)
        <a href="{{ route('pelaporan.detail', ['id' => $pelaporan->id]) }}"><button type="button" class="btn btn-info">Info</button></a>
        <button class="btn btn-warning" id="btnStart" type="button" disabled><i class="far fa-check-circle" ></i> Revisi</button>
        @else
        <a href="{{ route('pelaporan.detail', ['id' => $pelaporan->id]) }}"><button type="button" class="btn btn-info">Info</button></a>
        @endif
    </td>
    </tr>
    @endforeach
@else
@foreach ($pelaporanAll as $pelaporan)
<tr>
<td>{{ $pelaporan->koperasi->users->name}}</td>
<td>{{$pelaporan->periode->tgl_awal}} s/d {{$pelaporan->periode->tgl_akhir}}</td>
<td>{{ $pelaporan->keterangan }}</td>
<td>{{ $pelaporan->file }}</td>
<td>
    @if ( $pelaporan->status == 1)
    <a href="{{ route('pelaporan.detail', ['id' => $pelaporan->id]) }}"><button type="button" class="btn btn-info">Info</button></a>
    <button class="btn btn-success" id="btnStart" type="button" disabled><i class="far fa-check-circle" ></i> Approved</button>
    @elseif ($pelaporan->status == 2)
    <a href="{{ route('pelaporan.detail', ['id' => $pelaporan->id]) }}"><button type="button" class="btn btn-info">Info</button></a>
    <button class="btn btn-warning" id="btnStart" type="button" disabled><i class="far fa-check-circle" ></i> Revisi</button>
    @else
    <a href="{{ route('pelaporan.detail', ['id' => $pelaporan->id]) }}"><button type="button" class="btn btn-info">Info</button></a>
    @endif
</td>
</tr>
@endforeach
@endif
    </tr>
    </tbody>
    <tfoot>
    <tr>
    <th>Nama Koperasi</th>
    <th>Periode</th>
    <th>Keterangan</th>
    <th>File</th>
    <th>Aksi</th>
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


