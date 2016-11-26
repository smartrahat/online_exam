<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['name','description'];

    /**
     * A question is belongs to a level
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function questions()
    {
        return $this->belongsTo('App\Question');
    }
}
