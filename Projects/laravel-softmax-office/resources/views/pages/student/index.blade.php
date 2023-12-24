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
            {{ $dataTable->table() }}
          </div>
        </div>
      </div>
    </div>
  </div>  


  
  {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endsection

