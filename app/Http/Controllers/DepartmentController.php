<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DepartmentRequest;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $departments = Department::all();
        return view('department.index',compact('departments'));
    }

    public function store(DepartmentRequest $request)
    {
        Department::create($request->all());
        Session::flash('success',$request->name.' has been added successfully!');
        return redirect('departments');
    }

    public function destroy($id){
        $department = Department::query()->findOrFail($id);
        $department->delete();
        Session::flash('success',$department->name.' has been deleted!');
        return redirect('departments');
    }
}
