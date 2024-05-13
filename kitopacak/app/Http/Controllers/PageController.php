<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function Home(){
            return view('Home');
        }
   
        public function About(){
            return view('About');
        }
   
        public function Contact(){
            return view('Contact');
        }
}
