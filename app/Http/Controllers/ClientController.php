<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pants;
class ClientController extends Controller
{
    public function index()
    {
        
        return view('client.index');
    }
}
