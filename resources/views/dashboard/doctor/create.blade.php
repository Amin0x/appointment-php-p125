<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;700&display=swap" rel="stylesheet"> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset("vendors/admin/plugins/fontawesome-free/css/all.min.css") }}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{ asset("vendors/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("vendors/admin/css/adminlte.min.css") }}>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">

    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اضافة طبيب</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashbord.index') }}">الرئيسية</a></li>
              <li class="breadcrumb-item"><a href="{{ route('dashbord.doctor.index') }}">الاطباء</a></li>
              <li class="breadcrumb-item active">اضافة طبيب</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">بيانات الطبيب</h3>
        </div>
        <div class="card-body row">
            <div class="col-sm-6">
                <div class="mb-2"><input class="form-control form-control-lg" type="text" placeholder="الاسم"></div>
                <br>
                <div class="mb-2"><input class="form-control form-control-lg" type="text" placeholder="التخصص"></div>
                <br>
                <div class="mb-2"><button type="submit" class="btn btn-info">ارسال</button></div>
            </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @include('dashboard.inc.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{ asset("vendors/admin/plugins/jquery/jquery.min.js") }}></script>
<!-- Bootstrap 4 -->
<script src={{ asset("vendors/admin/plugins/bootstrap/js/bootstrap.bundle.min.js") }}></script>
<!-- overlayScrollbars -->
<script src={{ asset("vendors/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}></script>
<!-- AdminLTE App -->
<script src={{ asset("vendors/admin/js/adminlte.min.js") }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset("vendors/admin/js/demo.js") }}></script>
</body>
</html>
