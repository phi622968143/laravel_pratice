<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pizzas;
class PizzaController extends Controller
{   
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        //$pizzas=pizzas::where('type','Detroit-style')->get();//eq to select from table where...
        // $pizzas=pizzas::latest()->get();
        $pizzas=pizzas::all(); //get the table from Models
        return view('pizza.index', ['pizzas' => $pizzas]);
        
    }
    public function show($id){
        $pizzas=pizzas::findOrFail($id);
        return view('pizza.show',['pizzas' => $pizzas]);
    } 
    public function store(){
        $pizzas=new pizzas();//new batch
        $pizzas->type=request('type');//key 
        $pizzas->base=request('base');
        $pizzas->name=request('name');
        $pizzas->toppings=request('toppings');
        $pizzas->save();
        return redirect('/')->with('msg','thanks for your ordering!');
    } 
    public function create(){
        return view('pizza.create');
    }   
    public function delete($id){
        $pizzas=pizzas::findOrFail($id);
        $pizzas->delete();
        return redirect('/pizza');
    } 
        // $pizza=[
        //     "type"=>['Chicago Deep-Dish',
        //     'New York-style',
        //     'Detroit-style'],
        //     'base'=>['pineapple','cheese','seafood'],
        //     'price'=>[20,10,15],
        //     'name'=>request('name') //url pass var
        // ];
}
