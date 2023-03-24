@extends('admin.layouts.admin')

@section('content')
 
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    @include('admin.includes.sidebar')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit addon</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">

        <form method="post" action="{{ route('admin.addon.update', $addon) }}">
          @method('patch')
          @csrf
          <div class="card-body">
            <div class="form-group w-50">
              <label for="exampleInputEmail1">Addon title</label>
              <input value="{{ $addon->title }}" name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Title">
            </div>
            <div class="form-group w-50">
              <label for="exampleInputEmail1">Addon price</label>
              <input value="{{ $addon->price }}" name="price" type="number" class="form-control" id="exampleInputEmail1" placeholder="Price">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
@endsection




