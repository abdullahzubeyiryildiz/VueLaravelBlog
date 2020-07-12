<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      LaraFlash::add()->content('Hello World')->priority(6)->type('Info');
      LaraFlash::Success('Yay it Worked!');
      flash('Yay it Worked!', ['priority' => 100, 'type'  => 'success']);
      LaraFlash::danger('Oops Something went wrong!');
      LaraFlash::snackbar('click to continue')->priority(3);
      return view('home');
  }
}
