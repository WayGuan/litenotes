<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        // method 1. use raw  sql  queries (db facade is a simplified interface for complex operations)
        DB::select('select * from users where active = ?', [1])
        // mothod 2. query builder
        // method 3. Eloquent ORM
        return view('welcome');
    } 
}
