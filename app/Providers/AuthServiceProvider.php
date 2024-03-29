<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

		  ResetPassword::createUrlUsing(function ($user, string $token) {

			if(request()->path() == 'forgot-password'){
				$url = 'http://127.0.0.1:8000/reset-password/'.$token;
			}else{
				$url = 'http://127.0.0.1:8000/admin/reset-password/'.$token;
			}

			return $url;
		  });

    }
}
