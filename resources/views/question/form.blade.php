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
    <div class="col-sm-6" id="answer">
        {!! Form::text('answer1',null,['class'=>'form-control','placeholder'=>'Write wrong answer, add more if needed','required']) !!}
        @if ($errors->has('answer1'))
            <span class="help-block">
                <strong>{{ $errors->first('answer1') }}</strong>
            </span>
        @endif
    </div>
    <button type="button" class="btn btn-success" onclick="return addAnswer('answer')"><i class="fa fa-plus"></i></button>
    <button type="button" class="btn btn-success" onclick="return removeAnswer('answer')"><i class="fa fa-minus"></i></button>
</div>
<div class="form-group">
    {!! Form::label('correct1','Correct Answer 1',['class'=>'control-label col-sm-3']) !!}
    <div class="col-sm-6" id="correct">
        {!! Form::text('correct1',null,['class'=>'form-control','placeholder'=>'Write right answer, add more for multiple choice','required']) !!}
        @if ($errors->has('correct1'))
            <span class="help-block">
                <strong>{{ $errors->first('correct1') }}</strong>
            </span>
        @endif
    </div>
    <button type="button" class="btn btn-success" onclick="return addAnswer('correct')"><i class="fa fa-plus"></i></button>
    <button type="button" class="btn btn-success" onclick="return removeAnswer('correct')"><i class="fa fa-minus"></i></button>
</div>
<div class="form-group text-center">
    {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
    {!! Form::reset('Reset',['class'=>'btn btn-warning']) !!}
    <a href="#" role="button" class="btn btn-danger">Cancel</a>
</div>

@section('script')
    <script>
        function addAnswer(rw){
            // get the last INPUT which NAME starts with ^= "answer"
            var $input = $('input[name^="'+rw+'"]:last');

            // Read the Number from that INPUT's NAME (i.e: 3 from "answer3")
            // And increment that number by 1
            var num = parseInt( $input.prop("name").match(/\d+/g), 10 ) +1;

            // Clone it and assign the new NAME (i.e: from num 4 to NAME "answer4")
            var $answer = $input.clone().prop('name', rw+num);

            // >>> Append $answer wherever you want
            $answer.appendTo($("#"+rw));
        }

        function removeAnswer(rw){
            var $input = $('input[name^="'+rw+'"]:last');
            if($input.prop('name') == rw+1){
                alert('Error: Minimum 1 field needed');
            }else{
                $input.remove();
            }
        }
    </script>
@stop