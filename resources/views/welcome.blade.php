@extends('layouts.layouts')

@section('content')
<div class="flex-center position-ref full-height">
	<!-- add this code from here -->
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
	<!-- up to here -->
    
    <div class="content">
        <img src="https://ssmscdn.yp.ca/image/resize/f137f118-7e0d-4bae-a1b1-b2eb8e26b80f/ypui-m-mp-pic-gal-lg/pizza-house-1.jpg" alt="pizza house logo" >
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="mssg">{{ session('msg') }}</p>
        <a href="{{route('pizza.create')}}">Order a Pizza</a>
    </div>
</div>
@endsection
