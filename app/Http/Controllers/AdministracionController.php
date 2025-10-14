<?php

namespace App\Http\Controllers;
use App\Models\User;

class AdministracionController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        
        return view('administracion', compact('usuarios'));
    }
}