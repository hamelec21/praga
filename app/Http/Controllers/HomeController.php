<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()->hasRole(['ADMIN'])) {

            return view('dashboard');
        } else {
            return view('resultados');
        }

    }







}
