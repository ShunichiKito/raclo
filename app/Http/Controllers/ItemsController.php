<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
