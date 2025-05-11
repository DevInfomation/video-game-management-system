@extends('layouts.default')
@section('content') 
    <div class="flex justify-center items-center h-[80vh]">
        <form action="{{route('login.submit')}}" method="POST">
            @csrf
            <div class="bg-[#473f31] p-3 rounded-t-md">
                <p class="text-center text-xl text-white">LOGIN</p>
            </div>
            <div class="bg-[#b0a485] rounded-1 rounded-b-md p-15">
                <div class="flex flex-col">
                    <label class="mb-1">Name:</label>
                    <input class="border rounded-md p-2 w-[25rem] mb-5" type="text" name="name" placeholder="Enter name here...">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1">Email:</label>
                    <input class="border rounded-md p-2 mb-5" type="text" name="email" placeholder="Enter email here...">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1">Password:</label>
                    <input class="border rounded-md p-2" type="password" name="password" placeholder="Enter password here...">
                </div>
                <div class="grid grid-cols-1">
                    <button class="rounded-sm text-white place-self-center bg-[#473f31] mt-8 p-2 pl-10 pr-10 cursor-pointer">Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection