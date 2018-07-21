<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\U_item;

class ItemsController extends Controller
{
    public function index()
    {
        
        $data = [];
            if (\Auth::check()) {
                
                $user = \Auth::user();
                $items = $user->items()->orderBy('created_at', 'desc')->paginate(10);
                
                $data = [
                    'user_name' => $user,
                    'items' => $items,
                ];
                
                return view('u_home', $data);
            }
            
            return view('u_home', $data);
        }

    public function s_request_receive() {
        $stylist= \Auth::user();
        $orders=array();
        $orders= Order::where('stylist_id', $stylist->id)->get();
        foreach($orders as $order) {
             $ordered_user= User::where('id', $order->user_id)->first();
             $order->name=$ordered_user->name;
        }
        $orders=['orders'=>$orders];
        return view('stylists/s_request_lists', $orders);
        
    }
     
    public function s_workspace($orderid) {
        $order=Order::where('id', $orderid)->first();
        $user= User::where('id',$order->user_id)->first();
        $stylist= \Auth::user();
        $images=array();
        $images= U_Item::where('user_name', $user->name)->get();
        $my_images =  U_Item::where('myitems_check', 'on')->get();
        $new_images = U_Item::where('newitems_check', 'on')->get();
        
        $all_images=[
            'user' => $user,
            'my_images' => $my_images,
            'new_images' => $new_images
        ];
        
        return view('stylists/s_workspace', $all_images);
    }    
    
    public function store(Request $request) {
        $this->validate($request,[
            'file'=>'required',
        ]);
        $filename = $request->file('file')->store('public/u_items');
        $u_item= new U_item;
        $u_item->user_name= \Auth::user()->name;
        $u_item->file_path = basename($filename);
        $u_item->save();
        
        return redirect('/home');
    }
        
        
    //   public function store(Request $request)
    // {

    //     $request->user()->items()->create([
    //         'id' => $request->id,
    //     ]);

    //     return redirect()->back();
    // }
    
    //  public function destroy($id)
    // {
    //     $items = \App\Item::find($id);

    //     if (\Auth::user()->id === $item->user_name) {
    //         $items->delete();
    //     }

    //     return redirect()->back();
    // }
}
