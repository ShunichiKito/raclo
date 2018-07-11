<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $items = \DB::table('u_items')->join('users', 'u_items.user_name', '=', 'users.name')->select('u_items.file_path')->where('u_items.user_name', $user->name)->distinct()->paginate(10);

        return view('users.u_home', [
            'user' => $user,
            'items' => $items,
        ]);
    }
}
=======
use App\User;

class UsersController extends Controller
{
    //
    public function edit($id)
    {
         $user = User::find($id);
        if (\Auth::id() == $user->id){
             if (\Auth::user()->user_type == 1){

                return view('users.u_edit', [
                    'user' => $user,
                ]);
             } elseif(\Auth::user()->user_type == 2)  {
                  return view('stylists.s_edit', [
                    'user' => $user,
                ]);
            } else{
                  
                     return redirect('/');
             }
        }    
        
        
    }
    
     public function update(Request $request, $id)
    {
        $this->validate($request, [ 
            'age' => 'required|max:191',
            'gender'=> 'required|max:10',
        ]);


        $user = User::find($id);
         if (\Auth::id() == $user->id){
        
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->save();
         return redirect('/u_home');
         }else{

             return redirect('/');
        }
    }
    
    
    
}

// public function edit($id)
//     {
        
//          $user = User::find($id);
//         if (\Auth::id() == $user->id)
//         if (\Auth::user_type() == 1)
//         {

//         return view('stylists.s_edit', [
//             'user' => $user,
//         ]);
//           } else {
//              return redirect('/');
//         }
        
        
//     }
    
// public function update(Request $request, $id)
//     {
//         $this->validate($request, [ 
//             'age' => 'required|max:191',
//             'gender'=> 'required|max:10',
//             'background'=> 'required|max:191',
//             'style' => 'style|max;191',
//         ]);


//         $user = User::find($id);
//          if (\Auth::id() == $user->id){
        
//         $user->age = $request->age;
//         $user->gender = $request->gender;
//         $user->background = $request->background;
//         $user->style = $request->style;
//         $user->save();
//          return redirect('/s_home');
//          }else{

//              return redirect('/');
// //         }
// //     }
    
// // }
>>>>>>> fd6c3fa2840481fa7956ee34922743618a6ee0d3
