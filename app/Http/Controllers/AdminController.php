<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;

class AdminController extends Controller
{
  public function adminVal(Request $request) {

      $id = \Auth::id();
      // $id = Auth::user(); fetchins viska is userio
      $usr = User::find($id);
      if($usr->admin == 1) {
        return \Redirect::to('/admin');
      } else {
        return \Redirect::to('/main');
      }

    }

    public function admin() {
      return view('pages.admin');
    }

    public function add(Request $request) {
      if (isset($request ->add)) {
        $add = new Admin();

        $service = $request ->service;
        $price = $request ->price;

        $add ->service = $service;
        $add ->price = $price;

        $add ->save();

        return \Redirect::to('/main');

    }
  }
}
