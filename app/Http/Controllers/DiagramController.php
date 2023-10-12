<?php

namespace App\Http\Controllers;

use App\Models\Diagram;
use Illuminate\Http\Request;

class DiagramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = auth()->user()->diagrams->sortByDesc('created_at');
        return view('diagrams.index', [
            "diagrams" => $data,
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
        // dd($diagram);
        return view('diagrams.show', [
            "diagram" => Diagram::findOrFail($diagram->id),
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
    public function update(Request $request, string $id)
    {
        $diagram = Diagram::findOrFail($id);
        $diagram->update([
            "content" => $request->content ?? $diagram->content,
        ]);
        return response()->json([
            "message" => "success",
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
