<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\U_Item;
use App\Order;
use App\Coordinated_set;

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
        $images= U_item::where('user_name', $user->name)->get();
        $my_images =  U_item::where('myitems_check', 'on')->get();
        $new_images = U_item::where('newitems_check', 'on')->get();
        
        $all_images=[
            'order'=>$order,
            'user' => $user,
            'my_images' => $my_images,
            'new_images' => $new_images,
            //とりあえず空のキーワード送る（ブランドアベニュー検索）
            'keyword'=>' '
        ];
        
        return view('stylists/s_workspace',$all_images);
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
        
     public function s_saveco(Request $request) {
        
        // print_r(count($request->path));
        // return;
        for($set=1;$set<=count($request->path);$set++) {
            $co_set=new Coordinated_set;
            for($cloth=1;$cloth<=count($request->path[$set]);$cloth++) {
                $item_temp="item".$cloth;
                $co_set->$item_temp= $request->path[$set][$cloth-1];
            }
            $co_set->stylist_id = \Auth::user()->id;
            $co_set->user_id = $request->user_id;
            $co_set->order_id = $request->order_id;
            $co_set->save();
        }
        
        $order= Order::where('id',$request->order_id)->first();
        $order->state="done";
        $order->save();
        
        return redirect('/s_request_lists');
    }
    // public function search() {
    //     $keyword= request()->keyword;
    //     $items=[];
    //     if ($keyword) {
    //         $client = new \RakutenRws_Client();
    //         $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));

    //         $rws_response = $client->execute('IchibaItemSearch', [
    //             'keyword' => $keyword,
    //             'imageFlag' => 1,
    //             'hits' => 20,
    //         ]);
    // }
        
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


    

    //         $rws_response = $client->execute('IchibaItemSearch', [
    //             'keyword' => $keyword,
    //             'imageFlag' => 1,
    //             'hits' => 20,
    //         ]);
    // }
        
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


    

    //         $rws_response = $client->execute('IchibaItemSearch', [
    //             'keyword' => $keyword,
    //             'imageFlag' => 1,
    //             'hits' => 20,
    //         ]);
    // }
        
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
    
