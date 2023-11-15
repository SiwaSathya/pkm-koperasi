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
    <h1>Koperasi</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Data Koperasi</li>
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
    <button id="btnStart" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal" style="float: right;" > <i  class="fa fa-home"></i> Tambah Koperasi</button>
    </div>

    <!-- Button trigger modal -->
<!-- Modal -->
{{-- <button id="btnStart" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah Akun Koperasi</button> --}}
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel">Tambah Koperasi</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formPeminjaman" method="post" action="{{route('koperasi.store')}}" enctype="multipart/form-data">
        <div class="modal-body">
        @csrf
          <div class="form-group row">
            <label for="firstName" class="col-sm-5 ml-5 col-form-label star">
             Nama Koperasi
            </label>
            <div class="col-sm-6">
              <input type="text" name="nama_koperasi" class="form-control" id="firstName" placeholder="Masukan Nama Koperasi" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-5 ml-5 col-form-label star">
              Email Koperasi
            </label>
            <div class="col-sm-6">
              <input type="email" name="email" class="form-control" id="lastName" placeholder="koperasi@gmail.com" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-5 ml-5 col-form-label">
            Badan Hukum Tanggal
            </label>
            <div class="col-sm-6">
            <input type="date" name="badan_hukum_tanggal" class="form-control" id="lastName" placeholder="Masukan Tanggal" >
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Badan Hukum Nomor</label>
            <div class="col-sm-6">
            <input type="text" name="badan_hukum_nomor" class="form-control" id="lastName" placeholder="Masukan Nomor Hukum" >
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Badan Hukum Pengesahan</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="badan_hukum_pengesahan_id" id="">
            <option value="1. Deputi Bidang Kelembagaan KUKM Atas Nama Menteri">1. Deputi Bidang Kelembagaan KUKM Atas Nama Menteri</option>
            <option value="2. Gubernur Atas Nama Menteri">2. Gubernur Atas Nama Menteri</option>
            <option value="3. Bupati/Walikota Atas Nama Menteri">3. Bupati/Walikota Atas Nama Menteri</option>
            <option selected="selected" value="0.Tidak Tahu">0.Tidak Tahu</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Tempat</label>
            <div class="col-sm-6">
            <input type="text" name="tempat" class="form-control" id="lastName" placeholder="Masukan Tempat" >
            </div>
        </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Pembuat Akta</label>
            <div class="col-sm-6">
            <input type="text" name="pembuat_akta" class="form-control" id="lastName" placeholder="Masukan Pembuat Akta" >
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              NPWP</label>
            <div class="col-sm-6">
            <input type="text" name="npwp" class="form-control" id="lastName" placeholder="Masukan NPWP" >
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label star">
              Alamat</label>
            <div class="col-sm-6">
            <input type="text" name="alamat" class="form-control" id="lastName" placeholder="Masukan Alamat" required>
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Provinsi</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="provinsi" id="provinsi">
            <option value="" selected="selected" disabled>Pilih Provinsi</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Kabupaten/Kota</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="kabupaten" id="kabupaten">
            <option value="" selected="selected" disabled>Pilih Kabupaten/Kota</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Kecamatan</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="kecamatan" id="kecamatan">
            <option value="" selected="selected" disabled>Pilih Kecamatan</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Kelurahan/Desa</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="kelurahan" id="kelurahan">
            <option value="" selected="selected" disabled>Pilih Kelurahan/Desa</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Kode Pos</label>
            <div class="col-sm-6">
            <input type="number" name="kode_pos" class="form-control" id="lastName" placeholder="Masukan Kode Pos" >
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Nomor Handphone</label>
            <div class="col-sm-6">
            <input type="number" name="no_hp" class="form-control" id="lastName" placeholder="Masukan Nomor Handphone" >
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Nomor Telephone</label>
            <div class="col-sm-6">
            <input type="number" name="no_tlp" class="form-control" id="lastName" placeholder="Masukan Nomor Telephone" >
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Nomor Fax</label>
            <div class="col-sm-6">
            <input type="number" name="no_fax" class="form-control" id="lastName" placeholder="Masukan Nomor Fax" >
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Website</label>
            <div class="col-sm-6">
            <input type="text" name="website" class="form-control" id="lastName" placeholder="Masukan Nama Website" >
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label star">
              Catatan</label>
            <div class="col-sm-6">
            <input type="text" name="catatan" class="form-control" id="lastName" placeholder="Masukan Catatan" required>
            </div>
            </div>
            <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Status Koperasi</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="status_koperasi" id="">
            <option selected="selected" disabled>Pilih Status Koperasi</option>
            <option value="1. Aktif">1. Aktif</option>
            <option value="2. Tidak Aktif">2. Tidak Aktif</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Koperasi Skala Besar</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="koperasi_skala_besar" id="">
            <option selected="selected" disabled>Pilih Koperasi Skala Besar</option>
            <option value="1. Ya">1. Ya</option>
            <option value="2. Tidak">2. Tidak</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Kelompok</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="kelompok" id="">
            <option selected="selected" disabled>Pilih Kelompok</option>
            <option value="Koperasi Pertanian">Koperasi Pertanian</option>
            <option value="Koperasi Karyawan">Koperasi Karyawan</option>
            <option value="Koperasi Simpan Pinjam">Koperasi Simpan Pinjam</option>
            <option value="Koperasi Setba Usaha">Koperasi Setba Usaha</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Sektor Usaha</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="sektor_usaha" id="">
            <option selected="selected" disabled>Pilih Sektor Usaha</option>
            <option value="Pertanian, Kehutanan dan Perikanan">Pertanian, Kehutanan dan Perikanan</option>
            <option value="Jasa Keuangan dan Asuransi">Jasa Keuangan dan Asuransi</option>
            <option value="Pengadaan Air">Pengadaan Air</option>
            <option value="Pengolahan Sampah, Limbah dan Daur Ulang">Pengolahan Sampah, Limbah dan Daur Ulang</option>
            <option value="Jasa Lainnya">Jasa Lainnya</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Bentuk Koperasi</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="bentuk" id="">
            <option selected="selected" disabled>Pilih Bentuk Koperasi</option>
            <option value="Primer Nasional">Primer Nasional</option>
            <option value="Primer Provinsi">Primer Provinsi</option>
            <option value="Primer Kab/Kota">Primer Kab/Kota</option>
            <option value="Sekunder Kab/Kota">Sekunder Kab/Kota</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-5 ml-5 col-form-label">
              Jenis Koperasi</label>
            <div class="col-sm-6">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="jenis" id="">
            <option selected="selected" disabled>Pilih Jenis Koperasi</option>
            <option value="Komsumen">Komsumen</option>
            <option value="Pemasaran">Pemasaran</option>
            <option value="Jasa">PeJasa</option>
            <option value="Produsen">Produsen</option>
            <option value="Simpan Pinjam">Simpan Pinjam</option>
            </select>
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
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
    <th>Nama Koperasi</th>
    <th>Email</th>
    <th>Badan Hukum Tanggal</th>
    <th>Badan Hukum Nomor</th>
    <th>Badan Hukum Pengesahan</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($koperasis as $koperasi)
    <tr>
    <td>{{$koperasi->nama_koperasi}}</td>
    <td>{{$koperasi->users->email}}</td>
    <td>{{$koperasi->badan_hukum_tanggal}}</td>
    <td>{{$koperasi->badan_hukum_nomor}}</td>
    <td>{{$koperasi->badan_hukum_pengesahan_id}}</td>
    <td>
         <a href="{{ route('profile.detail', ['id' => $koperasi->id]) }}"> <button type="button" class="btn btn-info  btn-xs"> <i  class="fa fa-info"></i>  Info</button></a> <br> <br>
         @if($koperasi->isaktif == 0)
         <a href="{{ route('pelaporan.detail', ['id' => $koperasi->id]) }}"> <button type="button" class="btn btn-danger btn-xs" disabled> <i  class="fa fa-trash"></i> Delete</button></a>
         @endif
    </td>
    </tr>
    @endforeach
    </tr>
    </tbody>
    <tfoot>
    <tr>
    <th>Nama Koperasi</th>
    <th>Email</th>
    <th>Badan Hukum Tanggal</th>
    <th>Badan Hukum Nomor</th>
    <th>Badan Hukum Pengesahan</th>
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
    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
    .then(response => response.json())
    .then(provinces => {
        var data = provinces;
        var tampung = '<option value="" selected="selected" disabled >Pilih Provinsi</option>';
        data.forEach(element => {
            tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
        });
        document.getElementById('provinsi').innerHTML = tampung;
        });
