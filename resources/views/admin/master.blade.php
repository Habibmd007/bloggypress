@include('admin.include.header')

<!-- Main Sidebar Container -->
@include('admin.include.sidebar')
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
  <!-- Content Header (Page header) -->
  <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">{{Session::get('msg')}}</h1>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

             
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
            
            @yield('body')
          </div>
          <!-- /.container-fluid -->
        </section>
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->
 
  
@include('admin.include.footer')
