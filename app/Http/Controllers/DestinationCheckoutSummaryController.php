<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationCheckoutSummaryController extends Controller
{
    public function index(){
        return view ('pages.summarycheck');
    }
}
