<div class="form-group">
    {!! Form::label('name','Name',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('name',null,['class'=>'form-control']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('password','Login Password',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('password',null,['class'=>'form-control']) !!}
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('f_name','Father Name',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('f_name',null,['class'=>'form-control']) !!}
        @if ($errors->has('f_name'))
            <span class="help-block">
                <strong>{{ $errors->first('f_name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('m_name','Mother Name',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('m_name',null,['class'=>'form-control']) !!}
        @if ($errors->has('m_name'))
            <span class="help-block">
                <strong>{{ $errors->first('m_name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('gender','Gender',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::select('gender',$repository->gender(),null,['class'=>'form-control','placeholder'=>'Select Gender']) !!}
        @if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('religion','Religion',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::select('religion',$repository->religion(),null,['class'=>'form-control','placeholder'=>'Select Religion']) !!}
        @if ($errors->has('religion'))
            <span class="help-block">
                <strong>{{ $errors->first('religion') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('address_one','Address Line One',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('address_one',null,['class'=>'form-control']) !!}
        @if ($errors->has('address_one'))
            <span class="help-block">
                <strong>{{ $errors->first('address_one') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('address_two','Address Line Two',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('address_two',null,['class'=>'form-control']) !!}
        @if ($errors->has('address_two'))
            <span class="help-block">
                <strong>{{ $errors->first('address_two') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('country','Country',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('country',null,['class'=>'form-control']) !!}
        @if ($errors->has('country'))
            <span class="help-block">
                <strong>{{ $errors->first('country') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('state','State',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('state',null,['class'=>'form-control']) !!}
        @if ($errors->has('state'))
            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('city','City',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('city',null,['class'=>'form-control']) !!}
        @if ($errors->has('city'))
            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('postal','ZIP Code',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('postal',null,['class'=>'form-control']) !!}
        @if ($errors->has('postal'))
            <span class="help-block">
                <strong>{{ $errors->first('postal') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('phone','Phone',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('email','Email',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('email',null,['class'=>'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('department_id','Department',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::select('department_id',$repository->departments(),null,['class'=>'form-control','placeholder'=>'Select Department']) !!}
        @if ($errors->has('department_id'))
            <span class="help-block">
                <strong>{{ $errors->first('department_id') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('dob','Date of Birth',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('dob',null,['class'=>'form-control']) !!}
        @if ($errors->has('dob'))
            <span class="help-block">
                <strong>{{ $errors->first('dob') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('joining','Joining Date',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6">
        {!! Form::text('joining',null,['class'=>'form-control']) !!}
        @if ($errors->has('joining'))
            <span class="help-block">
                <strong>{{ $errors->first('joining') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    <img src="{{ asset('images/teachers') }}/{{ $teacher->image }}" alt="" id="blah" width="160px" height="160px" class="thumbnail" style="margin-left: 20%"/>
    <label for="image" class="control-label col-sm-3">Image:</label>
    <div class="col-sm-6">
        <input name="image" type="file" id="exampleInputFile" onchange="readURL(this)" value="{{ old('image') }}">
        <p class="help-block">Upload a picture of room</p>
        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group text-center">
    {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
    {!! Form::reset('Reset',['class'=>'btn btn-warning']) !!}
    <a href="#" role="button" class="btn btn-danger">Cancel</a>
</div>