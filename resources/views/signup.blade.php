@extends('layouts.default')
@section('content')
    <div class="flex justify-center items-center h-screen">
        <form action="#" method="POST">
            <div class="bg-[#473f31] p-3 rounded-t-md">
                <p class="text-center text-xl text-white">SIGN UP</p>
            </div>
            <div class="bg-[#b0a485] rounded-1 rounded-b-md p-36">
                <div class="flex flex-col">
                    <label class="mb-1">Name:</label>
                    <input class="border rounded-md p-2 w-[25rem] mb-3" type="text" name="name" placeholder="Enter name here...">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1">Email:</label>
                    <input class="border rounded-md p-2 mb-3" type="email" name="email" placeholder="Enter email here...">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1">Password:</label>
                    <input class="border rounded-md p-2" type="password" name="password" placeholder="Enter password here...">
                </div>
                <div class="flex flex-col">
                    <button class="text-white items-center bg-[#473f31] mt-3 p-2">Sign up</button>
                </div>
            </div>
        </form>
    </div>
@endsection