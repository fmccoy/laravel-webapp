@extends('layouts.dashboard')

@section('content')
  <div class="col-sm-8">
    <h1 class="page-header">{{ $brewery->name }}</h1>
    <p>{{ $brewery->city}}, {{ $brewery->state }}</p>
  </div>

  <div class="col-sm-4">
    <div class="logo">
      <img src="{{ asset('assets/images/breweries/'.$brewery->logo) }}" class="img-responsive" alt="{{ $brewery->name }} - Logo" />
    </div>
  </div>

@endsection
