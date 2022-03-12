<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('auth/assets/plugins/fontawesome-free/css/all.min.css') }}">

  @if (app()->getLocale() == 'ar')

  <link rel="stylesheet" href="{{ asset('auth/assets/dist/css/adminlte.min.css') }}">


    @else
    <link rel="stylesheet" href="{{ asset('auth/assets/dist/css/adminlte.min.css') }}">

  @endif
  <!-- Theme style -->
  @yield('css')

</head>
