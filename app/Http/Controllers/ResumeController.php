<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        return view('accueil');
       }

    public function curriculum(){
        return view('curriculum');
       }


    public function projets(){
        return view('projets');
       }

    public function contact(){
        return view('contact');
       }

      public function contactForm(Request $request){
        return view('contact', ['data' => $request]);
}
}
