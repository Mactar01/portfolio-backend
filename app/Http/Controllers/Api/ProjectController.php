<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Project::orderBy('order');

        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        if ($request->has('featured')) {
            $query->where('featured', true);
        }

        $projects = $query->get();

        return response()->json(['data' => $projects]);
    }

    public function show(Project $project): JsonResponse
    {
        return response()->json(['data' => $project]);
    }
}
