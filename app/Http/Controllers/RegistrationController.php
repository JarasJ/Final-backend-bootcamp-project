<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Registration;
  use Illuminate\Foundation\Auth\AuthenticatesUsers;

  use App\User;

  class RegistrationController extends Controller
  {
    public function __construct() {
    //  $this->middleware('guest', ['except' => 'logout']);
    //  \View::share('this');

  }

  public function index() {
      return view('pages.home');
  }

  public function main() {
    if (\Auth::check()) {
      return view('pages.main');
    } else {
      return \Redirect::to('/');
    };

  }

  public function logout() {
    \Auth::logout();
    return \Redirect::to('/');
  }

  public function register(Request $request) {

    if (isset($request ->register)) {
      $registration = new Registration();

      $this->validate($request, [
        "firstname" => "required|min:3",
        "lastname" => "required|min:3",
        "email" => "required|email|unique:users",
        "password" => "required|regex:/^.*(?=.{3,})(?=.*[a-z]).*$/",
        "confirmed_password" => 'required|same:password',
      ]);

      $firstname = $request ->firstname;
      $lastname = $request ->lastname;
      $email = $request->email;
      $password = \Hash::make($request->password) ;
      $admin = 0;
      $remember_token = 0;

      $registration ->firstname = $firstname;
      $registration ->lastname = $lastname;
      $registration ->email = $email;
      $registration ->password = $password;
      $registration ->admin = $admin;
      $registration ->remember_token = $remember_token;

      $registration->save();

      return \Redirect::to('/');
      //$registration -> save();
    }
      //return \Redirect::to('/');
  }



  public function login_in(Request $request) {


    if (\Auth::attempt(['email'=> $request->email, 'password' => $request->password],true)) {
          return \Redirect::to('/main');
    }
    else {
      return redirect('/')->withErrors([
        'error' => 'These credentials do not match our records.',
    ]);

    }
  }

  public function adminVal(Request $request) {
    // $userId = \Auth::id();
    // $user = \Registration::find($userId);
    //
    // if($user->admin == 1)
    // {
    //     return \Redirect::to('/admin');
    // }
      // return \Redirect::to('/main');

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
}
