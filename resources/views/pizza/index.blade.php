@extends('layouts.layouts')
    @section('content')  
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            <div style="text-align: center;">
                <h1>pizza list</h1>
                {{-- <p>hello {{$name}}!</p> --}}
                @foreach ($pizzas as $p)
                    <div>{{$p->name}}-{{$p->type}}-{{$p->base}}</div>
                @endforeach 
            </div>
        </div>
    @endsection('content')

