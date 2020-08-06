<?php

namespace App\Imports;

use App\Score;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ScoresImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        var_dump($row);
        die;
//        return new Score([
//            'student' => $row['id'] ?? $row[0],
//            'score-question-1' => $row['Score Question 1'] ?? $row[1],
//            'score-question-2' => $row['Score Question 2'] ?? $row[2],
//            'score-question-3' => $row['Score Question 3'] ?? $row[3],
//            'score-question-4' => $row['Score Question 4'] ?? $row[4],
//            'score-question-5' => $row['Score Question 5'] ?? $row[5],
//            'score-question-6' => $row['Score Question 6'] ?? $row[6],
//            'score-question-7' => $row['Score Question 7'] ?? $row[7],
//            'score-question-8' => $row['Score Question 8'] ?? $row[8],
//            'score-question-9' => $row['Score Question 9'] ?? $row[9],
//            'score-question-10' => $row['Score Question 10'] ?? $row[10],
//            'score-question-11' => $row['Score Question 11'] ?? $row[11],
//            'score-question-12' => $row['Score Question 12'] ?? $row[12],
//            'score-question-13' => $row['Score Question 13'] ?? $row[13],
//            'score-question-14' => $row['Score Question 14'] ?? $row[14],
//            'score-question-15' => $row['Score Question 15'] ?? $row[15],
//            'score-question-16' => $row['Score Question 16'] ?? $row[16],
//            'score-question-17' => $row['Score Question 17'] ?? $row[17],
//            'score-question-18' => $row['Score Question 18'] ?? $row[18],
//            'score-question-19' => $row['Score Question 19'] ?? $row[19],
//            'score-question-20' => $row['Score Question 20'] ?? $row[20],
//            'score-question-21' => $row['Score Question 21'] ?? $row[21],
//            'score-question-22' => $row['Score Question 22'] ?? $row[22],
//            'score-question-23' => $row['Score Question 23'] ?? $row[23],
//            'score-question-24' => $row['Score Question 24'] ?? $row[24],
//            'score-question-25' => $row['Score Question 25'] ?? $row[25],
//            'score-question-26' => $row['Score Question 26'] ?? $row[26],
//            'score-question-27' => $row['Score Question 27'] ?? $row[27],
//            'score-question-28' => $row['Score Question 28'] ?? $row[28],
//            'score-question-29' => $row['Score Question 29'] ?? $row[29],
//            'score-question-30' => $row['Score Question 30'] ?? $row[30],
//            'score-question-31' => $row['Score Question 31'] ?? $row[31],
//            'score-question-32' => $row['Score Question 32'] ?? $row[32],
//            'score-question-33' => $row['Score Question 33'] ?? $row[33],
//            'score-question-34' => $row['Score Question 34'] ?? $row[34],
//            'score-question-35' => $row['Score Question 35'] ?? $row[35],
//            'score-question-36' => $row['Score Question 36'] ?? $row[36],
//            'score-question-37' => $row['Score Question 37'] ?? $row[37],
//            'score-question-38' => $row['Score Question 38'] ?? $row[38],
//            'score-question-39' => $row['Score Question 39'] ?? $row[39],
//            'score-question-40' => $row['Score Question 40'] ?? $row[40],
//            'score-question-41' => $row['Score Question 41'] ?? $row[41],
//            'score-question-42' => $row['Score Question 42'] ?? $row[42],
//            'score-question-43' => $row['Score Question 43'] ?? $row[43],
//            'score-question-44' => $row['Score Question 44'] ?? $row[44],
//            'score-question-45' => $row['Score Question 45'] ?? $row[45],
//            'score-question-46' => $row['Score Question 46'] ?? $row[46],
//            'score-question-47' => $row['Score Question 47'] ?? $row[47],
//            'score-question-48' => $row['Score Question 48'] ?? $row[48],
//            'score-question-49' => $row['Score Question 49'] ?? $row[49],
//        ]);
    }
}
