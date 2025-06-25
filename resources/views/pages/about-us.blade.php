@extends('layouts.default')
@section('content')

    <div class="text-center mt-5">
        <div class="flex justify-center">
            <div class="w-250 bg-primary p-5 rounded-md">
                <h1 class="text-white text-5xl mb-10">About us</h1>
                <p class="text-white mb-10">At our gaming store, we don’t just sell games — we create a home for gamers. What sets us apart from the competition is our passion, personalized service, and deep understanding of what gamers truly want. From the latest releases to hard-to-find gems, we handpick every product with quality and excitement in mind. Unlike big box retailers or faceless online shops, we offer expert advice, a welcoming community, and a commitment to making every visit an experience, not just a transaction. Whether you're a casual player or a competitive pro, our mission is to fuel your passion for gaming like no other store can.</p>
                <div class="flex justify-around">
                    <div>
                        <img src="{{asset('images/pics/makedonia-transparent.png')}}" alt="macedonian flag" style="width:300px; height: 300px">
                        <h3 class="text-white text-3xl">Flag of North Macedonia</h3>
                    </div>
                    <img src="{{asset('images/pics/map-of-makedonia.jpg')}}" alt="macedonian flag" style="width:400px; height: 400px">
                </div>
            </div>
        </div>
    </div>

@endsection