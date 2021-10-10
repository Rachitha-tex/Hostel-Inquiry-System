@extends('base')
@section('content')
@section('title')
    {{'Home'}}
@endsection

  @include('carousel')

  <h1 class="text text-center py-4">Our Hostels</h1>
  @include('hostel')

@endsection