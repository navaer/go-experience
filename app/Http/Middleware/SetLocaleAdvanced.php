<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleAdvanced
{
    /**
     * Los idiomas que tu aplicación soporta.
     */
    protected array $availableLocales = ['es', 'en', 'pt'];

    /**
     * Maneja la solicitud entrante y configura el idioma apropiado.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = null;

        // 1️⃣ Si hay parámetro explícito ?lang=
        if ($request->has('lang') && in_array($request->query('lang'), $this->availableLocales)) {
            $locale = $request->query('lang');
            Session::put('locale', $locale);
            Cookie::queue(cookie('user_lang', $locale, 60 * 24 * 30)); // 30 días
        }

        // 2️⃣ Si hay idioma en sesión
        elseif (Session::has('locale') && in_array(Session::get('locale'), $this->availableLocales)) {
            $locale = Session::get('locale');
        }

        // 3️⃣ Si hay cookie persistente
        elseif ($cookieLocale = $request->cookie('user_lang')) {
            if (in_array($cookieLocale, $this->availableLocales)) {
                $locale = $cookieLocale;
                Session::put('locale', $locale);
            }
        }

        // 4️⃣ Si no hay nada, detectar idioma del navegador
        else {
            $browserLocale = $request->getPreferredLanguage($this->availableLocales);

            // Si el navegador envía "es-MX", "es-CO", etc., normalizar a minúsculas para comparar
            if (is_string($browserLocale)) {
                $browserLocale = strtolower($browserLocale);
            }

            $locale = in_array($browserLocale, $this->availableLocales)
                ? $browserLocale
                : (
                    // Si no coincide variante exacta, usar solo los primeros 2 caracteres (ej: "es")
                    in_array(substr($browserLocale ?? '', 0, 2), $this->availableLocales)
                        ? substr($browserLocale, 0, 2)
                        : config('app.fallback_locale')
                );

            Session::put('locale', $locale);
            Cookie::queue(cookie('user_lang', $locale, 60 * 24 * 30));
        }

        // 5️⃣ Aplicar idioma a la aplicación
        // Laravel usa el "locale" para buscar carpetas en resources/lang.
        // Si usamos variantes (es-mx, es-co, es-es) pero solo tenemos /lang/es,
        // debemos mapearlas al locale base para que no caiga en inglés (fallback).
        $effectiveLocale = $locale;

        if (is_string($locale) && str_starts_with($locale, 'es-')) {
            $effectiveLocale = 'es';
        }

        App::setLocale($effectiveLocale);

        // 6️⃣ 🔥 A partir de aquí, todas las rutas generadas incluirán ?lang=xx
        URL::defaults(['lang' => $locale]);

        Log::info('SetLocale ejecutado: ' . app()->getLocale());

        return $next($request);
    }
}
