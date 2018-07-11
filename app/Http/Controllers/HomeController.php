<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}

    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [ 
    //         'content' => 'required|max:191',
    //         'status'=> 'required|max:10',
    //     ]);


    //     $user = User::find($id);
    //      if (\Auth::check()){
        
    //     $user->content = $request->content;
    //     $user->status = $request->status;
    //     $user->save();
    //      return redirect('/');
    //      }else{

    //          return redirect('/');
    //     }
    // }