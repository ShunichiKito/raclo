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
        $user = \Auth::user();
        $items=array();
        $items = \DB::table('u_items')->join('users', 'u_items.user_name', '=', 'users.name')->select('u_items.file_path')->where('u_items.user_name', $user->name)->distinct()->paginate(10);
        
            if (\Auth::user()->user_type == 1){ 
            
               return view('users/u_home')->with('items',$items);
                    
            } elseif(\Auth::user()->user_type == 2)  { 
               return view('stylists/s_home')->with('items',$items);
                   
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