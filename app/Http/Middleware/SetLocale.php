<?php

namespace App\Http\Middleware;

use Locale;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( Session::has('locale') ) {
            App::setLocale(Session::get('locale'));
        }
        else {
            $locale = $this->getAcceptedLocale($request);

            if( in_array($locale, ['es', 'pt']) ) {
                App::setLocale($locale);
            }
            else {
                App::setLocale('es');
            }
        }

        return $next($request);
    }

    protected function getAcceptedLocale(&$request)
    {
        // Scrape available locales from resources/lang/
        $available = Cache::rememberForever('resources.languages', function () {

            return array_diff(scandir(resource_path('lang')), ['..', '.']);

        });

        // Standardise to hyphened separator for native use in javascript locale formatters.
        $preferences = array_map(function (&$locale) {

            return str_replace('_','-', $locale);

        }, $request->getLanguages());

        # Exact match a language variant first or main language if listed in user preference.
        foreach ($preferences AS $preference) {

            # Return match else try users next preference.

            if (in_array($preference, $available))
                return $preference;
        }


        $user = $request->user();

        // If is loaded user and has locale preference, prepend choice to browsers locale preferences list.
        if($user && !empty($user->locale))
            array_unshift($preferences, $user->locale);

        reset($preferences);

        # No exact match found, Perform a Loose match for a main origin language.
        foreach ($preferences AS $preference) {

            # Find a close match for current preference.

            $preference = Locale::lookup($available, $preference);

            if (!empty($preference))
                return $preference;
        }

        # No language preference found, return config default or English if not set.
        return config('app.locale', 'es');
    }
}
