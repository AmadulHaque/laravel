@extends('app') <!-- If you have a layout -->
@section('content')
<style>
.is_online_1 {
    background: #0ad30a;
    width: 10px;
    height: 10px;
    border-radius: 51px;
    position: absolute;
    top: 0;
    left: 0;
}

.is_online_0 {
    background: #dc3545;
    width: 10px;
    height: 10px;
    border-radius: 51px;
    position: absolute;
    top: 0;
    left: 0;
}
</style>
<div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-sub-header">
          <h3 class="page-title">Students</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="students.html">Student</a>
            </li>
            <li class="breadcrumb-item active">All Students</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="student-group-form">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search by ID ...">
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search by Name ...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search by Phone ...">
        </div>
      </div>
      <div class="col-lg-2">
        <div class="search-student-btn">
          <button type="btn" class="btn btn-primary">Search</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card card-table comman-shadow">
        <div class="card-body">
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="page-title">Users</h3>
              </div>
              <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{route('student.create')}}" class="btn btn-primary">
                  <i class="fas fa-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table id="datatable" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
              <thead class="student-thread">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th class="text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>
                            <h2 class="table-avatar">
                                <a href="l" class="avatar avatar-sm me-2">
                                    <span id="status{{$item->id}}" class="{{$item->is_online==1 ? 'is_online_1' : 'is_online_0'}}" ></span>
                                    <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                <a href="">{{$item->name}}</a>
                            </h2>
                        </td>
                        <td>{{$item->email}}</td>
                        <td class="text-end">
                            <div class="actions ">
                              <a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
                                <i class="feather-eye"></i>
                              </a>
                              <a href="edit-student.html" class="btn btn-sm bg-danger-light">
                                <i class="feather-edit"></i>
                              </a>
                            </div>
                        </td>                    
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script id="script">
    new DataTable('#datatable');
    $(document).ready(function(){
      user = {{Auth::guard('admin')->user()->id}} 
    
      socket = io('http://127.0.0.1:3000');

      socket.on("user_connected",(data)=>{
        $('#status'+data).removeClass('is_online_0');
        $('#status'+data).addClass('is_online_1');
      })

      socket.on("user_disconnected",(data)=>{
        $('#status'+data).removeClass('is_online_1');
        $('#status'+data).addClass('is_online_0');
      })

    })

  </script>
@endsection
