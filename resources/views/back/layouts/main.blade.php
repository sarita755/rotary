<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    @include('back.includes.styles')

    <style>
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


@include('back.includes.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('back.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        
        <center> Copyright &copy; 2019 <a href="http://www.nctbutwal.com.np/"> Rotary club of Butwal</a>.</strong> All rights
        reserved. </center>
    </footer>

  
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
@include('back.includes.scripts')
</body>
</html>
