<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\U_item;
// class UsersController extends Controller
// {
//     public function show($id)
//     {
//         $user = User::find($id);
//         $items = \DB::table('u_items')->join('users', 'u_items.user_name', '=', 'users.name')->select('u_items.file_path')u->distinct()->paginate(10);

//         return view('users.u_home', [
//             'user' => $user,
//             'items' => $items,
//         ]);
//     }
// }


class UsersController extends Controller
{
    //
    
     public function s_index()
    {   
        if (\Auth::user()->user_type == 1){
        $user = \Auth::user();
        $items=array();

        $items = \DB::table('stylist_profile_images')->join('users', 'stylist_profile_images.user_name', '=', 'users.name')->select('stylist_profile_images.file_path')->distinct()->paginate(100);

               return view('users/u_stylist_lists')->with('items',$items);
                    
            } else{ 
                return redirect('/');
            }
    }
    
    
    
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
                  
            return redirect('/');
         }
                                    }
    }
    
     public function myregister(Request $request)
    {
        $myitems=array();
        $myitems = $request->item;
        foreach($myitems as $myitem) {
            // $items = \DB::table('u_items')->join('users', 'u_items.user_name', '=', 'users.name')->select('u_items.file_path')->where('u_items.user_name', $user->name)->distinct()->paginate(10);
             $createitem = U_item::where('file_path',$myitem)->first();
             $createitem->myitems_check="on";
             $createitem->save();
        }
        return register('/u_stylist_lists');
        
    }  
    
    public function newregister(Request $request)
    {
        $newitems=array();
        $newitems = $request->item;
        foreach($newitems as $newitem) {
            // $items = \DB::table('u_items')->join('users', 'u_items.user_name', '=', 'users.name')->select('u_items.file_path')->where('u_items.user_name', $user->name)->distinct()->paginate(10);
             $createitem = U_item::where('file_path',$newitem)->first();
             $createitem->newitems_check="on";
             $createitem->save();
        }
        return register('/u_stylist_lists');
        
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

