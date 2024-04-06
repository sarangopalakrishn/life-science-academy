@extends('layouts.app')
@section('content')

<style>
  .error-message {
    color: red;
}
</style>

<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

      <br> <br>
      <main class="container">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Videos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <form id="uploadForm" method="post" action="{{ route('pages.storevideo') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputFile">Video</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="video" id="exampleInputFile" required>
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>
            <span id="uploadError" class="error-message" style="display: none;"></span>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" onclick="validateAndUpload(event)" class="btn btn-primary" style="color: blue">Submit</button>
    </div>
</form>

<script>
    window.validateAndUpload = function(e) {
        e.preventDefault();
        var fileInput = document.getElementById('exampleInputFile');
        var form = document.getElementById('uploadForm');

        // Validate file type
        var allowedExtensions = ['mp4', 'oga', 'ogx', 'ogv', 'ogg', 'webm'];
        var fileName = fileInput.value;
        var fileExtension = fileName.split('.').pop().toLowerCase();
        
        if (fileInput.files.length === 0) {
            // Show error message if no file is selected
            var uploadError = document.getElementById('uploadError');
            uploadError.innerText = 'Please select a file';
            uploadError.style.display = 'block';
        } else if (!allowedExtensions.includes(fileExtension)) {
            // Show error message if file type is not allowed
            var uploadError = document.getElementById('uploadError');
            uploadError.innerText = 'The selected file type is not allowed. Please select a video file.';
            uploadError.style.display = 'block';
        } else {
            // Hide error message if file is selected and type is allowed
            var uploadError = document.getElementById('uploadError');
            uploadError.style.display = 'none';

            // Proceed with upload
            videoUpload();
        }
    }

    window.videoUpload = function() {
        var form = document.getElementById('uploadForm');
        var formData = new FormData(form);

        Swal.fire({
            title: 'Please wait',
            text: 'Uploading video...',
            allowOutsideClick: false,
            showConfirmButton: false
        });

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(data => {
                    throw new Error(data.errors.video[0] || 'Failed to upload video');
                });
            }
            return response.json();
        })
        .then(data => {
            Swal.fire({
                title: 'Success',
                text: data.success,
                icon: 'success'
            }).then(() => {
                window.location.href = '{{ route('pages.video') }}';
            });
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                title: 'Error',
                text: error.message || 'Failed to upload video',
                icon: 'error'
            });
        });
    }
</script>






            </div>
            <!-- /.card -->


          </div>
          <!--/.col (left) -->
       
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    <main>

   



 


             

@endsection