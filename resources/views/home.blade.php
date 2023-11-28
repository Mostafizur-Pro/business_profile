@extends('layouts.app.app')
@section('content')

@section('title', 'Home')



<div>


    @include('components/home/slider')
    @include('components/home/video')

    @include('components/home/image')
    @include('components/home/review')
    @include('components/home/map')


    
</div>


@endsection