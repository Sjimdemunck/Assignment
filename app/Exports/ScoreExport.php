<?php

namespace App\Exports;

use App\Score;
use Maatwebsite\Excel\Concerns\FromCollection;

class ScoreExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Score::all();
    }
}
