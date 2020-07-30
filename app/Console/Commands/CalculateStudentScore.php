<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\CalculateScore;

class CalculateStudentScore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:score';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculates the passing grade of a student';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     */
    public function handle(CalculateScore $calculateScore)
    {
       return $calculateScore->printScore();
    }
}
