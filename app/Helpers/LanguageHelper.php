<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use LaravelLocalization;
use Modules\Cms\app\Models\Language;

class LanguageHelper
{

    public static function getCurrentLanguage()
    {
        // If the locale has changed, clear the cache
        if (Cache::has('current_language') && Cache::get('current_language')->code !== App::getLocale()) {
            Cache::forget('current_language');
        }

        // Get or store current language
        $value = Cache::rememberForever('current_language', function () {

            // Find selected language
            $language = Language::where('code', App::getLocale())->where('active', true)->first();

            // If the selected language wasn't found
            /*
            if ($language === null) {
                // Find fallback language
                $fallbackLocalCode = config('app.fallback_locale');
                $language = Language::where('code', $fallbackLocalCode)->where('active', true)->first();
                // If the fallback language wasn't found
                if ($language === null) {
                    // Get data from package laravel-localization
                    $supportedLocales = LaravelLocalization::getSupportedLocales();
                    if (array_key_exists($fallbackLocalCode, $supportedLocales)) {
                        // Create language
                        $currentLocale = $supportedLocales[$fallbackLocalCode];
                        $language = Language::create(['name' => $currentLocale['native'], 'code' => $fallbackLocalCode, 'default' => 1, 'active' => 1, 'created_by' => 1]);
                        // Set locale
                        App::setLocale($fallbackLocalCode);
                        LaravelLocalization::setLocale($fallbackLocalCode);
                    }
                }
            }
            return $language;
            */
        });

        return $value->id;
    }

}
