<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Projects;

class projectController extends Controller
{
    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $r)
    {

        $this->validate($r, [
            'title' => 'required|string|max:30',
            'thumbnail' => 'required',
            'short_desc' => 'required|string',
            'full_desc' => 'required',
            'status' => 'required|bool'
        ]);

        Projects::create([
            'title' => $r->title,
            'thumbnail' => $r->thumbnail->store('public/projects'),
            'short_desc' => $r->short_desc,
            'desc' => $r->full_desc,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back();
    }

    public function show($id)
    {

        return view('dashboard.projects.show')->with('project', Projects::find($id));

    }


}
