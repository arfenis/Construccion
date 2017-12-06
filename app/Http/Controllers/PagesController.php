<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');

    }

    /*public function tour(){
        return view('pages.tours.tour');
    }*/

    public function adminpage(){


                return view('pages.admin.login');


    }

    public function about(){
        
        
                        return view('pages.about');
        
        
            }



}
