@extends('layouts.app.app')

@section('content')
@section('title', 'About Us')



<div>

    <!-- Cover Page -->
    @section('cover', 'About Us')
    @include('components/cover/cover')
    <!-- Cover Page -->

    @include('components/about/banner')
    @include('components/about/ourTeam')
    @include('components/about/logo')
    @include('components/about/gallery')

    
</div>

@endsection