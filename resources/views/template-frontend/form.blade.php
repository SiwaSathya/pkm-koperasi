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
        <!-- style for form -->
        @endpush
    </head>
 
@section("content")
    <body class="container">
        <!-- resources/views/multiple-file-upload.blade.php -->
        <form action="" method="POST" enctype="multipart/form-data"  >
            <div class="d-flex flex-column p-5" style="max-width: 500px;margin:50px auto;">
            @csrf
            <h5  class="mb-4">Fitur Multi Upload</h5>
                <!-- First File Input Field -->
                <div class="mb-3 d-flex flex-column">
                    <label for="formFile" class="form-label">Tambah Input</label>
                    <button id="addFileInput" class="btn btn-primary" style="max-width: 40px;" type="button">+</button>
                </div>

                <div class="form-group more-input ">
                    <div class="border shadow p-3 mb-3 rounded input-file-form">
                        <div class="col-md-15 mb-3 ">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                        </div>
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div class="mb-3">
                            <label for="form-file" class="form-label">File Input</label>
                            <input type="file" class="form-control" name="file[]">
                        </div>
                    </div>
                    <!-- class:more-input -->
                    <div class="mb-3 border shadow px-3 py-2 rounded position-relative input-file-form">
                        <label for="Input">Input</label>
                        <input class="form-control mb-2" id="exampleFormControlinput1" fdprocessedid="01xgib">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <label for="formFile" class="form-label">File Input</label>
                        <input class="form-control mb-4" type="file" name="file[]">
                        <img src="/asset/dist/img/icon-x.svg" id="button-remove-input-file" style="right: 10px;width: 20px;top: 10px;position: absolute; cursor:pointer">
                    </div>
                </div>
            <!-- Submit Button -->
            <button class="btn btn-primary" type="submit">Add File</button>
        </div>
            
        </form>
       
        @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <script>
            // form
            document.addEventListener("DOMContentLoaded", function () {
                
                // check button x first
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
                        
                        const label2 = document.createElement("label");
                        label2.setAttribute("for", "Input");
                        label2.textContent = "Input";

                        const input2 = document.createElement("input");
                        input2.classList.add("form-control","mb-2");
                        input2.setAttribute("id", "exampleFormControlinput1");

                        const label1 = document.createElement("label");
                        label1.setAttribute("for", "exampleFormControlTextarea1");
                        label1.textContent = "Example textarea";

                        const textarea = document.createElement("textarea");
                        textarea.classList.add("form-control","mb-2");
                        textarea.setAttribute("id", "exampleFormControlTextarea1");
                        textarea.rows = 3;

                        const label = document.createElement("label");
                        label.setAttribute("for", "formFile");
                        label.classList.add("form-label");
                        label.textContent = "File Input";

                        const input = document.createElement("input");
                        input.classList.add("form-control","mb-4");
                        input.type = "file";
                        // input.setAttribute("id", "addFileInput");
                        input.setAttribute("name", "file[]");

                        newFileInput.appendChild(label2);
                        newFileInput.appendChild(input2);
                        newFileInput.appendChild(label1);
                        newFileInput.appendChild(textarea);
                        newFileInput.appendChild(label);
                        newFileInput.appendChild(input);
                        newFileInput.appendChild(buttonDelete);

                        // Append the new file input field to the container
                        moreInputContainer.appendChild(newFileInput);

                        // check next step button x
                        document.querySelectorAll(".input-file-form").forEach(element => {
                            if(element.querySelector('#button-remove-input-file')) {
                                element.querySelector('#button-remove-input-file').addEventListener('click', () => {
                                element.remove()
                            });
                            }
                        })
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