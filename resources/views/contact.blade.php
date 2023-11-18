@extends('layouts.app.app')
@section('content')
@section('title', 'Contact')



<div>

    <!-- Cover Page -->
    @section('cover', 'Contact')
    @include('components/cover/cover')
    <!-- Cover Page -->

    @include('components/contact/contactPage')
    @include('components/contact/maps')



</div>

@endsection