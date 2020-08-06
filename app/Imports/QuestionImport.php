<?php

namespace App\Imports;

use App\Question;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class QuestionImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
       return new Question([

       ]);
    }
}
