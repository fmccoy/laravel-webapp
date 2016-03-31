{{ Form::open(array('class'=>'form form-horizontal', 'files'=> true, 'route'=>'drafts.store')) }}

<div class="form-group">
  {{ Form::label('name', 'Name:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('name', '', array('class'=>'form-control')) }}
  </div>

</div>

<div class="form-group">
  {{ Form::label('brewery','Brewery:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::select('brewery', $breweries, NULL, array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('style', 'Style:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('style', '', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('description', 'Description:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::textarea('description', '', array('class'=>'form-control', 'rows'=>'3')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('pour', 'Pour:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::select('pour', array('S' => 'Standard', 'P' => 'Premium'), 'S', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('glassware', 'Glassware:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('glassware', '', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('abv', 'ABV:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('abv', '', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('ibu', 'IBU:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('ibu', '', array('class'=>'form-control')) }}
  </div>
</div>

{{--
<div class="form-group">
  {{ Form::label('image', 'Image:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::file('image', '', array('class'=>'form-control')) }}
  </div>
</div>
--}}

<div class="form-group">
  {{ Form::label('tasterPrice', 'Taster Price:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('tasterPrice', '', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('pourPrice', 'Pour Price:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('pourPrice', '', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('available', 'Available:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::select('available', array(1 => 'Yes', 0 => 'No'), 0, array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('haveTapHandle', 'Have Tap Handle:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::select('haveTapHandle', array(1 => 'Yes', 0 => 'No'), 0, array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('onSpecial', 'On Special:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::select('onSpecial', array(1 => 'Yes', 0 => 'No'), 0, array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('specialPrice', 'Special Price:', array('class'=>'col-sm-2 control-label' )) }}
  <div class="col-sm-10">
    {{ Form::text('specialPrice', '', array('class'=>'form-control')) }}
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    {{ Form::submit('Submit', array('class'=>'btn btn-primary btn-block')) }}
  </div>
</div>

{{ Form::close() }}
