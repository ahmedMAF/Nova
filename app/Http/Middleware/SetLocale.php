<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('locale')) {
            $browserLocale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            $supportedLocales = ['en', 'ar'];
            $locale = in_array($browserLocale, $supportedLocales) ? $browserLocale : config('app.locale');
            session(['locale' => $locale]);
        }

        app()->setLocale(session('locale'));
        return $next($request);
    }
}
