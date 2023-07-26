<?php

namespace App\Http\Controllers;

use App\Models\Weekdayloop;
use Illuminate\Http\Request;

class WeekdayloopsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $weekdayloops = Weekdayloop::all();

        return response()->json($weekdayloops);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('weekdayloops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:weekdayloops',
        ]);

        $weekdayloop = new Weekdayloop;
        $weekdayloop->name = $request->name;
        $weekdayloop->save();

        return response()->json([
            'success' => true,
            'message' => 'Weekdayloop created successfully.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $weekdayloop = Weekdayloop::findOrFail($id);

        return response()->json($weekdayloop);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $weekdayloop = Weekdayloop::findOrFail($id);

        return response()->json($weekdayloop);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:weekdayloops,name,' . $id,
        ]);
    
        $Weekdayloop = Weekdayloop::findOrFail($id);
        $Weekdayloop->name = $request->name;
        $Weekdayloop->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Weekdayloop updated successfully.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $weekdayloop = Weekdayloop::findOrFail($id);
        $weekdayloop->delete();

        return response()->json([
            'success' => true,
            'message' => 'Weekdayloop deleted successfully.',
        ]);
    }
}
