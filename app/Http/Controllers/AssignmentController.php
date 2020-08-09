<?php

namespace App\Http\Controllers;

use App\Student;

class AssignmentController extends Controller {

    public function home()
    {
        $student = Student::where('id', 1)->with('questions')->first();
        dd($student, $student->questions->first());
        dd(Student::where('id', 1)->with('questions')->first());

        return view('assignment');
    }
}
