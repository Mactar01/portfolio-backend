<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = BlogPost::where('published', true)
            ->orderByDesc('published_at');

        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        $posts = $query->get(['id', 'title', 'slug', 'excerpt', 'thumbnail',
            'category', 'tags', 'reading_time', 'views', 'published_at']);

        return response()->json(['data' => $posts]);
    }

    public function show(string $slug): JsonResponse
    {
        $post = BlogPost::where('slug', $slug)->where('published', true)->firstOrFail();

        // Increment views
        $post->increment('views');

        return response()->json(['data' => $post]);
    }
}
