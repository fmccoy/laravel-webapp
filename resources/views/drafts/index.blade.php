@extends('layouts.dashboard')

@section('content')
  @parent
  <h1 class="page-header">Drafts</h1>
  {{ Session::get('message') }}
  <a href="{{ route('drafts.create') }}" class="btn btn-primary btn-block">Add New Draft</a>
  <br />
  @include('drafts.partials.table-drafts')
@endsection

@section('sidebar-main')
  @parent
@endsection
