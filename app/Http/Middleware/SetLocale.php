<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
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
        // Prioritas: session -> cookie -> accept-language header -> config
        $locale = Session::get('locale');

        if (! $locale) {
            $locale = Cookie::get('locale');
        }

        if (! $locale) {
            // fallback dari header browser (opsional)
            $header = $request->server('HTTP_ACCEPT_LANGUAGE');
            if ($header) {
                $locale = substr($header, 0, 2);
            }
        }

        // validasi list bahasa yang diijinkan
        $allowed = ['id', 'en'];
        if (! in_array($locale, $allowed)) {
            $locale = config('app.locale'); // default dari config/app.php (biasanya 'id')
        }

        App::setLocale($locale);

        return $next($request);
    }
}