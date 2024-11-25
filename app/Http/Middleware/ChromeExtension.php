<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChromeExtension
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::select(['name', 'email', 'id', 'extension_token'])
            ->where(
                'extension_token',
                $request->input('extension_token', 'undefined')
            )
            ->first();

        $token = $user?->extension_token ?? null;

        info($token);

        return $next($request)
            ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT')
            ->header('Access-Control-Allow-Credentials', 'true')
            ->header('Access-Control-Allow-Origin', 'https://www.thegioididong.com')
            ->header('Access-Control-Allow-Credentials', 'true')
            ->header('Access-Control-Allow-Headers', 'X-CSRF-Token, Authorization')
            
        ;
    }
}
