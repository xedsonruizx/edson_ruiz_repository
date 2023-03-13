<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function me(){
        return view ('secciones.about_me',[
            "page" => 'me'
        ]);
    }
    public function proyects(){
        return view ('secciones.my_proyects',[
            "page" => 'proyects'
        ]);
    }
    public function academy(){
        return view ('secciones.academy',[
            "page" => 'academy'
        ]);
    }
}
