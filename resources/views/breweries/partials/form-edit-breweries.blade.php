{{ Form::model($brewery, array('route'=> array('breweries.update', $brewery->id), 'method'=>'PUT','class'=>'form form-horizontal', 'files'=> true)) }}

<div class="form-group">
  {{ Form::label('name', 'Name:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('name', $brewery->name, array('class'=>'form-control')) }}
  </div>
</div>


<div class="form-group">
  {{ Form::label('state', 'State:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::select('state', App\Breweries::states(), $brewery->state, array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('city', 'City:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('city', $brewery->city, array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('logo', 'Logo:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::file('logo', NULL, array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    {{ Form::submit('Submit', array('class'=>'btn btn-primary btn-block')) }}
  </div>
</div>

{{ Form::close() }}
