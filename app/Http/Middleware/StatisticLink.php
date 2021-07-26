<?php

namespace App\Http\Middleware;

use App\Models\Link;
use App\Models\Statistic;
use Closure;
use Illuminate\Http\Request;

class StatisticLink
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $link = Link::findOrFailForHash($request->hash);
        if($link) {
            Statistic::create([
                'link_id' => $link->id,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);
        }
        return $next($request);
    }
}
