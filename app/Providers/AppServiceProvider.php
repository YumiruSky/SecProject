<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
	
	protected $policies=[
		'App\Models'=>'App\Policies\ModelPolicy',
		\App\Models\User::class => \App\Policies\UserPolicy::class,
	];
}
