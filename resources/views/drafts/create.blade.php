@extends('layouts.dashboard')

@section('content')
  @parent
  <h1 class="page-header">Add Draft</h1>
  {{ Session::get('message') }}
  @include('drafts.partials.form-create-drafts')
@endsection

@section('sidebar-main')
  @parent
@endsection
