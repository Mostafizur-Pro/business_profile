@extends('layouts.app.app')
@section('content')
@section('title', 'Home')



<div>
@include('components/home/slider')
@include('components/home/video')

@include('components/home/image')

</div>

@endsection