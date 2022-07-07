<?php

namespace App\Http\Middleware;

use App\Models\Image;
use Closure;
use Illuminate\Http\Request;

class DeleteImage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $imageId = $request->route()->parameter('imageId');

        $image = Image::find($imageId);

        $imageUserId = $image->user_id;

        $userL = auth()->user();

        if ($userL->id == $imageUserId || $userL->id == 1) {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }
}
