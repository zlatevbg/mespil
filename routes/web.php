<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Www\EmailController;

Route::name('www.')->domain('www.' . config('mespil.domain'))->namespace(Str::studly('www'))->group(function () {
    foreach (Language::subdomain('www')->getLocales() as $locale) {
        Route::prefix($locale == Language::default() ? '' : $locale)->group(function () use ($locale) {
            if (is_array(__('nav.header', [], $locale))) {
                foreach (__('nav.header', [], $locale) as $slug => $route) {
                    if (isset($route['children'])) {
                        foreach ($route['children'] as $childSlug => $childRoute) {
                            $hasParent = isset($childRoute['parent']);
                            Route::get(($hasParent ? $route['slug'] : '') . '/' . $childRoute['slug'], function () use ($childSlug, $childRoute, $slug, $hasParent) {
                                return view('www::' . ($hasParent ? $slug . '/' : '') . $childSlug);
                            })->name($locale . '.' . ($hasParent ? $slug . '/' : '') . ($childSlug ?: ''));
                        }
                    } else {
                        Route::get('/' . $route['slug'], function () use ($slug) {
                            return view('www::' . $slug);
                        })->name($locale . ($slug ? '.' . $slug : ''));
                    }
                }
            }

            if (is_array(__('nav.portugal-properties-for-sale', [], $locale))) {
                Route::get('/' . __('nav.portugal-properties-for-sale.parent', [], $locale) . '/{property?}', function ($property) {
                    return view('www::portugal-properties-for-sale/' . $property);
                })->name($locale . '.property-for-sale')->where('property', implode('|', array_column(__('nav.portugal-properties-for-sale.children', [], $locale), 'slug')))->defaults('type', 'property');
            }

            if (is_array(__('nav.portugal-investment-projects', [], $locale))) {
                Route::get('/' . __('nav.portugal-investment-projects.parent', [], $locale) . '/{project}', function ($project) {
                    return view('www::portugal-investment-projects/' . $project);
                })->name($locale . '.investment-project')->where('project', implode('|', array_column(__('nav.portugal-investment-projects.children', [], $locale), 'slug')))->defaults('type', 'project');
            }

            if (is_array(__('nav.portugal-real-estate-investment-guide', [], $locale))) {
                Route::get('/' . __('nav.portugal-real-estate-investment-guide.parent', [], $locale) . '/{location}', function ($location) {
                    return view('www::portugal/' . $location);
                })->name($locale . '.portugal')->where('location', implode('|', array_column(__('nav.portugal-real-estate-investment-guide.children', [], $locale), 'slug')))->defaults('type', 'location');
            }

            if (is_array(__('nav.about', [], $locale))) {
                Route::get('/' . __('nav.about.parent', [], $locale) . '/{profile}', function ($profile) {
                    return view('www::about/' . $profile);
                })->name($locale . '.profile')->where('profile', implode('|', array_column(__('nav.about.children', [], $locale), 'slug')))->defaults('type', 'profile');
            }

            if (is_array(__('nav.footer', [], $locale))) {
                foreach (__('nav.footer', [], $locale) as $slug => $route) {
                    if (isset($route['children'])) {
                        foreach ($route['children'] as $childSlug => $childRoute) {
                            Route::get('/' . $childRoute['slug'], function () use ($childSlug) {
                                return view('www::' . $childSlug);
                            })->name($locale . ($childSlug ? '.' . $childSlug : ''));
                        }
                    } else {
                        Route::get('/' . $route['slug'], function () use ($slug) {
                            return view('www::' . $slug);
                        })->name($locale . ($slug ? '.' . $slug : ''));
                    }
                }
            }

            Route::post('/' . __('route-email-contact', [], $locale), [EmailController::class, 'emailContact'])->name($locale . '.email-contact');
            Route::post('/' . __('route-email-subscribe', [], $locale), [EmailController::class, 'emailSubscribe'])->name($locale . '.email-subscribe');
            Route::post('/' . __('route-email-download-brochure', [], $locale), [EmailController::class, 'emailDownloadBrochure'])->name($locale . '.email-download-brochure');
            Route::post('/' . __('route-email-join-investors', [], $locale), [EmailController::class, 'emailJoinInvestors'])->name($locale . '.email-join-investors');
            Route::get('/' . __('route-confirm-subscribe', [], $locale) . '/{email}', [EmailController::class, 'confirmSubscribe'])->middleware('signed')->name($locale . '.confirm-subscribe');
            Route::get('/' . __('route-confirm-download-brochure', [], $locale) . '/{email}', [EmailController::class, 'confirmDownloadBrochure'])->middleware('signed')->name($locale . '.confirm-download-brochure');
            Route::get('/' . __('route-confirm-join-investors', [], $locale) . '/{email}', [EmailController::class, 'confirmJoinInvestors'])->middleware('signed')->name($locale . '.confirm-join-investors');

            Route::get('/' . __('route-subscribe-confirmation', [], $locale), function () {
                return view('www::subscribe-confirmation');
            })->name($locale . '.subscribe-confirmation');

            Route::get('/' . __('route-join-investors-confirmation', [], $locale), function () {
                return view('www::join-investors-confirmation');
            })->name($locale . '.join-investors-confirmation');

            Route::get('/' . __('route-download-brochure', [], $locale) . '/{brochure}/{timestamp}', function ($brochure) {
                return response()->download(public_path('storage/download/brochure-' . $brochure . '.pdf'));
            })->name($locale . '.download-brochure');

            Route::get('/' . __('route-download', [], $locale) . '/{file}/{timestamp}', function ($file) {
                return response()->download(public_path('storage/download/' . $file . '.pdf'));
            })->name($locale . '.download');
        });
    }
});
