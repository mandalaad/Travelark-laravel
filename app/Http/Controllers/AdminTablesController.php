<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTablesController extends Controller
{
    public function index(){
        return view ('pages.admin.admintables');
    }
}
