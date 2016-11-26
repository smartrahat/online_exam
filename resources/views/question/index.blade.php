@extends('layouts.home')

@section('title','Teachers')

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
                <h3 class="panel-title">Add New Subjects</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <th>{{ $question->id }}</th>
                            <th><a href="{{ action('QuestionController@show',[$question->id]) }}">{{ $question->name }}</a></th>
                            <th>{{ $question->department }}</th>
                            <th>{{ $question->designation }}</th>
                            <th><img src="{{ asset('images/teachers') }}/{{ $question->image }}" alt="" width="100" height="100"/></th>
                            <th>
                                {!! Form::open(['action'=>['QuestionController@destroy',$question->id],'method'=>'delete','onsubmit'=>'return deleteConfirm()']) !!}
                                <a href="{{ action('QuestionController@edit',[$question->id]) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                {!! Form::submit('X',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Add New Department Ends -->

@stop

@section('script')
    <script>
        function deleteConfirm(){
            var x = confirm('Are you really want to delete this question?');
            return !!x;
        }
    </script>
@stop