@extends("template.template")
@section("content")

<body class="hold-transition sidebar-mini">
<div class="wrapper">


<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Profile</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">User Profile</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">

<div class="container-fluid">
<div class="row">
<div class="col-md-3">

<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
<img class="profile-user-img img-fluid img-circle" src={{asset("asset/images/koperasi.png")}} alt="User profile picture">
</div>
<h3 class="profile-username text-center">{{$koperasis->users->name}}</h3>
<p class="text-muted text-center"><b>{{$koperasis->users->email}}</b></p>
<p class="text-muted text-center" style="margin-top: -5%"><b>{{$koperasis->website}}</b></p>
<ul class="list-group list-group-unbordered mb-3">
<li class="list-group-item">
<b>Jumlah Laporan</b> <a class="float-right">{{count($pelaporan)}}</a>
</li>
</ul>
</div>

</div>


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Data Koperasi</h3>
</div>

<div class="card-body">
<strong><i class="fas fa-book mr-1"></i>Badan Hukum </strong>
<p class="text-muted mt-2">
    <b>Tanggal: </b>  {{$koperasis->badan_hukum_tanggal}} <br> <b>Nomor: </b>{{$koperasis->badan_hukum_nomor}} <br> <b>Pengesahan: </b>{{$koperasis->badan_hukum_pengesahan_id}}
</p>
<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>
<p class="text-muted">{{$koperasis->provinsi}}, {{$koperasis->kabupaten_kota}}, {{$koperasis->kecamatan}}, {{$koperasis->kelurahan_desa}}</p>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat & Tempat</strong>
<p class="text-muted">{{$koperasis->alamat}}, {{$koperasis->tempat}}</p>
<hr>
{{-- <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
<p class="text-muted">
<span class="tag tag-danger">UI Design</span>
<span class="tag tag-success">Coding</span>
<span class="tag tag-info">Javascript</span>
<span class="tag tag-warning">PHP</span>
<span class="tag tag-primary">Node.js</span>
</p>
<hr> --}}
<strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
<p class="text-muted">{{$koperasis->catatan}}</p>
</div>

</div>


</div>

<div class="col-md-9">
<div class="card">
<div class="card-header p-2">
<ul class="nav nav-pills">
<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Revisi</a></li>
<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
@if($user->role != "admin")
<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
@endif
</ul>
</div>
<div class="card-body">
<div class="tab-content">
<div class="active tab-pane" id="activity">

    @if ($pelaporanRev->isNotEmpty())
