<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function download(){
        return View('LAYOUTS.kyebPageExt');
    }

    public function ask(){
        return View('welcome');
    }
}