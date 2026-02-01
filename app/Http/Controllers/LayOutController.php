<?php

namespace App\Http\Controllers;
use App\Models\Question;

use Illuminate\Http\Request;

class LayOutController extends Controller
{
   
    public function show()
    {
        return view('questions.layOut');

    }
    public function html()
    {
        return view('questions.html');

    }
    public function shows()
    {
        return view('questions.java');
    }
    public function view()
    {
        return view('questions.laravels');
    }
    public function showing()
    {
        return view('questions.php');
    }
    public function interview()
    {
        return view('questions.interview');
    }}