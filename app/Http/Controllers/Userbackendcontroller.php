<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class Userbackendcontroller extends Controller
{
    public function index()
    {
        $users=  User::all();
       return view('backend.user.index', compact('users'));
    }
    public function destroy($id)
    {
      $users = User::find($id);
        $users->delete();
        return redirect()->route('user.index')->with(['message'=> 'Successfully deleted!!']);
    }
   

}
