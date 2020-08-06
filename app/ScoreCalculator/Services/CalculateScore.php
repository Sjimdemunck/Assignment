<?php

namespace app\ScoreCalculator\Services;

require_once __DIR__ . '../../../vendor/autoload.php';

use Illuminate\Support\Facades\DB;
use ScoreCalculator\Services\FetchScore;

class CalculateScore
{

    /**
     * @var FetchScore $fetchedScore
     */
    private $fetchedScore;

    public function __construct(FetchScore $fetchedScore)
    {
        $this->fetchedScore = $fetchedScore;
    }

    // Do the magic calculation

    public function printScore(int $score)
    {

    }


    public function getScore()
    {

    }
}
