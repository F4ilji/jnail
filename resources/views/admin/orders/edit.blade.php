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
              <h1 class="m-0">Edit order</h1>
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
          <form method="post" action="{{ route('admin.order.store') }}">
            @csrf
            <div class="card-body">
              <div class="form-group w-50">
                <label>Name</label>
                <input value="{{ $order->name }}" class="form-control" name="name" type="text" placeholder="Name">
              </div>
              <div class="form-group w-50">
                <label>Phone</label>
                <input value="{{ $order->phone }}"  class="form-control"  name="phone" type="text" placeholder="Phone">
              </div>
              <div class="form-group w-50">
                <label>Time</label>
                <input value="{{ \Carbon\Carbon::parse($order->appointment_datetime)->format('Y-m-d') }}"  class="form-control" name="date"  type="date">
                <input value="{{ \Carbon\Carbon::parse($order->appointment_datetime)->format('H:i:s') }}"  class="form-control mt-3" name="time" type="time"> 
              </div>
              <div class="form-group w-50">
                <label>Service</label>
                <select name="service_id" class="form-control" data-placeholder="Select a service">
                  @foreach ($services as $service)
                  <option {{ ($order->service->id == $service->id) ? ' selected' : '' }} value="{{ $service->id }}" data-price="{{ $service->price }}">{{ $service->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group w-50">
                <label>Addons</label>
                @php
                 dd($order->addons[0]->price);

                @endphp
                <select id="addons-select" multiple name="addon_ids[]" data-placeholder="Select an addon" style="width: 100%;">
                  @foreach($addons as $addon)

                  <option value="{{ $addon->id }}" data-price="{{ $addon->price }}">{{ $addon->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group w-50">
                <label>Total Price</label>
                <input type="text" id="total-price" class="form-control" readonly>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button {{ $addons->isEmpty() || $services->isEmpty()  ? ' disabled' : '' }} type="submit" class="btn btn-primary">Submit</button>
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




