<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\AddMaster;

class AdminController extends Controller
{

    public function admin() {
      $id = \Auth::id();
      $usr = User::find($id);
      if($usr->admin == 1) {
          return view('pages.admin');
      } else {
        return \Redirect::to('/main');
      }
    }

    public function add(Request $request) {
      if (isset($request ->add)) {
        $add = new Admin();

        $service = $request ->service;
        $price = $request ->price;

        $add ->service = $service;
        $add ->price = $price;

        $add ->save();

        return \Redirect::to('/admin');

       }
     }

     public function addmasters(Request $request) {
       if (isset($request ->submit)) {
         $add = new AddMaster();

         $firstname = $request->firstname;
         $lastname = $request->lastname;

         $add ->firstname = $firstname;
         $add ->lastname = $lastname;

         $add ->save();

         return \Redirect::to('/admin');
       }


     }
}
