<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($id){
        $profiles=User::find($id)->contacts->count();
        $count=User::find($id)->contacts->where('tags'=='friends')->count();
        return view('/profile')->with('profiles',$profiles)->with('count',$count);
    }
}
