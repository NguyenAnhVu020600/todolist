<?php

namespace App\Http\Controllers;

use App\Models\Sidequest;
use Illuminate\Http\Request;

class SidequestsController extends Controller
{
    public function index()
    {
        $sidequests = Sidequest::all();

        return response() -> json($sidequests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sidequests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'id_list' => 'required',
        ]);

        $sidequest = new Sidequest;
        $sidequest->content = $request->content;
        $sidequest->id_list = $request->id_list;
        $sidequest->save();

        return response()->json([
            'success' => true,
            'message' => 'Sidequest deleted successfully.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sidequest = Sidequest::findOrFail($id);

        return response()->json($sidequest);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sidequest = Sidequest::findOrFail($id);

        return view('sidequest.edit', compact('sidequest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'content' => 'required',
            'id_list' => 'required',
        ]);

        $sidequest = Sidequest::findOrFail($id);
        $sidequest->content = $request->content;
        $sidequest->id_list = $request->id_list;
        $sidequest->save();

        return response()->json([
            'success' => true,
            'message' => 'Sidequest deleted successfully.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sidequest = Sidequest::findOrFail($id);
        $sidequest->delete();

        return response()->json([
            'success' => true,
            'message' => 'Sidequest deleted successfully.',
        ]);
    }
}
