<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correct extends Model
{
    /**
     * A correct answer is belongs to a question
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
