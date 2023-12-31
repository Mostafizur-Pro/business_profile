@extends('layouts.app.app')
@section('content')
@section('title', 'Employees List')


<div>
    <!-- Cover Page -->
    @section('coverText', 'Our Employee')
    @section('coverMenu', 'Member')
    @include('components/cover/coverText')
    <!-- Cover Page -->

    <!-- <h2 class="my-12 text-3xl font-bold text-center">
        Meet our <u class="text-primary dark:text-primary-400">Employees</u>
    </h2> -->
    <div class="-mx-4 my-12 flex flex-wrap">
        <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                <span class="mb-2 block text-lg font-semibold text-primary">
                    Employees Table
                </span>
                <h2 class="mb-3 text-3xl leading-[1.208] font-bold text-dark  sm:text-4xl md:text-[40px]">
                    Our Employees List
                </h2>
                <p class="text-base text-body-color dark:text-dark-6">
                    There are many variations of passages of Lorem Ipsum available
                    but the majority have suffered alteration in some form.
                </p>
            </div>
        </div>
    </div>

    <div>

        <div>
            <!-- Side  -->
        </div>
        <div>

            <!-- Container for demo purpose -->
            @include('components/member/ourEmployee')
            <!-- Container for demo purpose -->
        </div>
    </div>

</div>

@endsection