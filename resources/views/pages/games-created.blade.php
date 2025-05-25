@extends('layouts.default')
@section('content')
    <div class="h-screen flex items-center">
        <form action="{{route('game.submit')}}" method="POST" class="mx-auto w-1/3 border-4 rounded-md border-black bg-primary p-4">
            @csrf
            <h2 class="text-white text-2xl text-center bg-secondary mb-2">Enter the video game</h2>
            <div class="flex flex-col">
                <label class="mb-1 text-white">Name of the game</label>
                <input type="text" name="title" class="border rounded-md p-1.5 mb-2" placeholder="Enter game title...">
                <label class="mb-1 text-white">Developer Name</label>
                <input type="text" name="developer" class="border rounded-md p-1.5 mb-2" placeholder="Enter developer name...">
                <label class="mb-1 text-white">Game Publisher</label>
                <input type="text" name="publisher" class="border rounded-md p-1.5 mb-2" placeholder="Enter publisher name...">
                <label class="mb-1 text-white">Game Category</label>
                <input type="text" name="category" class="border rounded-md p-1.5 mb-2" placeholder="Enter game category...">
                <label class="mb-1 text-white">Game Published Year</label>
                <input type="text" name="published_year" class="border rounded-md p-1.5 mb-2" placeholder="Enter published year...">
                <label class="mb-1 text-white">Game Price (MKD)</label>
                <input type="text" name="price" class="border rounded-md p-1.5 mb-2" placeholder="Enter game price...">
                <button class="text-white rounded-md bg-secondary cursor-pointer p-1 mt-4">Create Your Game</button>
            </div>
        </form>
    </div>
@endsection