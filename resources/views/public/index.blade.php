@extends('layouts.master')

{{-- CSS --}}
@push('header')
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" media="screen" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('assets/css/public.css') }}" media="screen" charset="utf-8">
@endpush

{{-- content --}}
@section('body')
  <h1>Public Index</h1>
@endsection

{{-- Javascript --}}
@push('header')
  <script src="{{ asset('assets/js/jquery.js') }}" charset="utf-8"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}" charset="utf-8"></script>
@endpush
