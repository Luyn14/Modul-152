<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function logged()
    {

        return view('/home', [

            'user' => auth()->user(),
            'albums' => Album::all(),


        ]);
    }

    public function profil()
    {

        return view('/profil', [

            'user' => auth()->user(),
            'albums' => Album::all(),


        ]);
    }

    public function login()
    {
        return view('/welcome', [
            'user' => auth()->user(),
        ]);
    }


    public function admin()
    {

        return view('/admin', [

            'user' => auth()->user(),
            'albums' => Album::all(),
            'users' => User::all(),

        ]);
    }

    public function editUser(int $userId)
    {


        return view('edit_user', [

            'user' => User::find($userId),

        ]);
    }

    //Update User
    public function updateUser(Request $request, int $userId)
    {
        $data = User::find($userId);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/home');
    }

    public function deleteUser(Request $request, int $userId)
    {
        $user = User::find($userId);

        $user->delete();

        return redirect('/home');
    }
}
