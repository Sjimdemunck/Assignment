<?php

namespace App\Http\Controllers;


use App\Results;

class AssignmentController extends Controller {

    public function home()
    {
        return view('assignment');
    }

    public function calculateScore()
    {
        ;
        $results = Results::all();

        return view('result', ['results' => $results]);
    }

    public function fetchScore()
    {
    }
}
