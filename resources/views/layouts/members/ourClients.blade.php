@extends('layouts.app.app')
@section('content')
@section('title', 'Clients List')



<div>
    <!-- Cover Page -->
    @section('coverText', 'Our Client')
    @section('coverMenu', 'Member')
    @include('components/cover/coverText')
    <!-- Cover Page -->

    <h2 class="my-12 text-3xl font-bold text-center">
        Meet our  <u class="text-primary dark:text-primary-400">Clients</u>
    </h2>
    <div>

        <div> Side </div>
        <div>

            <!-- Container for demo purpose -->
            @include('components/member/ourClient')
            <!-- Container for demo purpose -->
        </div>
    </div>
</div>

@endsection