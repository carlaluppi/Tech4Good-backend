<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPruebaController extends Controller
{
    public function index()
    {
        $path = public_path('dataset.json');
        $data = file_get_contents($path);
        
        return response()->json(json_decode($data, true));
    }
}