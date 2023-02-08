<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        // method 1. use raw  sql  queries (db facade is a simplified interface for complex operations)
        // $users = DB::select('select * from users');
        // dd($users);
        // mothod 2. query builder
        // $users = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($users);
        // method 3. Eloquent ORM
        $students = Student::all();
        dd($students);
        // return view('welcome');
    } 
}
