<?php

namespace App\Http\Controllers;

use App\Models\Diagram;
use App\Models\Diagrams_guests;
use Illuminate\Http\Request;

class DiagramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagrams = auth()->user()->diagrams->sortByDesc('created_at');
        $diagrams_g = auth()->user()->diagrams_guest->sortByDesc('created_at');
        return view('diagrams.index', [
            "diagrams" => $diagrams,
            "diagrams_g" => $diagrams_g,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diagrams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:3|max:30",
            "description" => "required|max:255",
        ]);

        Diagram::create([
            "name" => $request->name,
            "description" => $request->description,
            "host_id" => auth()->user()->id,
        ]);

        return redirect()->route('diagram.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Diagram $diagram)
    {
        $guests = $diagram->guests;
        return view('diagrams.show', [
            "diagram" => Diagram::findOrFail($diagram->id),
            "guests" => $guests,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $diagram = Diagram::findOrFail($request->diagram_id);
        $diagram->update([
            "content" => $request->diagram_content
        ]);

        return response()->json([
            "message" => "success",
        ]);
    }

    public function invite(Request $request)
    {
        Diagrams_guests::create([
            "diagram_id" => $request->diagram_id,
            "guest_email" => $request->guest_email,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
