<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Repositories\TeacherRepository;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    /**
     * @var TeacherRepository
     */
    private $repository;

    public function __construct(TeacherRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $teachers = Teacher::query()->paginate(10);
        //dd(base_path());
        return view('teacher.index',compact('teachers'));
    }

    public function create()
    {
        $repository = $this->repository;
        return view('teacher.create',compact('repository'));
    }

    public function store(TeacherRequest $request)
    {
        $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'teachers'"));

        $request['role_id'] = 2;

        if($request->hasFile('image')){
            $image = $query[0]->Auto_increment.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path().'/public/images/teachers/', $image);
            $data = ($request->except(['image']));
            $data['image'] = $image;
//dd($request->all());
            Teacher::create($data);
        }else{
            Teacher::create($request->except(['image']));
        }

        $this->createUser($request->all());
        Session::flash('success',$request->name.' has been added!');
        return redirect('teacher/show/'.$query[0]->Auto_increment);
    }

    public function show($id)
    {
        $teacher = Teacher::query()->findOrFail($id);
        return view('teacher.show',compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = Teacher::query()->findOrFail($id);
        $repository = $this->repository;
        return view('teacher.edit',compact('teacher','repository'));
    }

    public function update(TeacherRequest $request,$id)
    {
        $teacher = Teacher::query()->findOrFail($id);

        if($request->hasFile('image')){
            $image = $teacher->id.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path().'/public/images/teachers/', $image);
            $data = ($request->except(['image']));
            $data['image'] = $image;

            $teacher->update($data);
        }else{
            $teacher->update($request->except(['image']));
        }

        Session::flash('success',$teacher->name.' has been updated successfully!');
        return redirect('teacher/show/'.$teacher->id);
    }

    public function destroy($id)
    {
        $teacher = Teacher::query()->findOrFail($id);
        File::delete('images/teachers/'.$teacher->image);
        $teacher->delete();
        Session::flash('success',$teacher->name.' has been deleted!');
        return redirect('teachers');
    }

    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'role_id' => $data['role_id'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
