<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DestinationDetailController extends Controller
{
    public function index(){
        return View ('pages.destination-detail');
    }
}
