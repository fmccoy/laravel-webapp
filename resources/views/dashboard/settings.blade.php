@extends('layouts.dashboard')

@section('content')

  @parent

  <h1 class="page-header">Settings</h1>

  @include('dashboard.partials.form-settings')

@endsection
