<?php
/**
 * Created by PhpStorm.
 * User: smartrahat
 * Date: 11/27/2016
 * Time: 03:06 AM
 */

namespace App\Repositories;


use App\Level;
use App\Subject;

class QuestionRepository
{
    public function levels()
    {
        return Level::all()->pluck('name','id');
    }

    public function subjects()
    {
        return Subject::all()->pluck('name','id');
    }

}