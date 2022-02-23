@extends('admin.layout.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->
            @php
                $user = App\Models\User::count();
                $post = App\Models\Advertise::count();
                $paidPost = App\Models\Advertise::where('premium','!=','0')->orWhere('weekly','!=','0')->count();
            @endphp
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container  bg-success">
                  <h2>User</h2>
                  <div class="well">{{$user}}</div>
                </div>
                <div class="container  bg-info">
                  <h2>Post</h2>
                  <div class="well">{{$post}}</div>
                </div>
                <div class="container  bg-secondary">
                  <h2>Paid Post</h2>
                  <div class="well">{{$paidPost}}</div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection