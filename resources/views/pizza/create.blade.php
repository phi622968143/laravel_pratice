@extends('layouts.layouts')
@section('content')  
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        
        <form action="/pizza" method="POST">
            @csrf   
            <h1>Create a new pizza</h1>
            
            <label for="name">Your name</label>
            <input type="text" id="name" name="name">
            
            <label for="type">Choose a type</label>
            <select name="type" id="type">
                <option value="Chicago Deep-Dish">Chicago Deep-Dish</option>
                <option value="Detroit-style">Detroit-style</option>
            </select>
            
            <label for="base">Choose a base</label>
            <select name="base" id="base">{{--the key--}}
                <option value="pineapple">Pineapple</option>
                <option value="seafood">Seafood</option>
            </select>
            <fieldset>
                <label>extra toppings</label><br/>
                <input type="checkbox" name="toppings[]" value="mushrooms">mushrooms<br/>
                <input type="checkbox" name="toppings[]" value="peppers">peppers<br/>
                <input type="checkbox" name="toppings[]" value="olives">olives<br/>
            </fieldset>
            <p><input type="submit" value="Order pizza"></p>
        </form>
    </div>
@endsection('content')
