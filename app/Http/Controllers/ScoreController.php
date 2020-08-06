<?php

namespace App\Http\Controllers;

use App\Imports\ScoresImport;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ScoreController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new ScoresImport, $request->file('file'));

        return redirect('/')->with('success', 'Goodjob, nicely imported!!');
    }

    public function clear()
    {
        DB::table('scores')->truncate();

        return redirect('/');
    }
}
