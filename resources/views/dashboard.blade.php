@extends('layouts.default')
@section('content')
    <div>
        <img 
        src="{{asset('images/banners/banner-homepage.png')}}" 
        alt="banner image for the website"
        class="absolute z-[-1] h-[40rem] w-full"
        >
        <div class="grid grid-cols-2 min-h-[40rem]">
            <div class="flex justify-center self-center">
                <div class="text-center">
                    <h2 class="text-white text-7xl tracking-normal mb-3">Welcome to VGMS</h2>
                    <p class="text-white text-2xl tracking-normal">Where all the right games come at the right price</p>
                </div>
            </div>
            <div class="flex justify-start items-center">
                <div class="">
                    <img src="{{asset('images/pics/thumbs-up.png')}}" alt="" class="h-86">
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    </div>
@endsection