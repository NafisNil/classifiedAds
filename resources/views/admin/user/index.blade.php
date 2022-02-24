@extends('admin.layout.master')
@section('content')

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
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
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">User</h3>
              
                  
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('admin.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>#</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Balance</th>
                   
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                    @foreach ($users as $key=>$item)
                 
                   
                  <tr>
                    
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->balance}}</td>
                  
                    <td>
                      
                      <a href="{{route('user.admin.edit.form',[$item->id])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                      <form action="{{route('user.delete',[$item->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                    @if ($item->free == 0)
                    <a href="{{route('free.ad.permission', $item->id)}}" class="btn btn-outline-success btn-sm"> Free AD (on) </a>
                    @else
                    <a href="{{route('free.ad.neg', $item->id)}}" class="btn btn-outline-danger btn-sm"> Free AD (off) </a>
                    @endif

                    @if ($item->paid == 0)
                    <a href="{{route('paid.ad.permission', $item->id)}}" class="btn btn-outline-success btn-sm"> Paid AD (on) </a>
                    @else
                    <a href="{{route('paid.ad.neg', $item->id)}}" class="btn btn-outline-danger btn-sm"> Paid AD (off) </a>
                    @endif
                    
                    @if ($item->multi == 0)
                    <a href="{{route('multiple.ad.permission', $item->id)}}" class="btn btn-outline-success btn-sm"> Multiple city AD (on) </a>
                    @else
                    <a href="{{route('multiple.ad.neg', $item->id)}}" class="btn btn-outline-danger btn-sm"> Multiple city AD (off) </a>
                    @endif
                    
                    
                   
                    </td>
                   
                  </tr>
                  @endforeach
    

                  </tbody>
                  <tfoot>
                  <tr>
                  
                    <th>#</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Balance</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>

                <div class="d-flex justify-content-center">
                {!! $users->appends(Request::all())->links() !!}
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

 
