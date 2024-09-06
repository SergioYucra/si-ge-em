<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*Ver todos los usuarios la ruta esta protegida*/
    public function index()
    {
        $user = User::all();

        return response()->json($user);
    }
}
