<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('status', 'status.projects', 'technologies', 'technologies.projects', 'type', 'type.projects')->orderBy('created_at', 'DESC')->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $projects,
        ]);
    }
}
