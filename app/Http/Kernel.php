<?php namespace Oral_Plus\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		'Oral_Plus\Http\Middleware\VerifyCsrfToken',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth'            => 'Oral_Plus\Http\Middleware\Authenticate',
		'auth.basic'      => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest'           => 'Oral_Plus\Http\Middleware\RedirectIfAuthenticated',
        'is_admin'        => 'Oral_Plus\Http\Middleware\IsAdmin',
		'is_secretaria'   => 'Oral_Plus\Http\Middleware\IsSecretaria',
		'is_usuario'      => 'Oral_Plus\Http\Middleware\IsUsuario',
		'is_especialista' => 'Oral_Plus\Http\Middleware\IsEspecialista',
	];

}
