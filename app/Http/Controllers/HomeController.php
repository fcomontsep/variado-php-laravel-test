<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexar() {
        return "Welcome to the homepage";
    }
}
