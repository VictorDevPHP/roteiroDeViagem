<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputDados extends Controller
{
    public function input(){

        return view('inputDados')->extends('layouts.app');
    }

}
