<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * A question has many answers
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany('App\Question');
    }

    /**
     * A question has many correct answers
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function corrects()
    {
        return $this->hasMany('App\Correct');
    }
}
