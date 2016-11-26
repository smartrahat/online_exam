<div class="form-group">
    {!! Form::label('question','Question',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('question',null,['class'=>'form-control','placeholder'=>'Write the question','required']) !!}
        @if ($errors->has('question'))
            <span class="help-block">
                <strong>{{ $errors->first('question') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('level','Set Level',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::select('level',$repository->levels(),null,['class'=>'form-control','placeholder'=>'Select a Difficulty Level','required']) !!}
        @if ($errors->has('level'))
            <span class="help-block">
                <strong>{{ $errors->first('level') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('subject','Select Subject',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::select('subject',$repository->subjects(),null,['class'=>'form-control','placeholder'=>'Select a Subject','required']) !!}
        @if ($errors->has('subject'))
            <span class="help-block">
                <strong>{{ $errors->first('subject') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('answer1','Wrong Answer 1',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('answer1',null,['class'=>'form-control','placeholder'=>'Write wrong answer, add more if needed','required']) !!}
        @if ($errors->has('answer1'))
            <span class="help-block">
                <strong>{{ $errors->first('answer1') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('correct1','Correct Answer 1',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('correct1',null,['class'=>'form-control','placeholder'=>'Write right answer, add more for multiple choice','required']) !!}
        @if ($errors->has('correct1'))
            <span class="help-block">
                <strong>{{ $errors->first('correct1') }}</strong>
            </span>
        @endif
    </div>
</div>
{{--<div class="form-group">--}}
    {{--{!! Form::label('religion','Religion',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::select('religion',[],null,['class'=>'form-control','placeholder'=>'Select Religion']) !!}--}}
        {{--@if ($errors->has('religion'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('religion') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('address_one','Address Line One',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('address_one',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('address_one'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('address_one') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('address_two','Address Line Two',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('address_two',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('address_two'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('address_two') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('country','Country',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('country',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('country'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('country') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('state','State',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('state',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('state'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('state') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('city','City',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('city',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('city'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('city') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('postal','ZIP Code',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('postal',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('postal'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('postal') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('phone','Phone',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('phone',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('phone'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('phone') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('email','Email',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('email',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('email'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('email') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('department_id','Department',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::select('department_id',[],null,['class'=>'form-control','placeholder'=>'Select Department']) !!}--}}
        {{--@if ($errors->has('department_id'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('department_id') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('dob','Date of Birth',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('dob',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('dob'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('dob') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('joining','Joining Date',['class'=>'control-label col-sm-3']) !!}--}}
    {{--<div class="col-sm-6">--}}
        {{--{!! Form::text('joining',null,['class'=>'form-control']) !!}--}}
        {{--@if ($errors->has('joining'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('joining') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--<img src="{{ asset('images/teachers') }}/{{ $question->image }}" alt="" id="blah" width="160px" height="160px" class="thumbnail" style="margin-left: 20%"/>--}}
    {{--<label for="image" class="control-label col-sm-3">Image:</label>--}}
    {{--<div class="col-sm-6">--}}
        {{--<input name="image" type="file" id="exampleInputFile" onchange="readURL(this)" value="{{ old('image') }}">--}}
        {{--<p class="help-block">Upload a picture of room</p>--}}
        {{--@if ($errors->has('image'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('image') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
<div class="form-group text-center">
    {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
    {!! Form::reset('Reset',['class'=>'btn btn-warning']) !!}
    <a href="#" role="button" class="btn btn-danger">Cancel</a>
</div>