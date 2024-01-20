@extends('layouts.layouts')
    @section('content')  
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            <div style="text-align: center;">
                <h1>pizza list</h1>
                <p>hello {{$name}}!</p>
                @for ($i = 0; $i < count($type); $i++)
                    <div style="background-color: rgba(10, 233, 10, 0.08); padding: 10px; margin: 5px; display: block;">
                        <p>{{$i}}--{{$type[$i]}} - {{$base[$i]}} - {{$price[$i]}}</p>
                        <a href="/img/{{$i}}.jpg" target="_blank"><img src="/img/{{$i}}.jpg" width="90px" height="100px"></a>
                        <button>click to have one!</button>
                        @if($price[$i]>15)  {{--remember this is an array ele--}}
                            <p>this is expensive!</p>
                        @endif
                    </div><br>
                @endfor
            </div>
        </div>
    @endsection('content')

