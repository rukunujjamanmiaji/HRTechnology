<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use Auth;
use Storage;
class UsersController extends Controller
{
    public function profile($username)
    {
        $user = User::whereUsername($username)->first();
        return view('user.profile',compact('user'));
    }
    public function changeimage(Request $request,$username)
    {
        $user = User::whereUsername($username)->first();

        if($request->hasFile('image'))
        {
            $image= $request->file('image');
            $filename= time().'.'. $image->getClientOriginalExtension();
            $user->image=$filename;
            $user->save();
            Image::make($image)->resize(300,300)->save(public_path('/uploads/avatars/'. $filename));
        }

        return view('user.profile',compact('user'));
    }

    public function changecoverimage(Request $request,$username)
    {
        $user = User::whereUsername($username)->first();

        if($request->hasFile('coverimage'))
        {
            $images= $request->file('coverimage');
            $filename= time().'.'. $images->getClientOriginalExtension();
            $user->coverimage=$filename;
            Image::make($images)->resize(800,400)->save(public_path('/uploads/covers/'. $filename));
            $user->save();

        }

        return view('user.profile',compact('user'));
    }
}
