<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class AboutusController extends Controller
{
    public function index(){
        return View ('pages.aboutus');
    }
}
