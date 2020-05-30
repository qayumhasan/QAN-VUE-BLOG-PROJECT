<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/admin/')}}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('public/admin/')}}/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{asset('public/admin/')}}/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/admin/')}}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/admin/')}}/images/favicon.png" />
  
</head>

<body>

  <div class="container-scroller" id="app">
    <!-- partial:partials/_navbar.html -->
  

  @include('admin.inc._header_menu')
    <!-- partial -->

    <example-component></example-component>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->


     
  <script src="{{asset('public/js/app.js')}}"></script>
  <script src="{{asset('public/admin/')}}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{asset('public/admin/')}}/vendors/js/vendor.bundle.addons.js"></script>

  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('public/admin/')}}/js/off-canvas.js"></script>
  <script src="{{asset('public/admin/')}}/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('public/admin/')}}/js/dashboard.js"></script>
  <!-- End custom js for this page-->


</body>

</html>