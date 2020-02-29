<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
class UserController extends Controller
{
    public function addProfile(){
        $user = User::find(1);
        $profile = new Profile;
        $profile ->phone = '069617955';
        $profile ->address = 'Kompong Spue';
        $profile ->user_id = $user->id;
        $profile ->save();

        $user1 = User::find(2);
        $profile1 = new Profile;
        $profile1 ->phone = '069617955';
        $profile1 ->address = 'Preah Vihea';
        $profile1 ->user_id = $user1->id;
        $profile1 ->save();
        // $user->profile()->save($profile);
        return "get all profile";
    }
    public function showProfile(){
        $user = User::all();
        
        return $user;
    }
    public function showAllUser(){
        $users = User::all();
        return view('users.view', compact('users'));
    }
    public function showFormEdit($id){
        $users = User::find($id);
       return view('users.edit', compact('users'));
    }
    public function editUser($id, Request $request){
        $user = User::find($id);
        $user->name= $request->name;
        $user->email= $request->email;
        $user->Profile->phone= $request->phone;
        $user->Profile->address= $request->address;
        $user->save();
        return redirect('showAllUser');
    }

    
}
