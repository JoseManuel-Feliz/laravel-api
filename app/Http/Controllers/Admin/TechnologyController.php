<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology ::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technology = new Technology();
        return view('admin.technologies.create', compact('technology'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required']
        ]);

        $technology = Technology::create($data);
    return redirect()->route('admin.technologies.index', compact('technologies'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $technology = Technology::findOrFail($id);

    return view('admin.technologies.show', compact('technologies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $technology = Technology::findOrFail($id);

    return view('admin.technologies.edit', compact('technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => ['required']
        ]);

        $technology = Technology::findOrFail($id);
        $technology->update($data);

    return redirect()->route('admin.technologies.show', compact('technologies'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $technology = Technology::findOrFail($id);
        $technology->delete();

        return redirect()->route('admin.technologies.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}