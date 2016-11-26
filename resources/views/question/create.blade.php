@extends('layouts.home')

@section('title','Add Question')

@section('content')

    <!-- Display Alert Message if any Starts -->
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Bravo!</strong> {{ Session::get('success') }}
        </div>
        @endif
                <!-- Display Alert Message if any Ends -->

        <!-- Add New Department Starts -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add New Question</h3>
            </div>
            <div class="panel-body">
                {!! Form::model($question = new App\Question,['action'=>'QuestionController@store','method'=>'post','role'=>'form','class'=>'form form-horizontal','files'=>true]) !!}
                @include('question.form')
                {!! Form::close() !!}
            </div>
        </div>
        <!-- Add New Department Ends -->

@stop