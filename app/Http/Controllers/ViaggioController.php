<?php

namespace App\Http\Controllers;

use App\Viaggio;
use Illuminate\Http\Request;

class ViaggioController extends Controller
{
    public function index(){
        $viaggio = Viaggio::select('*');
        return view('viaggi', compact('viaggi'));
    }
}
