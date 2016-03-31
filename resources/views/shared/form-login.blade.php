{{ Form::open(['url'=> 'login', 'class'=>'form form-signin']) }}

<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
  {{ Form::label('username', 'Name', array('class'=>'control-label sr-only')) }}
  {{ Form::text('username', old('username'), array('class'=>'form-control')) }}
  @if ($errors->has('username'))
    <span class="help-block">
      <strong>{{ $errors->first('username') }}</strong>
    </span>
  @endif
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
  {{ Form::label('password', 'Password', array('class'=>'control-label sr-only')) }}

  {{ Form::password('password', array('class'=>'form-control')) }}
  @if ($errors->has('password'))
    <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
  @endif
</div>

{{ Form::submit('Login', array('class'=> 'btn btn-primary btn-lg btn-block')) }}

{{ Form::close() }}
