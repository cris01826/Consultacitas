<?php

namespace ControlCitas\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name)
    {
        $user = \DB::table('Usuario')->where('Primer_Nombre', $name)->first();
        dd($user);
    }
}
