<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function detail(Request $request)
    {

        return view(
            'register',

            [
                'user' => auth()->user()
            ]

        );
    }

    public function addCrew(Request $request)
    {
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('/home');
    }
}
