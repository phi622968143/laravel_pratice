<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizza=[
            "type"=>['Chicago Deep-Dish Pizza',
            'New York-style Pizza.',
            'Detroit-style Pizza.'],
            'base'=>['pineapple','cheese','seafood'],
            'price'=>[20,10,15],
            'name'=>request('name') //url pass var
        ];
        return view('pizza',$pizza);
    }
    public function detail($id){
        return view('detail',['id'=>$id]);
    }
}
