<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Facades\DB;

class TrainController extends Controller
{ 
    public function index()
    {
        $currentDate = date('Y-m-d');
        
        $trains = Train::whereDate('orario_partenza', '=', $currentDate)->get();
        
        return view('homepage', ['trains' => $trains]);
    }
}

