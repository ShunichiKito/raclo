<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
