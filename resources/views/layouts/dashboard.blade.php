@extends('layouts.master')

{{-- CSS --}}
@push('header')
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" media="screen" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" media="screen" charset="utf-8">
@endpush

{{-- content --}}
@section('body')
  @include('dashboard.partials.navbar-fixed-top')

  <div class="container-fluid">
    <div class='row '>
      @include('dashboard.partials.sidebar-main')
      @include('dashboard.partials.content-main')
    </div>
  </div>
@endsection

{{-- Javascript --}}
@push('header')
  <script src="{{ asset('assets/js/jquery.js') }}" charset="utf-8"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}" charset="utf-8"></script>
@endpush
