<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    // function showForm(){
    //     return view('showgreetings');
    // }
    // function resultGreetings(){
    //     return view('tugas');
    // }
    function ets(){
        return view('htmlets');
    }
    function formtugasphp(){
        return view('htmltugasphpform');
    }
    function hasiltugasphp(){
        return view('htmltugasphphasil');
    }
}
