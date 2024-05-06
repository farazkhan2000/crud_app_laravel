<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Getting User Data from DB 
    public function getUser () {
        $users = DB::table('users')
                // ->where('city', 'Edmondbury')
                // ->orderBy('name')
                ->paginate(4);

        return  view('home', ['data' => $users]);
    }

    public function singleUser (string $id) {
        $users = DB::table('users')->where('id', $id)->get();
        return view('singleUser', ['singleUserData' => $users]);
    }

    public function addUser (Request $req) {
        $user = DB::table('users')
                ->insertOrIgnore (
                    [
                        'name' => $req->username,
                        'email' => $req->email,
                        'age' => $req->age,
                        'city' => $req->city,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                );
        
                if($user) {
                    return redirect()->route('home');
                }
    }
 
    public function updateUserPage (string $id) {
        $user = DB::table('users')
                ->find($id);

        return view('updateUser', ['data' => $user]);
    }

    public function updateUser (Request $req, $id) {
        $user = DB::table('users')
                ->where('id', $id) 
                ->update([
                    'name' => $req->username,
                    'email' => $req->email,
                    'age' => $req->age,
                    'city' => $req->city,
                    'created_at' => $req->created_at,
                    'updated_at' => now()
                ]);
        if ($user) {
            return redirect()->route('home');
        }
    }

    public function deleteUser (string $id) {
        $users = DB::table('users')->where('id', $id)->delete();
        if ($users) {
            return redirect()->route('home');
        }
    }

}
