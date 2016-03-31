{{ Form::open(array('class'=>'form form-horizontal', 'files'=> true, 'route'=>'breweries.store')) }}

<div class="form-group">
  {{ Form::label('name', 'Name:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('name', old('name'), array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('city', 'City:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('city', old('city'), array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('state', 'State:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::select('state', $states, '', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('logo', 'Logo:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::file('logo', '', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    {{ Form::submit('Submit', array('class'=>'btn btn-primary btn-block')) }}
  </div>
</div>

{{ Form::close() }}
