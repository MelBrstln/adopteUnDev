<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\developer as Developer;

class ProfilController extends Controller
{
    public function show($id)
    {

//        dump($developer);
        $dev = Developer::all();


        return view('profil', ['dev'=>$dev, 'id' => $id]);
    }

    public function message($id){
        $dev = Developer::all()->where('id', $id);
        return view('message', ['dev' => $dev, 'id' => $id]);
    }
}
