<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        $name = "Carlos";
        $age = 29;

        $arr = [10,20,30,40,50];

        $names = ["Carlos", "Maria", "João", "Saulo"];

        return view("welcome",
            [
                'name' => $name,
                'age' => $age,
                'work' => 'Developer',
                'arr' => $arr,
                'names' => $names
            ]);
    }

    public function create() {
        return view('events.create');
    }
}
