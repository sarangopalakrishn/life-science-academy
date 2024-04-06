@extends('layouts.app')
@section('content')

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
                <h3 class="card-title">Edit Gallery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" action="{{ route('pages.update', $gallery->id) }}" enctype="multipart/form-data">
                @csrf

                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" value="{{ $gallery->name }}" class="form-control" id="exampleInputName" placeholder="Enter Name">
                  </div>
             
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                    <img src="{{ asset('images/'.$gallery->image) }}" alt="" style=" width: 100px; height: 80px;" id="file-preview"/>

                      <div class="custom-file">
                       <input type="hidden" name="hidden_product_image" value="{{ $gallery->image }}">
                       <input type="file" name="image" class="custom-file-input" accept="image/*" onchange="showFile(event)" id="exampleInputFile">
                        <!-- <input type="file" name="image" accept="image/*" onchange="showFile(event)"> -->
                       <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="hidden" name="hidden_id" value="{{ $gallery->id }}">
                  <button type="submit" class="btn btn-primary" onclick="validateForm()">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (left) -->
       
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    <main>

     <script>
         function showFile(event)
         {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('file-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);

         }
     </script>


    <script>
        function validateForm() {
            // Get values of input fields
            var name = document.getElementById('exampleInputName').value;
            var image = document.getElementById('exampleInputFile').value;

            // Check if name or image is empty
            if (name.trim() === '' || image.trim() === '') {
                // Display sweet alert
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Name and Image fields are required!'
                });
            } else {

               // Display success sweet alert and redirect after a short delay
            setTimeout(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Form submitted successfully!'
                }).then(function() {
                    window.location.href = "{{ route('pages.gallery') }}"; // Redirect to gallery page
                });
            }, 500); // Delay in milliseconds
            }
        }
    </script>
             

@endsection