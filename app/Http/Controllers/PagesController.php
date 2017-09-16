<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function getHomePage()

    {
      return view('home');
    } // endof get home page
    public function getAboutPage()

     {
       return view('about');
     } // endof get about page
     public function getContactPage()

      {
        return view('contact');
      } // endof getContactpage
      public function getSportsPage()

       {
         return view('sports');
       } // endof getSports page
}
