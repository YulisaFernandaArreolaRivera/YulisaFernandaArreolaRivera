<?php
namespace App\Exceptions;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Support\Arr;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    protected function unauthenticated($request, AuthenticationException $exception)
 {
 if ($request->expectsJson()) {
 return response()->json(['message' => $exception->getMessage()], 401);
 }
 $guard = Arr::get($exception->guards(),0);
 switch($guard){
 case 'admin':
 $login = 'admin.login';
 break;
 default:
 $login = 'login';
 break;
 }
 return redirect()->guest(route($login));
 }

}