<?php
/**
 * Created by PhpStorm.
 * User: smartrahat
 * Date: 9/30/2016
 * Time: 8:11 PM
 */

namespace App\Repositories;


use App\Department;

class TeacherRepository {

    public function gender()
    {
        return ['Male'=>'Male','Female'=>'Female'];
    }

    public function religion()
    {
        return ['Islam'=>'Islam','Hinduism'=>'Hinduism','Buddhism'=>'Buddhism','Christianity'=>'Christianity','Other'=>'Other'];
    }

    public function departments()
    {
        return Department::all()->pluck('name','id');
    }

}