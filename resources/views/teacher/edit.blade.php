@extends('layouts.home')

@section('title','Edit Teacher')

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
                <h3 class="panel-title">{{ 'Edit '.$teacher->name }}</h3>
            </div>
            <div class="panel-body">
                {!! Form::model($teacher,['action'=>['TeacherController@update',$teacher->id],'method'=>'patch','role'=>'form','class'=>'form form-horizontal','files'=>true]) !!}
                @include('teacher.form')
                {!! Form::close() !!}
            </div>
        </div>
        <!-- Add New Department Ends -->

@stop