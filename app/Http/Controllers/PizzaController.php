<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza;

class PizzaController extends Controller
{
    public function index(){

        $pizzas = Pizza::all();

        return view('pizzas', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
