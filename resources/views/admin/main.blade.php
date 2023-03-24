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
              <h1 class="m-0">New Orders</h1>
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
        <div class="container-fluid">

          <!-- Small boxes (Stat box) -->
          @foreach ($orders as $order)
          
          <div class="card w-75 mx-auto">
            <div class="card-header">

              <h3 class="card-title">{{ $order->created_at->diffForHumans() }}</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Price</th>
                    <th>Service</th>
                    <th>Addons</th>
                    <th>Date&Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->service->title }}</td>
                    <td>{{ $order->addons->count() }}</td>

                    <td>{{  \Carbon\Carbon::parse($order->appointment_datetime)->diffForHumans() }} || {{ $order->appointment_datetime }}</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer d-flex justify-content-start">
              <form method="POST" action="{{ route('admin.order.confirmOrder', $order->id) }}" class="d-block mr-3">
                @csrf
                @method('PATCH')
                <input type="submit" value="Подтвердить" class="btn btn-primary">
              </form>
              <form method="POST" action="{{ route('admin.order.delete', $order->id) }}" class="d-block">
                @csrf
                @method('DELETE')
                <input type="submit" value="Отменить" class="btn btn-danger">
              </form>
            </div>
            <!-- /.card-footer-->
          </div>

          @endforeach
        </div><!-- /.container-fluid -->
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

