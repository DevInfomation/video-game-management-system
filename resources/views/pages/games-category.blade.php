@extends('layouts.default')
@section('content')
    <div class="flex justify-around">
        <div class="grid grid-cols-4 gap-4 mt-5 my-15">
            @foreach ($imageData as $data)
                <div class="place-self-center" style="width: 250px; height: 350px;">
                    <div>
                        <img src="{{asset('images/games/' . $data->image)}}" alt="">
                    </div>
                    <div class="bg-primary w-full rounded-b-md py-2">
                        <p class="text-center text-white">{{$data->title}}</p>
                        <div class="flex justify-between px-5 mt-3">
                            <p class="text-white place-self-center">Price: {{$data->price}} MKD</p>
                            <button class="text-white bg-secondary rounded-md p-2 pl-4 pr-4 cursor-pointer">Buy</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection