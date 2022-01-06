<?php

namespace App\Http\Middleware;

use Closure;
use Exception;

class RedirectsMissingPages
{
    public function __construct()
    {
        $this->router = app('router');
    }

    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response->getStatusCode() != 404) {
            return $response;
        }

        $redirectResponse = $this->getRedirectFor($request);

        return $redirectResponse ?? $response;
    }

    public function getRedirectFor($request)
    {
        $redirects = [
            // '/questions-and-answers-for-investors' => ['/for-investors/questions-and-answers', 302],
            '/properties-for-sale/{url?}' => '/portugal-properties-for-sale/{url}',
            '/the-buying-process' => '/the-property-buying-process',
            '/investment-projects/{url?}' => '/portugal-investment-projects/{url}',
            '/questions-and-answers-for-investors' => '/for-investors/questions-and-answers',
            '/golden-visa-portugal' => '/portugal-golden-visa',
            '/nhr' => '/nhr-portuguese-tax-residency',
        ];

        collect($redirects)->each(function ($redirects, $missingUrl) {
            $this->router->get($missingUrl, function () use ($redirects) {
                $redirectUrl = $this->determineRedirectUrl($redirects);
                $statusCode = $this->determineRedirectStatusCode($redirects);

                return redirect()->to(
                    $redirectUrl,
                    $statusCode
                );
            });
        });

        try {
            return $this->router->dispatch($request);
        } catch (Exception $e) {
            return;
        }
    }

    protected function determineRedirectUrl($redirects)
    {
        if (is_array($redirects)) {
            return $this->resolveRouterParameters($redirects[0]);
        }

        return $this->resolveRouterParameters($redirects);
    }

    protected function determineRedirectStatusCode($redirects)
    {
        return is_array($redirects) ? $redirects[1] : 301;
    }

    protected function resolveRouterParameters($redirectUrl)
    {
        foreach ($this->router->getCurrentRoute()->parameters() as $key => $value) {
            $redirectUrl = str_replace("{{$key}}", $value, $redirectUrl);
        }

        $redirectUrl = preg_replace('/\/{[\w-]+}/', '', $redirectUrl);

        return $redirectUrl;
    }
}
