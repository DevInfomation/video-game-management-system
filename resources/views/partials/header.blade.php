@unless (Auth::check()) {{-- Check to see if the user is logged in --}}
    <div class="grid grid-cols-2 border rounded-1 bg-black p-2">
        <div class="w-1/2">
            <a href="/dashboard"><h2 class="text-white text-2xl ml-2 mt-1">Video Game Management System</h2></a>
        </div>
        <div class="flex justify-end">
            <a href="/login"><p class="text-white text-lg mt-1 mr-8">Login</p></a>     
            <a href="/signup"><p class="text-white text-lg mt-1">Signup</p></a>    
        </div> 
    </div>
@else
    <div class="grid grid-cols-3 border rounded-1 bg-black p-2">
        <div class="w-full">
            <a href="/dashboard"><h2 class="text-white text-2xl ml-2 mt-1">Video Game Management System</h2></a>
        </div>
        <div class="flex justify-end">
            <a href="/login"><p class="text-white text-lg mt-1 mr-8">Welcome: {{$user->name}}</p></a>     
            <i class="fa-solid fa-cart-shopping text-white text-xl mt-2"></i>
        </div> 
        <div class="flex justify-end">
            <form action="{{route('logout.submit')}}" method="POST">
                @csrf
                <button class="text-white text-lg mt-1 mr-8 cursor-pointer">Logout</button>
            </form>
        </div> 
    </div
@endunless