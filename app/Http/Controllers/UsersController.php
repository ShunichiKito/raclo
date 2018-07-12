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
        $user = User::find($id);
        if (\Auth::id() == $user->id){
            if (\Auth::user()->user_type == 1){
                $this->validate($request, [ 
                'age' => 'required|max:191',
                'gender'=> 'required|max:10',
                ]);
    
                $user->age = $request->age;
                $user->gender = $request->gender;
                $user->save();
                return redirect('/home');
         
         } elseif (\Auth::user()->user_type == 2){
                $this->validate($request, [ 
                'age' => 'required|max:191',
                'gender'=> 'required|max:10',
                'background'=> 'required|max:400',
                'style'=> 'required|max:191',
                ]);
            
                $user->age = $request->age;
                $user->gender = $request->gender;
                $user->background = $request->background;
                $user->style = $request->style;
                $user->save();
                return redirect('/home');

         }else{
                  
            return redirect('/home');
         }
                                    }
    }
    
}
