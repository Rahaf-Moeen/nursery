<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function __invoke(string $locale)
    {
        if (! in_array($locale, ['en', 'ar'])) {
            return redirect()->back(
                with('error', __('messages.invalid_locale'))
            );
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        return redirect()->back();
    }

}
