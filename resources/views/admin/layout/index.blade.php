<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Triển lãm tranh toàn quốc</title>
<base href="{{asset('')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin__asset/interface/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="admin__asset/interface/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin__asset/interface/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="admin__asset/interface/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin__asset/interface/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="login/css/style2.css">
  <link rel="stylesheet" href="admin__asset/chodiem/style.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="admin__asset/interface/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin__asset/interface/dist/css/adminlte.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style type="text/css">
    .dark-mode .card {
    background-color: #343a40!important;
    color: #fff;
  }
    #myChart{
       width:700px!important; 
       height:500px!important;
    }
.middle-header {
    background-color: #00000008!important;
}

section.content {
    background: #f8f9fa;
}

}
  </style>
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   @include("admin.layout.nav")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include("admin.layout.aside")

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  @include("admin.layout.footer")