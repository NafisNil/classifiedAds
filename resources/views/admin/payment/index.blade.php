@extends('admin.layout.master')
@section('content')

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
             <div class="card ">
              <div class="card-header">
                <h3 class="card-title">Payment</h3>
               @if ($paymentCount < 1)
                  <a href="{{route('payment.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
               @endif
               
               
                  
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('admin.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Payment</th>
                   
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                   
                        
                   @foreach ($payment as $item)
                       
                 
                  <tr>
                    <td>#1</td>
                    <td>{!!@$item->desc!!}</td>
                  
                    <td>
                      @if ($paymentCount > 0)
                     
                      <a href="{{route('payment.edit',[$item->id])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                    <form action="{{route('payment.destroy',[$item->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                       
                    @endif
                    </td>
                   
                  </tr>
                  @endforeach
                
    

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Payment</th>
                   
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>

                <div class="d-flex justify-content-center">
                
              </div>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection

 
