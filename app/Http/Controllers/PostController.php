<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return "Aquí se mostrarán todos los posts";
    }
    public function crear() {
        return "Formulario va aquí";
    }
}
