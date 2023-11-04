@extends("template.template")

@push('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


@endpush


@section("content")
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Compose</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Compose</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="javascript:history.back()"  class="btn btn-primary btn-block mb-3">Kembali Ke Halaman Awal</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fas fa-inbox"></i> Coming Soon
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-envelope"></i> Coming Soon
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-file-alt"></i> Coming Soon
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fas fa-filter"></i> Coming Soon
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-trash-alt"></i> Coming Soon
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Labels</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-circle text-danger"></i> Coming Soon</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-circle text-warning"></i> Coming Soon</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-circle text-primary"></i> Coming Soon</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Laporan</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5><b>Pelapor: </b> {{$pelaporans->koperasi->users->name}}</h5>
                    @if($records != null)
                  <span class="mailbox-read-time float-right">periode: {{$records->tgl_awal}} s/d {{$records->tgl_akhir}}</span></h6>
                  @else
                  <span class="mailbox-read-time float-right">periode: {{$periode->tgl_awal}} s/d {{$periode->tgl_akhir}}</span></h6>
                  @endif
              </div>
              <!-- /.mailbox-read-info -->
              {{-- <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn- sm" data-container="body" title="Delete">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" title="Print">
                  <i class="fas fa-print"></i>
                </button>
              </div> --}}
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p><b>Keterangan:</b> {{ $pelaporans->keterangan }}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <iframe src="{{ asset('storage/pdf/'.$pelaporans->file) }}" width="100%" height="800"></iframe>
            <!-- /.card-footer -->
            <div class="card-footer">
        @if($user->role == 'admin')
            @if($pelaporans->status == 0 || $pelaporans->status == 2)
              <button class="btn btn-success" id="btnStart" type="button" data-toggle="modal" data-target="#formModal1"><i class="far fa-check-circle" ></i> Approve</button>
              <button class="btn btn-warning" id="btnStart" type="button" data-toggle="modal" data-target="#formModal2"><i class="fas fa-print"></i> Revisi</button>
            @else
            <button class="btn btn-success" id="btnStart" type="button" disabled><i class="far fa-check-circle" ></i> Approved</button>
            @endif
        @elseif($user->role == 'user' && $pelaporans->status == 1)
            <button class="btn btn-success" id="btnStart" type="button" disabled><i class="far fa-check-circle" ></i> Approved</button>
        @elseif($user->role == 'user' && $pelaporans->status == 2)
            <button class="btn btn-warning" id="btnStart" type="button" disabled><i class="far fa-check-circle" ></i> Revisi</button>
        @endif

            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="formModal1" tabindex="-1" role="dialog" aria-labelledby="formModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h3 class="modal-title" id="formModalLabel">Berikan Keterangan <br> <b>DISETUJUI</b></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formPeminjaman" method="post" action="{{route('pelaporan.approve')}}" enctype="multipart/form-data">
          <div class="modal-body">
          @csrf
          <div class="form-group row">
            <div class="col-sm-6">
              <input type="hidden" value="{{$pelaporans->id}}" name="id" class="form-control" id="firstName" required>
            </div>
          </div>
            <div class="form-group row">
              <label for="firstName" class="col-sm-5 ml-5 col-form-label">
               Keterangan Verifikator
              </label>
              <div class="col-sm-6">
                <input type="text" name="keterangan" class="form-control" id="firstName" placeholder="Masukan Keterangan" required>
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

  <div class="modal fade" id="formModal2" tabindex="-1" role="dialog" aria-labelledby="formModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h3 class="modal-title" id="formModalLabel">Berikan Keterangan <br> <b>REVISI</b></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formPeminjaman" method="post" action="{{route('pelaporan.revisi')}}" enctype="multipart/form-data">
          <div class="modal-body">
          @csrf
          <div class="form-group row">
            <div class="col-sm-6">
              <input type="hidden" value="{{$pelaporans->id}}" name="id" class="form-control" id="firstName" required>
            </div>
          </div>
            <div class="form-group row">
              <label for="firstName" class="col-sm-5 ml-5 col-form-label">
               Keterangan Verifikator
              </label>
              <div class="col-sm-6">
                <input type="text" name="keterangan" class="form-control" id="firstName" placeholder="Masukan Keterangan" required>
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

@endsection

@push('script')
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

@endpush
