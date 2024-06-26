<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{

    const LOCALES = ['en', 'uk', 'ru'];
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->getPreferredLanguage(self::LOCALES) ?? 'en';
        $locale = Session::get('locale') ?? $locale;
        Session::put('locale', $locale);
        App::setLocale($locale);
        return $next($request);
    }
}
