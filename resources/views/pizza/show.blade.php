@extends('layouts.layouts')
    @section('content')  
    <div class="wrapper">
        {{-- <p>{{$pizzas->$id}}</p> --}}
        <h1>order from {{$pizzas->name}}</h1>
        <p>{{$pizzas->type}}</p>
        <p>{{$pizzas->base}}</p>
        <p><ul>
            @foreach($pizzas->toppings as $topping) <li>{{$topping}}</li>@endforeach
        </ul></p>
    </div>
    <form action="/pizza/{{$pizzas->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>complete del</button>
    </form>
    
    <a href="./" alt="back">back to list</a>
    @endsection('content')

