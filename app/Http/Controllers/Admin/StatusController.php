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
        $statuses = Status::all();
        return view('admin.statuses.index', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validated();

        $status = Status::create($data);
        return redirect()->route('admin.statuses.show', compact('status'));
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
        $data = $request->validated();

        $status = Status::findOrFail($id);
        $status->update($data);

        return redirect()->route('admin.statuses.show', compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $status = Status::findOrFail($id);

        return redirect('admin.statuses.index', compact('status'));
    }
}