@foreach($pelaporanRev as $pelaporan)
<div class="post">
    <div class="user-block">
        {{-- <img class="img-circle img-bordered-sm "" src="../../dist/img/user1-128x128.jpg" alt="user image"> --}}
        <span class="username">
        <a href="#">{{$pelaporan->koperasi->users->name}}</a>
        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
        </span>
        <span class="description">Periode {{Carbon\Carbon::parse($pelaporan->periode->tgl_awal)->format('d-m-Y')}} s/d {{Carbon\Carbon::parse($pelaporan->periode->tgl_akhir)->format('d-m-Y')}}</span>
    </div>

    <p>
        <b>Keterangan Verifikator: </b>{{$pelaporan->keterangan_verifikator}}
    </p>
    <p>
    @if($pelaporan->status == 1)
    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Disetuji</a>
    @elseif($pelaporan->status == 2)
        @if($user->role == 'user')
        <button id="btnStart" onclick="formEdit('{{$pelaporan->id}}')" type="button" class="btn btn-warning" data-toggle="modal" data-target="#formModal" style="">Revisi</button>
        @endif
    @else
    <a href="#" class="link-black text-sm"><i class="far fa-mail mr-1"></i> Menunggu Validasi</a>
    @endif
    <span class="float-right">
    </span>
    </p>
    <button class="btn btn-primary" disabled></button>

</div>
@endforeach
@endif



{{-- <div class="post clearfix">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
    <span class="username">
    <a href="#">Sarah Ross</a>
    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
    </span>
    <span class="description">Sent you a message - 3 days ago</span>
    </div>

    <p>
    Lorem ipsum represents a long-held tradition for designers,
    typographers and the like. Some people hate it and argue for
    its demise, but others ignore the hate as they create awesome
    tools to help create filler text for everyone from bacon lovers
    to Charlie Sheen fans.
    </p>
    <form class="form-horizontal">
    <div class="input-group input-group-sm mb-0">
    <input class="form-control form-control-sm" placeholder="Response">
    <div class="input-group-append">
    <button type="submit" class="btn btn-danger">Send</button>
    </div>
    </div>
    </form>
</div> --}}


<div class="post">
    {{-- <div class="user-block">
        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
        <span class="username">
        <a href="#">Adam Jones</a>
        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
        </span>
        <span class="description">Posted 5 photos - 5 days ago</span>
    </div> --}}

    <div class="row mb-3">
        {{-- <div class="col-sm-6">
            <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
        </div>

        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                    <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                </div>

                <div class="col-sm-6">
                    <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                    <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                </div>

            </div>

        </div> --}}

    </div>

    {{-- <p>
    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
    <span class="float-right">
    <a href="#" class="link-black text-sm">
    <i class="far fa-comments mr-1"></i> Comments (5)
    </a>
    </span>
    </p>
    <input class="form-control form-control-sm" type="text" placeholder="Type a comment"> --}}
</div>

</div>

<div class="tab-pane" id="timeline">
@php
    $previousPeriodeId = null;
@endphp

@if ($pelaporanTimeLine->isNotEmpty())

@foreach ($pelaporanTimeLine as $pelaporan)


<div class="timeline timeline-inverse">
<div class="time-label">
@if ($pelaporan->periode_id != $previousPeriodeId)
<span class="bg-danger">
{{Carbon\Carbon::parse($pelaporan->periode->tgl_awal)->format('d-m-Y')}} s/d {{Carbon\Carbon::parse($pelaporan->periode->tgl_akhir)->format('d-m-Y')}}
</span>
@endif
</div>


<div>
    @if ($pelaporanTimeLine->isNotEmpty())
@if ($pelaporan->periode_id != $previousPeriodeId)
<i class="fas fa-envelope bg-primary"></i>
@else
<i class="fas fa-comment bg-info"></i>
@endif
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> {{Carbon\Carbon::parse($pelaporan->created_at)->format('d-m-Y')}}</span>
<h3 class="timeline-header"><a href="#">Koperasi</a> {{$pelaporan->koperasi->users->name}}</h3>
<div class="timeline-body">
{{$pelaporan->keterangan}}
</div>
<div class="timeline-footer">
<a href="{{ route('pelaporan.detail', ['id' => $pelaporan->id]) }}" class="btn btn-primary btn-sm">Lihat Laporan</a>
</div>
</div>
</div>
@endif


<div id="env-data" data-api="{{ env('KOPERASI_API') }}"></div>







@if ($pelaporan->periode_id != $previousPeriodeId)
</div>
@else
</div>
@endif
@php
    $previousPeriodeId = $pelaporan->periode_id;
@endphp
@endforeach
@endif


</div>


<div class="tab-pane" id="settings">
<form class="form-horizontal" method="post" action="{{route('forget.password')}}">
    @csrf
<input type="hidden" class="form-control" id="inputName" name="email" value="{{$koperasis->users->email}}">
<div class="form-group row">
<label for="inputName" class="col-sm-2 col-form-label">Password Lama</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputName" name="old_password" placeholder="Masukan Password Sebelumnya">
</div>
</div>
<div class="form-group row">
<label for="inputEmail" class="col-sm-2 col-form-label">Password Baru</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputEmail" name="new_password" placeholder="Masukan Password Baru">
</div>
</div>
<div class="form-group row">
<label for="inputName2" class="col-sm-2 col-form-label">Konfirmasi Password Baru</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputName2" name="confirm_password" placeholder="Masukan Password Baru Sekali Lagi">
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<button type="submit" class="btn btn-danger">Submit</button>
</div>
</div>
</form>
</div>

</div>


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


<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
        <div class="modal-content ">
        <div class="modal-header">
            <h3 class="modal-title" id="formModalLabel">Periode</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="form_update_pelaporan" method="post" action="" enctype="multipart/form-data">
            <div class="modal-body">
            @csrf
            <div class="form-group row">
                <div class="col-sm-6">
                    @if ($pelaporanTimeLine->isNotEmpty())
                    <input type="hidden" value="{{$pelaporan->id}}" name="id" id="input_id" class="form-control" id="firstName" required>
                    @endif
                 
                </div>
              </div>
            <div class="form-group row">
                <label for="firstName" class="col-sm-5 ml-5 col-form-label star">
                Keterangan
                </label>
                <div class="col-sm-6">
                    <textarea name="keterangan" class="form-control" cols="10" rows="2" id="input_keterangan"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-sm-5 ml-5 col-form-label star">
                File : <span class="input_file"></span>
                </label>
                <img src="" alt="">
                <div class="col-sm-6">
                <input type="file" name="file" class="form-control" id="lastName"required>
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



<script>
    async function formEdit(id) {
        var envDataElement = document.getElementById('env-data');
        var apiURL = envDataElement.getAttribute('data-api');

        // alert(id)
        const response = await fetch(apiURL+"/pelaporan-detail-api/"+id);
        const data = await response.json();

        let idPelaporan = data.pelaporans.id;
        let keteranganPelaporan = data.pelaporans.keterangan;
        let filePelaporan = data.pelaporans.file;

        // action
        let form_update_pelaporan = document.querySelector('#form_update_pelaporan')
        form_update_pelaporan.setAttribute('action', '/update-revisi');

        // kerengangan
        let keterangan_input = document.querySelector('#form_update_pelaporan #input_keterangan');
        keterangan_input.value = keteranganPelaporan;

        // file
        let file_input = document.querySelector('#form_update_pelaporan .input_file');
        file_input.innerHTML = filePelaporan;
    }
</script>

@endsection
</body>


