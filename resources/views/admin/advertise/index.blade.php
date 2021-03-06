@extends('admin.layout.master')
@section('content')

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advertise List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advertise List</li>
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
                <h3 class="card-title">Advertise</h3>
              <a href="#" class="btn btn-outline-danger btn-sm content-justify float-right" id="deleteAllSelectedRecord" >Delete Selected</a>
                  
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('admin.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input type="checkbox" name="" id="chkCheckAll"></th>
                    <th>#</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Cost</th>
                    <th>Title</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>Location</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                    @foreach ($advertise as $key=>$item)
                   @php
                       $username = App\Models\User::select('name','email')->where('id',$item->user)->first();
                   @endphp     
                   
                  <tr id="sid{{$item->id}}">
                    <td><input type="checkbox" name="ids" id="" value="{{$item->id}}" class="checkBoxClass"></td>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$username->name}}</td>
                    <td>{{$username->email}}</td>
                    <td>{{$item->cost}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->cityName->name}}</td>
                    <td>{{$item->subcategoryName->name}}</td>
                    <td>{{$item->location}}</td>
                    <td>
                   
                    
                      <form action="{{route('advertise.destroy',[$item])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                  
                    </td>
                   
                  </tr>
                  @endforeach
    

                  </tbody>
                  <tfoot>
                  <tr>
                    <th></th>
                    <th>#</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Cost</th>
                    <th>Title</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>Location</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>

                <div class="d-flex justify-content-center">
                {!! $advertise->appends(Request::all())->links() !!}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(function(e){
        $("#chkCheckAll").click(function(){
          $(".checkBoxClass").prop('checked', $(this).prop('checked'));
        })
      });

      $('#deleteAllSelectedRecord').click(function(e){
        e.preventDefault();
        var allids = [];

        $("input:checkbox[name = ids]:checked").each(function (e) {
            allids.push($(this).val());
        });

        $.ajax({
          url:"{{route('student.deleteSelected')}}",
          type:'DELETE',
          data:{
            _token:$("input[name=_token]").val(),
            ids:allids
          },
          success:function(response){
            $.each(allids, function(key, val){
              $("#sid"+val).remove();
            });
          }

        });
      });
    </script>
@endsection

 
