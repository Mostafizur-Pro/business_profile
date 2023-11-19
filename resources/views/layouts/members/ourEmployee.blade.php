@extends('layouts.app.app')
@section('content')
@section('title', 'Employees List')


<div>
    <!-- Cover Page -->
    @section('coverText', 'Our Employee')
    @section('coverMenu', 'Member')
    @include('components/cover/coverText')
    <!-- Cover Page -->

    <h2 class="my-12 text-3xl font-bold text-center">
        Meet our  <u class="text-primary dark:text-primary-400">Employees</u>
    </h2>

    <div>

        <div> Side </div>
        <div>

            <!-- Container for demo purpose -->
            @include('components/member/ourEmployee')
            <!-- Container for demo purpose -->
        </div>
    </div>
    
</div>

@endsection