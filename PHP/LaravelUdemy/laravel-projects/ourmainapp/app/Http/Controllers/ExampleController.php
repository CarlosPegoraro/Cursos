<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        $ourName = "Carlos";
        $animals = ['Meowsalot', 'barksalot', 'Purrsloud'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catName' => 'meowati']);
    }

    public function aboutPage() {
        return '<h1>About Page!!!!!!!!!</h1><a href="/">back to home</a>';
    }
}
