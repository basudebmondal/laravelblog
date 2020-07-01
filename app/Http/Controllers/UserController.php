<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        return 'i am in User Controller';
    }

    public function uploadAvatar(Request $request)
    {
        
        if ($request->hasFile('image')) {

            $fname = $request->image->getClientOriginalName();
            $user = Auth::user();
            if ($user->avatar) {
                Storage::delete('/public/images/' . $user->avatar);
            }
            $request->image->storeAs('images', $fname, 'public');
            $user->avatar = $fname;
            $user->save();
            //$request->session()->flash('message', 'Avatar uploaded!!');
            return back()->with('message', 'Avatar uploaded!!');
        }

        //$request->session()->flash('error', 'Avatar not Uploaded!!');
        return back()->with('error', 'Avatar not Uploaded!!');
        

    }
}
