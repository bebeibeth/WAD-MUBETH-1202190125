<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function indexhome()
    {
        return view('home');
    }
}
