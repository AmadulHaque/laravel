@extends('app')
@section('content')

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
                <h3 class="page-title">Students</h3>
              </div>
              <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{route('student.index')}}" class="btn btn-outline-gray me-2 active">
                  <i class="feather-list"></i>
                </a>
                <a href="{{route('student.index')}}?style=grid" class="btn btn-outline-gray me-2">
                  <i class="feather-grid"></i>
                </a>
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
                  <th>
                    <div class="form-check check-tables">
                      <input class="form-check-input" type="checkbox" value="something">
                    </div>
                  </th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>DOB</th>
                  <th>Parent Name</th>
                  <th>Mobile Number</th>
                  <th>Address</th>
                  <th class="text-end">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($datas as $item)
                <tr>
                  <td>
                    <div class="form-check check-tables">
                      <input class="form-check-input" type="checkbox" value="something">
                    </div>
                  </td>
                  <td>PRE2209</td>
                  <td>
                    <h2 class="table-avatar">
                      <a href="student-details.html" class="avatar avatar-sm me-2">
                        <img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                      </a>
                      <a href="student-details.html">Aaliyah</a>
                    </h2>
                  </td>
                  <td>10 A</td>
                  <td>2 Feb 2002</td>
                  <td>Jeffrey Wong</td>
                  <td>097 3584 5870</td>
                  <td>911 Deer Ridge Drive,USA</td>
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
  <script>
      new DataTable('#datatable');
  </script>
@endsection

