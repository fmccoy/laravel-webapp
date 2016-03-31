@extends('layouts.dashboard')

@section('content')
  @parent
  <h1 class="page-header">Breweries</h1>
  {{ Session::get('message') }}
  <a href="{{ route('breweries.create') }}" class="btn btn-primary btn-block">Add New Brewery</a>
  @include('breweries.partials.table-breweries')
@endsection

@section('sidebar-main')
  @parent
@endsection
