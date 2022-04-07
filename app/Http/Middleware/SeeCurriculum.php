<?php

namespace App\Http\Middleware;

use App\Models\Candidate;
use App\Models\Curriculum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeeCurriculum
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
        $candidate = Candidate::where('user_id' , Auth::user()->id)->first();
        $curriculum = Curriculum::where('user_id', $candidate->id)->first();
        if (!$curriculum) {
            return redirect()->back();
        } else {
            return $next($request);
        }
    }
}
