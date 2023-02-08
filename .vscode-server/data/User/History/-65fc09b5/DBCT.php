<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        // method 1. use raw   sql  queries
        // mothod 2. query builder
        // method 3. Eloquent ORM
        return view('welcome');
    } 
}
