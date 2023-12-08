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
                <a href="students.html">Student</a>
              </li>
              <li class="breadcrumb-item active">Add Students</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row" data-select2-id="22">
      <div class="col-sm-12" data-select2-id="21">
        <div class="card comman-shadow" data-select2-id="20">
          <div class="card-body" data-select2-id="19">
            <form data-select2-id="18">
              <div class="row" data-select2-id="17">
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
                    <input class="form-control" type="text" placeholder="Enter First Name">
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Last Name <span class="login-danger">*</span>
                    </label>
                    <input class="form-control" type="text" placeholder="Enter First Name">
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Gender <span class="login-danger">*</span>
                    </label>
                    <select class="form-control select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option data-select2-id="3">Select Gender</option>
                      <option data-select2-id="23">Female</option>
                      <option data-select2-id="24">Male</option>
                      <option data-select2-id="25">Others</option>
                    </select>
                    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;">
                      <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-tfay-container">
                          <span class="select2-selection__rendered" id="select2-tfay-container" role="textbox" aria-readonly="true" title="Select Gender">Select Gender</span>
                          <span class="select2-selection__arrow" role="presentation">
                            <b role="presentation"></b>
                          </span>
                        </span>
                      </span>
                      <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms calendar-icon">
                    <label>Date Of Birth <span class="login-danger">*</span>
                    </label>
                    <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Roll </label>
                    <input class="form-control" type="text" placeholder="Enter Roll Number">
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Blood Group <span class="login-danger">*</span>
                    </label>
                    <select class="form-control select select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                      <option data-select2-id="6">Please Select Group </option>
                      <option>B+</option>
                      <option>A+</option>
                      <option>O+</option>
                    </select>
                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;">
                      <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-xgs9-container">
                          <span class="select2-selection__rendered" id="select2-xgs9-container" role="textbox" aria-readonly="true" title="Please Select Group ">Please Select Group </span>
                          <span class="select2-selection__arrow" role="presentation">
                            <b role="presentation"></b>
                          </span>
                        </span>
                      </span>
                      <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Religion <span class="login-danger">*</span>
                    </label>
                    <select class="form-control select select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true">
                      <option data-select2-id="9">Please Select Religion </option>
                      <option>Hindu</option>
                      <option>Christian</option>
                      <option>Others</option>
                    </select>
                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;">
                      <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-52ow-container">
                          <span class="select2-selection__rendered" id="select2-52ow-container" role="textbox" aria-readonly="true" title="Please Select Religion ">Please Select Religion </span>
                          <span class="select2-selection__arrow" role="presentation">
                            <b role="presentation"></b>
                          </span>
                        </span>
                      </span>
                      <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>E-Mail <span class="login-danger">*</span>
                    </label>
                    <input class="form-control" type="text" placeholder="Enter Email Address">
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Class <span class="login-danger">*</span>
                    </label>
                    <select class="form-control select select2-hidden-accessible" data-select2-id="10" tabindex="-1" aria-hidden="true">
                      <option data-select2-id="12">Please Select Class </option>
                      <option>12</option>
                      <option>11</option>
                      <option>10</option>
                    </select>
                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;">
                      <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-5evq-container">
                          <span class="select2-selection__rendered" id="select2-5evq-container" role="textbox" aria-readonly="true" title="Please Select Class ">Please Select Class </span>
                          <span class="select2-selection__arrow" role="presentation">
                            <b role="presentation"></b>
                          </span>
                        </span>
                      </span>
                      <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Section <span class="login-danger">*</span>
                    </label>
                    <select class="form-control select2 select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true">
                      <option data-select2-id="15">Please Select Section </option>
                      <option data-select2-id="30">B</option>
                      <option data-select2-id="31">A</option>
                      <option data-select2-id="32">C</option>
                    </select>
                    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="14" style="width: 100%;">
                      <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-0apx-container">
                          <span class="select2-selection__rendered" id="select2-0apx-container" role="textbox" aria-readonly="true" title="Please Select Section ">Please Select Section </span>
                          <span class="select2-selection__arrow" role="presentation">
                            <b role="presentation"></b>
                          </span>
                        </span>
                      </span>
                      <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Admission ID </label>
                    <input class="form-control" type="text" placeholder="Enter Admission ID">
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Phone </label>
                    <input class="form-control" type="text" placeholder="Enter Phone Number">
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group students-up-files">
                    <label>Upload Student Photo (150px X 150px)</label>
                    <div class="uplod">
                      <label class="file-upload image-upbtn mb-0"> Choose File <input type="file">
                      </label>
                    </div>
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
  </div>
  @endsection
