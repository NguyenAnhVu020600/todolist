<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todolists = Todolist::all();
        
        return response() -> json($todolists);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todolists.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'deadline' => 'required',
            'note' => 'required',
            'id_category' => 'required',
        ]);

        $todolist = new Todolist;
        $todolist->content = $request->content;
        $todolist->deadline = $request->deadline;
        $todolist->note = $request->note;
        $todolist->id_category = $request->id_category;
        $todolist->save();

        return response()->json([
            'success' => true,
            'message' => 'Todolist created successfully.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todolist = Todolist::findOrFail($id);

        return response()->json($todolist);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todolist = Todolist::findOrFail($id);

        return view('todolists.edit', compact('todolist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'content' => 'required',
            'deadline' => 'required',
            'note' => 'required',
            'id_category' => 'required',
        ]);

        $todolist = Todolist::findOrFail($id);
        $todolist->content = $request->content;
        $todolist->deadline = $request->deadline;
        $todolist->note = $request->note;
        $todolist->id_category = $request->id_category;
        $todolist->save();

        return response()->json([
            'success' => true,
            'message' => 'Todolist updated successfully.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todolist = Todolist::findOrFail($id);
        $todolist->delete();

        return response()->json([
            'success' => true,
            'message' => 'Todolist deleted successfully.',
        ]);
    }
}
