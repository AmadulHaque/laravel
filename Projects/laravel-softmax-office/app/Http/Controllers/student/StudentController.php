<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $datas = Student::paginate();
        return view('pages.student.index');

    }
    public function create()
    {
        return view('pages.student.create');

    }
    public function show()
    {

    }



}
