<!DOCTYPE html>
<html lang="en">
@include('layouts/admin/head')
<body>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      @include('layouts/admin/header')

      <!-- Main Sidebar Container -->
      @include('layouts/admin/menu_left')

      @include('layouts/admin/content')
      <!-- /.content-wrapper -->
      @include('layouts/admin/footer')
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>

    @include('layouts/admin/js')
    @include('layouts/admin/script')
</body>
</html>