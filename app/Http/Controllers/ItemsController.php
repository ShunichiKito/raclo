<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\U_Item;
use App\Order;
use App\Coordinated_set;
use App\Ordered_item;

class ItemsController extends Controller
{
    public function index()
    {
        $data = [];
            if (\Auth::check()) {
                
                $user = \Auth::user();
                $items = $user->items()->orderBy('created_at', 'desc')->paginate(20);
                
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
        
        $orders=['orders'=>$orders];
        return view('stylists/s_request_lists', $orders);
        
    }
     
    public function s_workspace($orderid) {
        $order=Order::where('id', $orderid)->first();
        $user= User::where('id',$order->user_id)->first();
        $stylist= \Auth::user();
        // $images=array();
        // $images= U_item::where('user_name', $user->name)->get();
        $my_orderimages= Ordered_item::where('order_id',$order->id)->where('myitems_check', 'on')->get();
        $new_orderimages= Ordered_item::where('order_id',$order->id)->where('newitems_check', 'on')->get();
        $my_orderimages_array=array();
        $new_orderimages_array=array();
        foreach($my_orderimages as $my_orderimage){
            $my_orderimages_array[]= $my_orderimage->uitem_id;
        }
        foreach($new_orderimages as $new_orderimage){
            $new_orderimages_array[]= $new_orderimage->uitem_id;
        }
       $my_images =  U_item::whereIn('id', $my_orderimages_array)->get();
        $new_images =  U_item::whereIn('id', $new_orderimages_array)->get();
        
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
 
        $allowed  = ['0','1','2','3','4','5','6','7'];
        for($set=1;$set<=count($request->path);$set++) {
    
    //         print_r($request->path[$set]);
    //         print(count(array_filter($request->path[$set], function ($key) use ($allowed) {return in_array($key, $allowed);
    // }, ARRAY_FILTER_USE_KEY)));
    //         return;
            
            $co_set=new Coordinated_set;
            for($cloth=1;$cloth<=count(array_filter($request->path[$set], function ($key) use ($allowed) {return in_array($key, $allowed);
    }, ARRAY_FILTER_USE_KEY));$cloth++) {
                $item_temp="item".$cloth;
                $co_set->$item_temp= $request->path[$set][$cloth-1];
                if(isset($request->path[$set][10+$cloth-1])){
                    $itempath_temp="item".$cloth."_path";
                    $co_set->$itempath_temp= $request->path[$set][10+$cloth-1];
                }
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
    
