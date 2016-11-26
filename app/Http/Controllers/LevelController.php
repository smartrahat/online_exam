<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $levels = Level::all();
        return view('level.index',compact('levels'));
    }

    public function store(Request $request)
    {
        Level::create($request->all());
        Session::flash('success',$request->name.' has been added!');
        return redirect('levels');
    }

    public function destroy($id)
    {
        $level = Level::query()->findOrFail($id);
        $level->delete();
        Session::flash('success',$level->name.' has been deleted!');
        return redirect('levels');
    }
}
