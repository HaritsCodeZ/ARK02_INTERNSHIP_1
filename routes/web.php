<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ARK02_Homepage');
});

Route::get('/career', function () {
    return view('layouts.ARK02_Careerpage');
});

Route::get('/agentapp', function () {
    return view('layouts.ARK02_Agentapplication');
});

Route::get('/aboutus', function () {
    return view('layouts.ARK02_Aboutus');
});

Route::get('/servicecarshipping', function () {
    return view('layouts.ARK02_ServicesCarShipping');
});

Route::get('/termscars', function () {
    return view('layouts.ARK02_TermsCars');
});

Route::get('/servicesdeliveryshipping', function () {
    return view('layouts.ARK02_ServicesDeliveryShipping');
});

Route::get('/servicescustomshipping', function () {
    return view('layouts.ARK02_ServicesCustomShipping');
});

Route::get('/membership', function () {
    return view('layouts.ARK02_Membershippage');
})->name('membership');

Route::get('/knowledge', function () {
    return view('layouts.ARK02_KnowledgeInsights');
});

Route::get('/newsandupdates', function () {
    return view('layouts.ARK02_NewsUpdates');
});

Route::get('/specialpackages', function () {
    return view('layouts.ARK02_SpecialPackages');
});

Route::get('/helpcenter', function () {
    return view('layouts.ARK02_HelpCenter');
});

Route::get('/faq', function () {
    return view('layouts.ARK02_Faq');
});

Route::get('/termspolicy', function () {
    return view('layouts.ARK02_TermsPolicy');
});

Route::get('/shippingpolicy', function () {
    return view('layouts.ARK02_ShippingPolicies');
});

Route::get('/cancelationpolicy', function () {
    return view('layouts.ARK02_Cancelation');
});

Route::get('/Community', function () {
    return view('layouts.ARK02_Community');
});

Route::get('/shippingschedule', function () {
    return view('layouts.ARK02_Shippingschedule');
});

Route::get('/partner1', function () {
    return view('layouts.ARK02_Partner1');
})->name('partner.1');

Route::get('/partner2', function () {
    return view('layouts.ARK02_Partner2');
})->name('partner.2');

Route::get('/partner3', function () {
    return view('layouts.ARK02_Partner3');
})->name('partner.3');



use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ms', 'zh'])) {
        Session::put('locale', $locale);
    }
    return Redirect::back();
});
