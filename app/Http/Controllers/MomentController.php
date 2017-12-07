<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moment;
use App\User;
use Illuminate\Support\Facades\Auth;

class MomentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view ('add');
    }

    public function update(Request $request) {
        if (trim($request->tag) != '') {
            $user = User::where('username', '=', $request->tag)->get()->first();
            if (!$user) {
                return redirect('add')->with([
                    'status' => 'Username does not exist',
                    'oldTitle' => $request->title,
                    'oldBody' => $request->body
                ]);
            } else if ($user->username == User::find(Auth::id())->username) {
                return redirect('add')->with([
                    'status' => 'You cannot tag yourself',
                    'oldTitle' => $request->title,
                    'oldBody' => $request->body
                ]);
            }
        }
        $tagId = trim($request->tag) != ''? User::where('username', '=', $request->tag)->get()->first()->id : null;

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        Moment::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'body' => $request->body,
            'private' => $request->private == 'true'? 1 : 0,
            'tag_id' => $tagId,
        ]);
        return redirect('home');
    }
}
