<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Food;
class PagesController extends Controller
{
    //


    public function getHome(){
      return view('pages.home');
    }


    public function getMenu(){
        $foods = Food::all();
        return view('pages.menu')->with('foods',$foods);

    }


    public function getContact(){
      return view('pages.contact');
    }

    
}
