<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type = new Type();
        return view('admin.types.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'project_type' => ['required']
        ]);

        $type = Type::create($data);
        return redirect()->route('admin.types.index', compact('type'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $type = Type::findOrFail($id);

        return view('admin.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $type = Type::findOrFail($id);

        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'project_type' => ['required']
        ]);

        $type = Type::findOrFail($id);
        $type->update($data);

        return redirect()->route('admin.types.index', compact('type'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        return redirect()->route('admin.types.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}