<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\U_item;
use App\Order;
use App\Stylist_profile_image;

// class UsersController extends Controller
// {
//     public function show($id)
//     {
//         $user = User::find($id);
//         $items = \DB::table('U_items')->join('users', 'u_items.user_name', '=', 'users.name')->select('u_items.file_path')->where('u_items.user_name', $user->name)->distinct()->paginate(10);

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
        // $items=array();
        // $items = \DB::table('stylist_profile_images')->join('users', 'stylist_profile_images.user_name', '=', 'users.name')->select('stylist_profile_images.file_path', 'stylist_profile_images.user_name', 'users.style')->distinct()->paginate(100);
        $stylists= User::where('user_type', '2')->get();
               return view('users/u_stylist_lists')->with('stylists',$stylists);
            } else{ 
                return redirect('/');
            }
    }
    public function u_cooindex()
    {   
        $orders=Order::where('user_id', \Auth::user()->id)->where('state','done')->get();
        return view('users/u_complete_coord')->with('orders',$orders);
            
    }
    public function u_cooshow($orderid) {
        
        $order= Order::where('id',$orderid);
         return view('users/u_coord_show')->with('order',$order);
    }
    
    
    public function s_online_index()
    {   
        if (\Auth::user()->user_type == 1){
        $items=array();
        $items = \DB::table('stylist_profile_images')->join('users', 'stylist_profile_images.user_name', '=', 'users.name')->select('stylist_profile_images.file_path', 'stylist_profile_images.user_name', 'users.style')->distinct()->paginate(100);
        
               return view('users/u_onlinestylist_lists')->with('items',$items);
                    
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
                  $s_profile_image= Stylist_profile_image::where('user_name',\Auth::user()->name)->first();
                  return view('stylists.s_edit', [
                    'user' => $user,
                    'item' => $s_profile_image,
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
                'rank'=> 'required|max:10',
                // 'file'=>'required',
                ]);
            
                $user->age = $request->age;
                $user->gender = $request->gender;
                $user->background = $request->background;
                $user->style = $request->style;
                $user->rank = $request->rank;
                $user->save();
                
                if($request->file('file')){
                    $filename = $request->file('file')->store('public/s_profile_image');
                    if(Stylist_profile_image::where('user_name',\Auth::user()->name)->first()) {
                        $s_profile_image=Stylist_profile_image::where('user_name',\Auth::user()->name)->first();
                        $s_profile_image->file_path = basename($filename);
                        $s_profile_image->save();
                    }else {
                        $s_profile_image= new Stylist_profile_image;
                        $s_profile_image->user_name= \Auth::user()->name;
                        $s_profile_image->file_path = basename($filename);
                        $s_profile_image->save();
                    }
                }    
                return redirect('/home');

         }else{
                  
            return redirect('/');
         }
                  
        }
    }
    
    public function item_register(Request $request)
    {

        $myitems=array();
        $myitems = $request->myitem;
        if (is_array($myitems) || is_object($myitems))
        {
        foreach($myitems as $myitem) {
            // $items = \DB::table('u_items')->join('users', 'u_items.user_name', '=', 'users.name')->select('u_items.file_path')->where('u_items.user_name', $user->name)->distinct()->paginate(10);
             $createitem = U_item::where('file_path',$myitem)->first();
             $createitem->myitems_check="on";
             $createitem->save();
             
        }}
       
        $newitems=array();
        $newitems = $request->newitem;
        if (is_array($newitems) || is_object($newitems))
        {
        foreach($newitems as $newitem) {
            // $items = \DB::table('u_items')->join('users', 'u_items.user_name', '=', 'users.name')->select('u_items.file_path')->where('u_items.user_name', $user->name)->distinct()->paginate(10);
             $createitem = U_item::where('file_path',$newitem)->first();
             $createitem->newitems_check="on";
             $createitem->save();
        }}
    
        $nocheckmyitems = U_item::whereNotIn('file_path', $myitems)->get();
        foreach($nocheckmyitems as $nocheckmyitem) {
            $nocheckmyitem->myitems_check="off";
            $nocheckmyitem->save();
        }
        
         $nochecknewitems = U_item::whereNotIn('file_path', $newitems)->get();
        foreach($nochecknewitems as $nochecknewitem) {
            $nochecknewitem->newitems_check="off";
            $nochecknewitem->save();
        }
        
        
        if(Order::where("suspend", "on")->first()){
            $order=Order::where("suspend", "on")->first();
            $order->myitems_conumber=$request->myitems_conumber;
            $order->newitems_conumber=$request->newitems_conumber;
            $order->save();
        }else{
            $order = new Order;
            $order->user_id= \Auth::id();
            $order->myitems_conumber=$request->myitems_conumber;
            $order->newitems_conumber=$request->newitems_conumber;
            $order->suspend="on";
            $order->save();
        }    
        
        return redirect('/ordercomp');

    }
    
     public function u_ordercomp() {
          $order = Order::where("suspend", "on")->first();
        if($order->stylist_id and (U_item::where('myitems-check','on') or U_item::where('newitems-check','on'))) {
            
        $order->suspend="off";
        $order->state="untouched";
        $order->save();
        } else {
             print("Stylist or items are not chosen!!");
             return redirect('/ordercomp');
        }
       

        return redirect('/home');
    }
    
     public function u_choosestylist($user_name) {
        if(Order::where("suspend", "on")->first()){
            $order=Order::where("suspend", "on")->first();
            $order->stylist_id= User::where("name",$user_name)->first()->id;
            $order->save();
        }else{
            $order = new Order;
            $order->stylist_id= User::where("name",$user_name)->first()->id;
            $order->suspend="on";
            $order->save();
        }    
        return redirect('/ordercomp');
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

// //     }
    
// // }


      

