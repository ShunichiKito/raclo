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
        $user = \Auth::user()->id;
            if (\Auth::user()->user_type == 1){ 
            
               return view('users/u_home');
                    
            } elseif(\Auth::user()->user_type == 2)  { 
               return view('stylists/s_home');
                   
            } else{ 
                return redirect('/');
            }
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