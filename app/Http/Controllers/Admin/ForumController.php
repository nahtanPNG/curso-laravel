<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Forum $support)
    {
        $supports = $support->all();

        return view('admin/forum/index', compact('supports'));
    }

    public function create()
    {
        return view('admin/forum/create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
