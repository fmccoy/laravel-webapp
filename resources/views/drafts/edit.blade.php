@extends('layouts.dashboard')

@section('content')
  @parent
  <h1 class="page-header">Edit Draft</h1>
  {{ Session::get('message') }}
  @include('drafts.partials.form-edit-drafts')
@endsection

@section('sidebar-main')
  @parent
@endsection
