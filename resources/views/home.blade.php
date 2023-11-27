@extends('layouts.app.app')
@section('content')

@section('title', 'Home')



<div>


    @include('components/home/slider')
    @include('components/home/video')

    @include('components/home/image')
    @include('components/home/review')


    <div>
        <div class="t-head">
            <h1 class="tracking-tight hover:tracking-wide text-center text-3xl font-black">Coverage <span class="text-purple-600	">aria</span></h1>

        </div>

        <div class="grid grid-cols-3 gap-10 m-10">

            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold">Dhaka</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold">Chittagong</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold">cumilla</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold">Noakhali</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold">Bogora</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold">Feni</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold">Dinajpur</p>
                <p class="m-5">100</p>
            </div>

            <div class="border hover:border-primary  flex justify-between  ">
                <p class="w-5/6 p-6  bg-gray-200 font-bold	">Khulna</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold	">Mymensingh</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between ">
                <p class="w-5/6 p-6  bg-gray-200 font-bold	">Rajshahi</p>
                <p class="m-5">100</p>
            </div>
            <div class="border hover:border-primary  flex justify-between">
                <p class="w-5/6 p-6  bg-gray-200 font-bold	">Rangpur</p>
                <p class="m-5">100</p>
            </div>
            <button class="border hover:border-primary  text-center">
                <p class="p-6 font-bold ">See more
                    <link src="">
                </p>
            </button>
            {{-- <div class="absolute bottom-26 right-10 h-16 w-26" > --}}
        </div>
    </div>
</div>
</div>




</div>

@endsection