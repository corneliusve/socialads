<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Projects;
use Auth;

class profileController extends Controller
{
    public function index($slug)
    {
        $user = User::where('slug', $slug)->first();
        $projects = Projects::where('user_id', $user->id)->get();

        return view('dashboard.index')->with('user', $user)->with('projects', $projects);
    }

    public function edit()
    {
        return view('profiles.edit')->with('info', Auth::user()->profile);
    }

    public function update(Request $r)
    {


        $this->validate($r, [
            'location' => 'required',
            'about' => 'required|max:255'
        ]);

        Auth::user()->profile()->update([
            'location' => $r->location,
            'about' => $r->about
        ]);

       if($r->hasFile('avatar'))
        {
            Auth::user()->update([
                'avatar' => $r->avatar->store('public/avatars')
            ]);
        }

       return redirect()->back();
    }


}
