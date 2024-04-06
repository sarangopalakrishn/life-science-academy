<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('admin_assets/css/adminlte.min.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Video</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
        

            <div class="card">
              <div class="card-header">
                  <!-- Button to trigger modal -->
                  <a href="{{ route('pages.videocreate') }}" class="btn btn-primary" id="">Add Video</a>

                  <!-- Modal -->
                  <div class="modal" id="galleryModal">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h4 class="modal-title">Add Video</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal Body -->
                      <div class="modal-body">
                          <div class="card card-primary">
                         
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form>
                              <div class="card-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputFile">File input</label>
                                  <div class="input-group">
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                
                                  </div>
                              </div>
                            
                              </div>
                              <!-- /.card-body -->

                              <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
                          </div>
                      </div>
                      </div>
                  </div>
                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
               
                    <th>Video</th>
                  
                    <th>Delete</th>
                  </tr>
                  </thead>

                  <tbody>
                    @if ($videos && count($videos) > 0)
                        @foreach ($videos as $id => $video)
                            <tr>
                               
                                <td>{{ $id + 1 }}</td>
                                <td>
                                    <video style="width: 500px; height: 240px;" src="{{ asset('upload/' . $video->video) }}"></video>
                                </td>
                               

                              <td>
                                <form id="deleteForm" method="post" action="{{ route('pages.delete', encrypt($video->id)) }}">
                                
                                  @csrf
                                  @method('DELETE')
                                  <a href="#"class="btn btn-danger" onclick="deleteConfirm(event)">
                                      <i class="far fa-trash-alt"></i>
                                  </a>
                                </form>
                              </td>



                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No videos found</td>
                        </tr>
                    @endif
                    </tbody>

                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Video</h>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
    window.deleteConfirm = function(e) {
        e.preventDefault();
        var form = document.getElementById('deleteForm');

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form for deletion
                form.submit();
                 // Show success message
                 Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>





<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
  // When the Add Gallery button is clicked, show the modal
  $('#add-gallery-btn').click(function(){
    $('#galleryModal').modal('show');
  });
</script>

<script>
    // Get all delete buttons.delete-button
    var deleteButtons = document.querySelectorAll('.delete-button');

    // Attach event listener to each delete button
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission behavior

            // Get the id of the item to be deleted
            var id = this.getAttribute('data-id');

            // Display SweetAlert confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this item!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it',
                // cancelButtonText: 'Cancel'
            }).then((result) => {
                // If user confirms deletion
                if (result.isConfirmed) {
                    // Perform deletion (you need to handle this part with Ajax or form submission)
                    // For demonstration purposes, let's assume we're redirecting to a delete route
                    // window.location.href = '/gallery/' + id + '/delete'; // Change this to your delete route
                    window.location.href = "{{ route('pages.video') }}"; // Redirect to gallery page
                } 
            });
        });
    });
</script>


<!-- jQuery -->
<script src="{{ url('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin_assets/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin_assets/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
</body>
</html>
