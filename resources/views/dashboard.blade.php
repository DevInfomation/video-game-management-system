@extends('layouts.default')
@section('content')
    <div>
        <img 
        src="{{asset('images/banners/banner-homepage.png')}}" 
        alt="banner image for the website"
        class="absolute z-[-1] h-[35rem] w-full"
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

    <div class="container mx-auto">
        <div class="flex justify-center">
            <form action="#">
                <input class="bg-primary p-3 rounded-md w-96" type="text" placeholder="Search...">
                <button class="bg-primary ml-3 rounded-md p-3 hover:bg-secondary cursor-pointer">Search</button>
            </form>
        </div>

        <div class="mb-30">
            {{-- This button will be temporary --}}
            <form action="games-created" method="GET">
                <div class="flex justify-center mt-[2rem]">
                    <button class="bg-primary rounded-md p-3 hover:bg-secondary cursor-pointer">Enter a game here</button>
                </div>
            </form>
        </div>
        <div class="grid grid-cols-4 mt-5 my-15">
            @foreach ($imageData as $data)
                <div class="place-self-center" style="width: 350px; height: 450px;">
                    <div>
                        <img src="{{asset('images/games/' . $data->image)}}" alt="">
                    </div>
                    <div class="bg-primary w-full rounded-b-md py-2">
                        <p class="text-center text-white">{{$data->title}}</p>
                        <div class="flex justify-between px-5 mt-3">
                            <p class="text-white place-self-center">Price: {{$data->price}}</p>
                            <button class="text-white bg-secondary rounded-md p-2 pl-4 pr-4 cursor-pointer">Buy</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center">
            <button class="text-white bg-primary rounded-md p-2 pl-4 pr-4 cursor-pointer hover:bg-secondary">Browse</button>
        </div>
    </div>
@endsection