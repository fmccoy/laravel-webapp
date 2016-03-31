{{ Form::open(array('class'=>'form form-horizontal', 'url'=>'settings')) }}

@foreach( $settings as $setting)
<div class="form-group">
  {{ Form::label($setting->name, App\Settings::niceName($setting->name), array('class'=>'col-sm-2 control-label')) }}
  <div class="col-sm-10">
    {{ Form::text($setting->name, $setting->value, array('class'=> 'form-control') ) }}
  </div>
</div>
@endforeach

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    {{ Form::submit('Update Settings', array('class'=> 'btn btn-primary pull-right')) }}
  </div>
</div>

{{ Form::close() }}
