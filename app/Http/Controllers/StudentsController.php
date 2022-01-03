<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentsController extends Controller
{
    public function show(){
        return students::all();
    }
    public function add(){
        $students=new students();
        $students->name="hamza";
        $students->city="karachi";
        $students->save();
    }
}
