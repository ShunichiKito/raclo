<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    //
    public function edit($id)
    {
        
         $user = User::find($id);
        if (\Auth::id() == $user->id){

        return view('users.u_edit', [
            'user' => $user,
        ]);
          } else {
             return redirect('/');
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
