@extends("template.template")
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        @push('css')
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href={{asset("asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}>
        <!-- Select2 -->
        <link rel="stylesheet" href={{asset("asset/plugins/select2/css/select2.min.css")}}>
        <link rel="stylesheet" href={{asset("asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}>
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href={{asset("asset/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}>
        <!-- BS Stepper -->
        <link rel="stylesheet" href={{asset("asset/plugins/bs-stepper/css/bs-stepper.min.css")}}>
        <!-- dropzonejs -->
        <link rel="stylesheet" href={{asset("asset/plugins/dropzone/min/dropzone.min.css")}}>
        <!-- Theme style -->
        <link rel="stylesheet" href={{asset("asset/dist/css/adminlte.min.css")}}>
        <style>
            .star::after{
            content: " *";
            color: red;
            }
        </style>
        @endpush
    </head>

@section("content")
@if(count($periode)>0 && $user->role != "admin")
    <body class="">
        <!-- resources/views/multiple-file-upload.blade.php -->
        <form action="{{route('pelaporan.store')}}" method="POST" enctype="multipart/form-data"  >
            <div class="d-flex flex-column p-5 shadow rounded" style="max-width: 80%; margin:50px auto; margin-left:17%;">
            @csrf
            <h5  class="mb-4">Fitur Multi Upload</h5>
                <!-- First File Input Field -->
                <div class="mb-3 d-flex flex-column">
                    <label for="formFile" class="form-label">Tambah Input</label>
                    <button id="addFileInput" class="btn btn-primary" style="max-width: 40px;" type="button">+</button>
                </div>

                <div class="form-group more-input ">
                  <div class="border shadow p-3 mb-3 rounded ">
                    <!-- <div class="col-md-15 mb-3 ">
                      <label for="validationCustom01">Judul</label>
                      <input name="judul[]" type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                    </div> -->
                    <label for="exampleFormControlTextarea1" class="star">Deskripsi</label>
                    <textarea name="deskripsi[]" class="form-control mb-2" id="exampleFormControlTextarea1" rows="3" required></textarea>
                      <div class="mb-3">
                          <label for="form-file" class="form-label star">File Input</label>
                          <input type="file" class="form-control" name="file[]" required>
                      </div>
                    </div>
                  </div>
                <!-- class:more-input -->


            <!-- Submit Button -->
            <button class="btn btn-primary" type="submit">Add File</button>
        </div>

        </form>
@elseif($user->role == "admin")
<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Anda Dilarang Ke Halaman Ini </h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Blank Page</li>
    </ol>
    </div>
    </div>
    </div>
    </section>

    <section class="content">

    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Role Anda adalah admin</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    <div class="card-body">
        Hanya user koperasi saja yang bisa menambahkan pelaporan
    </div>

    <div class="card-footer">
    Terima Kasih!
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

@else
        <div class="content-wrapper">

            <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Periode Belum Ditetapkan </h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
            </ol>
            </div>
            </div>
            </div>
            </section>

            <section class="content">

            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Tidak bisa mengakses form untuk sekarang</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
            </div>
            </div>
            <div class="card-body">
            hubungi admin untuk info lebih lanjut!
            </div>

            <div class="card-footer">
            Terima Kasih!
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
@endif

        @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll(".input-file-form").forEach(element => {
                    if(element.querySelector('#button-remove-input-file')) {
                        element.querySelector('#button-remove-input-file').addEventListener('click', () => {
                        element.remove()
                    });
                    }
                })

                // const addFileInputButton =
                // console.log(addFileInputButton);
                // console.log('------------------');
                const moreInputContainer = document.querySelector(".more-input");

                document.querySelectorAll("#addFileInput").forEach(element => {
                    element.addEventListener("click", function () {
                    const buttonDelete = document.createElement("img");
                    buttonDelete.setAttribute("src", "/asset/dist/img/icon-x.svg");
                    buttonDelete.setAttribute("id", "button-remove-input-file");
                    buttonDelete.setAttribute("style", "right: 10px;width: 20px;top: 10px;position: absolute; cursor:pointer");

                    const newFileInput = document.createElement("div");
                    newFileInput.classList.add("mb-3", "border", "shadow", "px-3","py-2", "rounded", "position-relative", "input-file-form");

                    // const label2 = document.createElement("label");
                    // label2.setAttribute("for", "Input");
                    // label2.textContent = "Judul";

                    // const input2 = document.createElement("input");
                    // input2.classList.add("form-control","mb-2");
                    // input2.setAttribute("id", "exampleFormControlinput1");
                    // input2.setAttribute("name", "judul[]");


                    const label1 = document.createElement("label");
                    label1.setAttribute("for", "exampleFormControlTextarea1");
                    label1.setAttribute("class", "star");
                    label1.textContent = "Deskripsi";

                    const textarea = document.createElement("textarea");
                    textarea.classList.add("form-control","mb-2");
                    textarea.setAttribute("id", "exampleFormControlTextarea1");
                    textarea.setAttribute("name", "deskripsi[]");
                    textarea.setAttribute("required", true);
                    textarea.rows = 3;

                    const label = document.createElement("label");
                    label.setAttribute("for", "formFile");
                    label.setAttribute("class", "star");
                    label.classList.add("form-label");
                    label.textContent = "File Input";

                    const input = document.createElement("input");
                    input.classList.add("form-control","mb-4");
                    input.type = "file";
                    textarea.setAttribute("required", true);
                    // input.setAttribute("id", "addFileInput");
                    input.setAttribute("name", "file[]");

                    // newFileInput.appendChild(label2);
                    // newFileInput.appendChild(input2);
                    newFileInput.appendChild(label1);
                    newFileInput.appendChild(textarea);
                    newFileInput.appendChild(label);
                    newFileInput.appendChild(input);
                    newFileInput.appendChild(buttonDelete);

                    // Append the new file input field to the container
                    moreInputContainer.appendChild(newFileInput);
                    document.querySelectorAll(".input-file-form").forEach(element => {
                            if(element.querySelector('#button-remove-input-file')) {
                                element.querySelector('#button-remove-input-file').addEventListener('click', () => {
                                element.remove()
                            });
                        }
                        });
                    });
                });
            });
        </script>


        <!-- Select2 -->
        <script src={{asset("asset/plugins/select2/js/select2.full.min.js")}}></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src={{asset("asset/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js")}}></script>
        <!-- InputMask -->
        <script src={{asset("asset/plugins/inputmask/jquery.inputmask.min.js")}}></script>
        <!-- bootstrap color picker -->
        <script src={{asset("asset/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}></script>
        <!-- Bootstrap Switch -->
        <script src={{asset("asset/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}></script>
        <!-- BS-Stepper -->
        <script src={{asset("/plugins/bs-stepper/js/bs-stepper.min.js")}}></script>
        <!-- dropzonejs -->
        <script src={{asset("/plugins/dropzone/min/dropzone.min.js")}}></script>


        <script>
          $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
              timePicker: true,
              timePickerIncrement: 30,
              locale: {
                format: 'MM/DD/YYYY hh:mm A'
              }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
              {
                ranges   : {
                  'Today'       : [moment(), moment()],
                  'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                  'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                  'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                  'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
              },
              function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
              }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
              format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
              $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function(){
              $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

          })
          // BS-Stepper Init
          document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
          })

          // DropzoneJS Demo Code Start
          Dropzone.autoDiscover = false

          // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
          var previewNode = document.querySelector("#template")
          previewNode.id = ""
          var previewTemplate = previewNode.parentNode.innerHTML
          previewNode.parentNode.removeChild(previewNode)

          var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
          })

          myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
          })

          // Update the total progress bar
          myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
          })

          myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
          })

          // Hide the total progress bar when nothing's uploading anymore
          myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
          })

          // Setup the buttons for all transfers
          // The "add files" button doesn't need to be setup because the config
          // `clickable` has already been specified.
          document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
          }
          document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
          }
          // DropzoneJS Demo Code End
        </script>
        @endpush

    </body>
    @endsection
</html>
