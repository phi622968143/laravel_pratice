@extends('layouts.layouts')
    @section('content')  
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            <div style="text-align: center;">
                <p>{{$id}}</p><img src="{{ asset('img/' . $id . '.jpg') }}" alt="">
        </div>
    @endsection('content')

