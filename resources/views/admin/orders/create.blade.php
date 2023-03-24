@extends('admin.layouts.admin')

@section('content')


<!-- Подключаем JavaScript-файлы jQuery и Selectize.js -->


 
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
              <h1 class="m-0">Create order</h1>
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
        @if ($addons->isEmpty() || $services->isEmpty())
        <div class="alert alert-warning" role="alert">
          Перед созданием заказа необходимо создать услугу или доп.услугу.
        </div>                          
        @endif
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->

          <form method="post" action="{{ route('admin.order.store') }}">
            @csrf
            <div class="card-body">
              <div class="form-group w-50">
                <label>Name</label>
                <input value="{{ old('name') }}" class="form-control" name="name" type="text" placeholder="Name">
                @error('name')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group w-50">
                <label>Phone</label>
                <input value="{{ old('phone')  }}" class="form-control"  name="phone" type="text" placeholder="Phone">
                @error('phone')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group w-50">
                <label>Time</label>
                <input value="{{ old('date')  }}" class="form-control" name="date"  type="date">
                @error('date')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
                <input value="{{ old('time')  }}" class="form-control mt-3" name="time" type="time"> 
                @error('time')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group w-50">
                <label>Service</label>
                <select name="service_id" class="form-control" data-placeholder="Select a service">
                  @foreach ($services as $service)
                  <option {{ old('service_id') == $service->id ? ' selected' : ''  }} value="{{ $service->id }}" data-price="{{ $service->price }}">{{ $service->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group w-50">
                <label>Addons</label>
                <select id="addons-select" multiple name="addon_ids[]" data-placeholder="Select an addon" style="width: 100%;">
                  @foreach($addons as $addon)
                  <option value="{{ $addon->id }}" data-price="{{ $addon->price }}">{{ $addon->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group w-50">
                <label>Total Price</label>
                <div id="total-price"></div>
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>

<script>
  $(document).ready(function() {
    // функция для обновления цены
    function updatePrice() {
      var servicePrice = $('select[name="service_id"] option:selected').data('price');
      var addonPrices = $('select[name="addon_ids[]"] option:selected').map(function() {
        return $(this).data('price');
      }).get();
      var totalPrice = parseInt(servicePrice) + addonPrices.reduce(function(a, b) {
        return a + parseInt(b);
      }, 0);
      $('#total-price').text(totalPrice);
    }
    
    // обновление цены при изменении выбранных опций
    $('select').on('change', function() {
      updatePrice();
    });
    
    // инициализация цены при загрузке страницы
    updatePrice();
  });
</script>


@endsection




