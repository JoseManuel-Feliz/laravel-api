<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::all();
        return view('admin.statuses.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = new Status();
        return view('admin.statuses.create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'project_status' => ['required']
        ]);

        $status = Status::create($data);
        return redirect()->route('admin.statuses.index', compact('status'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $status = Status::findOrFail($id);

        return view('admin.statuses.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $status = Status::findOrFail($id);

        return view('admin.statuses.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'project_status' => ['required']
        ]);

        $status = Status::findOrFail($id);
        $status->update($data);

        return redirect()->route('admin.statuses.index', compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $status = Status::findOrFail($id);
        $status->delete();

        return redirect()->route('admin.statuses.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}