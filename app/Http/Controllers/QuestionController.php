<?php

namespace App\Http\Controllers;

use App\Repositories\QuestionRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;

class QuestionController extends Controller
{
    /**
     * @var QuestionRepository
     */
    private $repository;

    public function __construct(QuestionRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $questions = Question::all();
        return view('question.index',compact('questions'));
    }

    public function create()
    {
        $repository = $this->repository;
        return view('question.create',compact('repository'));
    }
}
