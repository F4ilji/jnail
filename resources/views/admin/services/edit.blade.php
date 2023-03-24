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
              <h1 class="m-0">Edit service</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
          <form method="POST" action="{{ route('admin.service.update', $service) }}">
            @csrf
            @method('PATCH')
            <div class="card-body">
              <div class="form-group w-50">
                <label for="exampleInputEmail1">Service title</label>
                <input value="{{ $service->title }}" name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Title">
              </div>
              <div class="form-group w-50">
                <label for="exampleInputEmail1">Service price</label>
                <input value="{{ $service->price }}" name="price" type="number" class="form-control" id="exampleInputEmail1" placeholder="Price">
              </div>
              <div class="form-group w-50">
                <label>Category</label>
                <select name="category_id" class="form-control">
                  @foreach ($categories as $category)
                  <option {{ ($service->category_id === $category->id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
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