</script>

<script>
    const selectProvinsi = document.getElementById('provinsi');
    selectProvinsi.addEventListener('change', (e) => {
        var provinsi = e.target.options[e.target.selectedIndex].dataset.reg;
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
            .then(response => response.json())
            .then(regencies =>{
                var data = regencies;
                var tampung = '<option value="" selected="selected" disabled >Pilih Kabupaten/Kota</option>';
                data.forEach(element => {
                    tampung += `<option data-dist="${element.id}" value="${element.name}">${element.name}</option>`;
                });
                document.getElementById('kabupaten').innerHTML = tampung;
            });
    });

    const selectKabupaten = document.getElementById('kabupaten');
    selectKabupaten.addEventListener('change', (e) => {
        var kabupaten = e.target.options[e.target.selectedIndex].dataset.dist;
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabupaten}.json`)
            .then(response => response.json())
            .then(districts =>{
                var data = districts;
                var tampung = '<option value="" selected="selected" disabled >Pilih Kecamatan </option>';
                data.forEach(element => {
                    tampung += `<option data-vill="${element.id}" value="${element.name}">${element.name}</option>`;
                });
                document.getElementById('kecamatan').innerHTML = tampung;
            });
    });

    const selectKecamatan = document.getElementById('kecamatan');
    selectKecamatan.addEventListener('change', (e) => {
        var kecamatan = e.target.options[e.target.selectedIndex].dataset.vill;
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
            .then(response => response.json())
            .then(villages =>{
                var data = villages;
                var tampung = '<option value="" selected="selected" disabled >Pilih Kelurahan/Desa</option>';
                data.forEach(element => {
                    tampung += `<option value="${element.name}">${element.name}</option>`;
                });
                document.getElementById('kelurahan').innerHTML = tampung;
            });
    });
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


