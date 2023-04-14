<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateDetailController extends Controller
{
    public function index(){
        return view ('pages.private-detail');
    }
}
