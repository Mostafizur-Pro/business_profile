@extends('layouts.app.app')
@section('content')



<div>
    <!-- Cover Page -->
    @section('coverText', 'Country')
    @section('coverMenu', 'Companies')
    @include('components/cover/coverText')
    <!-- Cover Page -->
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-10 mt-10">
        <div class="col-span-1 sm:col-span-1 lg:col-span-1">
            @include('components/member/countries/leftSide')
        </div>
        <div class="col-span-1 sm:col-span-2 lg:col-span-2">
            @include('components/member/countries/middle')
        </div>
        <div class="hidden sm:block lg:col-span-1">
            Right Side
        </div>
    </div>


    <div class=" mt-10 ">
        @include('components.logger.logger')
    </div>
</div>

@endsection