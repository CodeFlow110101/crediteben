<?php

namespace App\Http\Middleware;

use App\Models\Blog;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class BlogValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        Blog::get()->filter(fn($blog) => Str::of($blog->title)->lower()->replace(' ', '')->toString() == Str::of($request->route('title'))->lower()->replace(' ', '')->toString())->isEmpty() && abort(404);

        return $next($request);
    }
}
