@extends('app')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Add Students</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('student.index')}}">Student</a>
              </li>
              <li class="breadcrumb-item active">Add Students</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
          <div class="card comman-shadow">
            <div class="card-body">
              <form id="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <h5 class="form-title student-info">Student Information <span>
                        <a href="javascript:;">
                          <i class="feather-more-vertical"></i>
                        </a>
                      </span>
                    </h5>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>First Name <span class="login-danger">*</span>
                      </label>
                      <input class="form-control" type="text" name="firstName" placeholder="Enter First Name">
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Last Name <span class="login-danger">*</span>
                      </label>
                      <input class="form-control" type="text" name="lastName" placeholder="Enter First Name">
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Gender <span class="login-danger">*</span>
                      </label>
                      <select name="gender" class="form-control select">
                        <option>Select Gender</option>
                        <option>Female</option>
                        <option>Male</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms calendar-icon">
                      <label>Date Of Birth <span class="login-danger">*</span>
                      </label>
                      <input class="form-control datetimepicker" name="date_of_birth" type="text" placeholder="DD-MM-YYYY">
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Roll </label>
                      <input class="form-control" name="roll" type="text" placeholder="Enter Roll Number">
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Blood Group <span class="login-danger">*</span>
                      </label>
                      <select name="blood_group" class="form-control select ">
                        <option>Please Select Group </option>
                        <option>B+</option>
                        <option>A+</option>
                        <option>O+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Religion <span class="login-danger">*</span>
                      </label>
                      <select name="religion" class="form-control select">
                        <option>Please Select Religion </option>
                        <option>Hindu</option>
                        <option>Christian</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>E-Mail <span class="login-danger">*</span>
                      </label>
                      <input class="form-control" name="email" type="text" placeholder="Enter Email Address">
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Class <span class="login-danger">*</span>
                      </label>
                      <select  name="class" class="form-control select">
                        <option>Please Select Class </option>
                        <option>12</option>
                        <option>11</option>
                        <option>10</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Section <span class="login-danger">*</span>
                      </label>
                      <select name="section" class="form-control select">
                        <option>Please Select Section </option>
                        <option>B</option>
                        <option>A</option>
                        <option>C</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Admission ID </label>
                      <input name="addmission_id" class="form-control" type="text" placeholder="Enter Admission ID">
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Phone </label>
                      <input name="phone" class="form-control" type="text" placeholder="Enter Phone Number">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="student-submit">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

            //  students add
            $('#form').submit(function(e){
                e.preventDefault();
                let addForm = new FormData($('#form')[0]);
                NProgress.start();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'post',
                    url:"{{route('student.store')}}",
                    data:addForm,
                    contentType:false,
                    processData:false,
                    success: function(response){
                        NProgress.done();
                    },
                    error:function (response){
                        console.log(response);
                    }
                });
            })

        })
    </script>
</div>
@endsection
