<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $dates = ['dob','joining'];

    protected $fillable = ['name','f_name','m_name','phone','email','gender','religion','address_one','address_two','city','state','postal','country','department_id','joining','dob','image'];

    /**
     * A teacher is belongs to a department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    /**
     * A teacher is belongs to a designation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function designation()
    {
        return $this->belongsTo('App\Designation');
    }
}
