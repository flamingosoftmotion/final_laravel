<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset ('/sbadmin2')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="{{asset ('/sbadmin2')}}/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset ('/sbadmin2')}}/vendor/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset ('/sbadmin2')}}/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <script src="{{ asset('/sbadmin2') }}/vendor/ckeditor/ckeditor.js"></script>



  <!-- Custom styles for this template-->
  <link href="{{asset ('/sbadmin2')}}/css/sb-admin-2.min.css" rel="stylesheet">
  @yield('header')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        
        <!-- End of Topbar -->
        @include('layouts.navigation')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset ('/sbadmin2')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset ('/sbadmin2')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset ('/sbadmin2')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset ('/sbadmin2')}}/js/sb-admin-2.min.js"></script>

  <script src="{{ asset('/sbadmin2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('/sbadmin2') }}/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('/sbadmin2') }}/vendor/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ asset('/sbadmin2') }}/vendor/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="{{ asset('admin/assets/dataTables.bootstrap4.min.js') }}">



  @yield('footer')
  <script>
    CKEDITOR.replace( 'editor' );

    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>

</body>

</html>
