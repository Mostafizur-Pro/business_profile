@extends('layouts.app.app')
@section('content')
@section('title', 'Package')



<div>

    <!-- Cover Page -->
    @section('cover', 'Package Plan')
    @include('components/cover/cover')
    <!-- Cover Page -->

    @include('components/package/packageList')
    

</div>

@endsection