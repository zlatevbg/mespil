<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\App;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\MessageBag;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\DomCrawler\Crawler;
use App\Mail\LaravelException;
use Mail;
use Throwable;
use Helper;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        if (App::environment('production') && $this->shouldReport($exception)) {
            $this->sendException($exception); // sends an email
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            $view = Helper::subdomain() . '::errors.' . $exception->getStatusCode();
            if (view()->exists($view)) {
                return response()->view($view, ['exception' => $exception], $exception->getStatusCode());
            }
        } elseif ($exception instanceof TokenMismatchException) {
            if ($request->expectsJson()) {
                $request->flashExcept('_token');
                $request->session()->flash('errors', new MessageBag([__('Seems you could not submit form for a long time. Please try again.')]));
                // Fix for Ajax 302 Redirection
                // IE 11 works with status code 308, but Edge does not
                return response()->json(null, 200)->header('X-Location', url()->previous());
            }

            return redirect()->back()->withInput($request->except('_token'))->withErrors([__('Seems you could not submit form for a long time. Please try again.')]);
        } elseif ($exception instanceof MethodNotAllowedHttpException) {
            $exception = new NotFoundHttpException($exception->getMessage(), $exception);
        } elseif ($exception instanceof \Mailgun\Exception) {
            return back()->withErrors($exception->getMessage());
        } elseif ($exception instanceof ModelNotFoundException) {
            abort(404);
        }

        return parent::render($request, $exception);
    }

    public function sendException(Throwable $exception)
    {
        try {
            $e = FlattenException::createFromThrowable($exception);

            $handler = new HtmlErrorRenderer(true);

            $html = $handler->getBody($e);

            $crawler = new Crawler($html);

            $body = $crawler->filter('body > div')->eq(1)->html();

            $subject = request()->url() . ' - ' . request()->ip();

            Mail::to('zlatevbg@gmail.com')->send(new LaravelException($subject, $body));
        } catch (Exception $ex) {
        }
    }
}
