<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    public function index()
    {
        return view('student.courses.index');
    }

}
