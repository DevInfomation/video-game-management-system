@extends('layouts.default')
@section('content')
    <div class="flex justify-evenly mt-5">
        <div class="my-container w-86 bg-primary py-4">
            <div class="accordion-wrapper px-5">
                <div class="accordion mb-5 cursor-pointer">
                    <div class="accordion-heading flex align-center justify-between gap-1 border-solid border-2 border-black px-3 py-2">
                        <h3 class="text-white text-2xl">Price</h3>
                        <i class="fas fa-angle-down text-white pt-2"></i>
                    </div>
                    <div class="accordion-content hidden text-white py-2 px-4 border-solid border-t-0 border-2 border-gray-100 bg-secondary">
                        <div>
                            <input type="checkbox" name="2000" class="checkbox-input">
                            <label class="text-white">Expensive to cheapest</label>
                        </div>
                        <div>
                            <input type="checkbox" name="2000" class="checkbox-input">
                            <label class="text-white">Cheapest to Expensive</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-wrapper px-5">
                <div class="accordion mb-5 cursor-pointer">
                    <div class="accordion-heading flex align-center justify-between gap-5 border-solid border-2 border-black px-3 py-2">
                        <h3 class="text-white text-2xl">Genre</h3>
                        <i class="fas fa-angle-down text-white pt-2"></i>
                    </div>
                    <div class="genre-from-database accordion-content hidden text-white py-2 px-4 border-t-0 border-solid border-2 border-gray-100 bg-secondary">
                        @foreach ($imageData as $data)
                            <div>
                                <input type="checkbox" name="{{$data->category}}" class="checkbox-input">
                                <label class="text-white">{{$data->category}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="accordion-wrapper px-5">
                <div class="accordion mb-5 cursor-pointer">
                    <div class="accordion-heading flex align-center justify-between gap-5 border-solid border-2 border-black px-3 py-2">
                        <h3 class="text-white text-2xl">Language</h3>
                        <i class="fas fa-angle-down text-white pt-2"></i>
                    </div>
                    <div class="accordion-content hidden text-white py-2 px-4 border-solid border-t-0 border-2 border-gray-100 bg-secondary">
                        <div>
                            <input type="checkbox" name="macedonian-language" id="macedonian" class="checkbox-input">
                            <label for="macedonian">Macedonian</label>
                        </div>
                        <div>
                            <input type="checkbox" name="english-language" id="english" class="checkbox-input">
                            <label for="english">English</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-4">
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