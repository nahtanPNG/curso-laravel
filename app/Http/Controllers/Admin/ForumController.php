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

    public function show(string|int $id)
    {
        // Forum::find($id);
        // Forum::where('id', '$id')->first();
        // Forum::where('id', '=', '$id')->first();
        if (!$support = Forum::find($id)){ //Buscando a dúvida pelo ID
            return back();
        }

        return view('admin/forum/show', compact('support'));
    }

    public function create()
    {
        return view('admin/forum/create');
    }

    public function store(Request $request, Forum $forum)
    {
        $data = $request->all(); //Buscando todos os campos da requicisao 
        $data['status'] = 'active';

        $forum->create($data);
        
        return redirect()->route('forum.index');
    }

    public function edit(string|int $id)
    {
        if (!$support = Forum::where('id', $id)->first()){ //Buscando a dúvida pelo ID utilizando o método where
            return back();
        }

        return view('admin/forum/edit', compact('support'));
    }

    public function update(Request $request, string|int $id, Forum $support)
    {
        if (!$support = $support->where('id', $id)->first()){
            return back();
        }
        
        $support->update($request->only(['subject', 'body']));

        return redirect()->route('forum.index');
    }

    public function destroy(string|int $id, Forum $support)
    {
        if (!$support = Forum::find($id)){
            return back();
        }

        $support->delete();

        return redirect()->route('forum.index');
    }

}
