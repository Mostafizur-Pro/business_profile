@extends('layouts.app.app')
@section('content')

@section('title', 'Home')

@include('components.logger.logger')



<div>

    @include('components/home/slider')
    @include('components/home/service')
    @include('components/home/video')

    @include('components/home/image')
    @include('components/home/review')
    @include('components/home/map')






    <!-- <dialog id="my_modal_4" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <p class="py-4">Click the button below to close</p>
            <div class="modal-action">
                <form method="dialog" class="">
                    <button class="btn text-white bg-red-300">Close</button>
                </form>
            </div>

        </div>
    </dialog>



    <script>
        const modal = document.getElementById('my_modal_4');
        function openModalAfterDelay() {
            setTimeout(function() {
                modal.showModal();
            }, 2000); 
        }
        openModalAfterDelay();
    </script> -->







</div>


@endsection