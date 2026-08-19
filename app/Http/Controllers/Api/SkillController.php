<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;

class SkillController extends Controller
{
    public function index(): JsonResponse
    {
        $skills = Skill::orderBy('order')->orderBy('category')->get();

        $grouped = $skills->groupBy('category');

        return response()->json([
            'data' => $skills,
            'grouped' => $grouped,
        ]);
    }
}
