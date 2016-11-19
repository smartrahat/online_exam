@extends('layouts.home')

@section('title',$teacher->name)

@section('content')

    <div class="col-md-2">
        <img src="{{ asset('images/teachers') }}/{{ $teacher->image }}" alt="" width="160" height="160"/>
        <p>{{ $teacher->department->name }}</p>
    </div>
    <div class="col-md-10">
        <p>Name: {{ $teacher->name }}</p>
        <p>Address: {{ $teacher->address_one }}</p>
    </div>

@stop