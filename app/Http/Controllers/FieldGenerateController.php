<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldGenerateController extends Controller
{


    public function index(){
        return view('api.field-auto-generate');
    }
}
