<?php

namespace App\Http\Middleware;

use App\Models\Album;
use Closure;
use Illuminate\Http\Request;

class DeleteAlbum
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
        $albumId = $request->route()->parameter('albumId');

        $album = Album::find($albumId);

        $albumUserId = $album->user_id;

        $userL = auth()->user();

        if ($userL->id == $albumUserId || $userL->id == 1) {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }
}
