@extends('layouts.default')
@section('content')
    <div class="flex justify-center items-center h-screen">
        <form action="#" method="POST">
            <div class="bg-[#473f31] p-3 rounded-t-md">
                <p class="text-center text-xl text-white">SIGN UP</p>
            </div>
            <div class="bg-[#b0a485] rounded-1 p-28 rounded-b-md">
                <div class="flex flex-col">
                    <label>Name:</label>
                    <input type="text" name="name" placeholder="Enter name here...">
                </div>
                <div class="flex flex-col">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Enter name here...">
                </div>
                <div class="flex flex-col">
                    <label>Password:</label>
                    <input type="password" name="password" placeholder="Enter name here...">
                </div>
                <div class="flex flex-col">
                    <button class="text-white items-center bg-[#473f31] mt-3">Sign up</button>
                </div>
            </div>
        </form>
    </div>
@endsection