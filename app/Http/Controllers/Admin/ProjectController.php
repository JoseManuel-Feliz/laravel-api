<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Models\Type;
use App\Models\Project;
use App\Models\Technology;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();

        $technologies = Technology::all();
        $statuses = Status::all();
        $types = Type::all();
        return view('admin.projects.create', compact('project', 'technologies', 'statuses', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $project = Project::create($data);

        if (isset($data["technologies"])) {
            $project->technologies()->sync($data["technologies"]);
        } else {
            $project->technologies()->detach();
        };

        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);

        $technologies = Technology::all();
        $statuses = Status::all();
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'technologies', 'statuses', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, string $id)
    {
        $data = $request->validated();
        $project = Project::findOrFail($id);

        if (isset($data["technologies"])) {
            $project->technologies()->sync($data["technologies"]);
        } else {
            $project->technologies()->detach();
        };

        $project->update($data);

        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}