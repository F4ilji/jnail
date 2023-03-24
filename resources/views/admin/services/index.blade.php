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
              <h1 class="m-0">Services</h1>
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
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Service</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($services as $service)
                  <tr>
                    <td class="align-middle text-center">{{ $service->id }}</td>
                    <td class="align-middle text-center">{{ $service->title }}</td>
                    <td class="align-middle text-center">{{ $service->price }}</td>
                    <td class="align-middle text-center">{{ $service->category->title }}</td>
                    <td class="align-middle text-center">
                      <div class="btn-group align-middle text-center">
                      <button onclick="window.location.href='{{ route('admin.service.show', $service->id) }}'" type="button" class="btn btn-default">Show</button>
                      <button onclick="window.location.href='{{ route('admin.service.edit', $service->id) }}'" type="button"  class="btn btn-default">Edit</button>
                      <form action="{{ route('admin.service.destroy', $service->id) }}" class="btn btn-default" method="POST">
                        @csrf
                        @method('delete')
                        <input value="Delete" class="form-control custom-input" type="submit">
                      </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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




