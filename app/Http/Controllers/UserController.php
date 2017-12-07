<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Moment;

class UserController extends Controller
{
    public function index($username) {

        $user = User::where('username', $username)->get()->first();

        if (!$user) {
            return redirect(404);
        }

        $moments = Moment::isPublic()->userMoments($user->id)->get();

        return view('user', compact('username'))->with(['moments' => $moments]);
    }
}
