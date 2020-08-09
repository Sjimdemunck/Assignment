<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_number',
        'caesura',
        'r-value',
        'p-value'
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'scores')->withPivot('score');;
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
