<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class api_controller extends Controller
{
    public function index()
    {
        
        return response()->json(['message' => 'hello world']);
    }
}
