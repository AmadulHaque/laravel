<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\DataTables\StudentDataTable;

class StudentController extends Controller
{

    public function index(StudentDataTable $dataTable)
    {
        return $dataTable->render('pages.student.index');
        // return view('pages.student.index',compact('datas'));

    }
    public function create()
    {
        return view('pages.student.create');

    }
    public function show()
    {

    }


    public function store(Request $request)
    {
        $data = $request->only('firstName','lastName','gender' ,'date_of_birth','roll' ,'blood_group','religion','email','class','section','addmission_id','phone');
        Student::create($data);
        return "success";
    }



}
