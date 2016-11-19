<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SubjectRequest;
use Illuminate\Support\Facades\Session;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index',compact('subjects'));
    }

    public function store(SubjectRequest $request)
    {
        Subject::create($request->all());
        Session::flash('success',$request->name.' has been added!');
        return redirect('subjects');
    }

    public function destroy($id)
    {
        $subject = Subject::query()->findOrFail($id);
        $subject->delete();
        Session::flash('success',$subject->name.' has been deleted!');
        return redirect('subjects');
    }
}
