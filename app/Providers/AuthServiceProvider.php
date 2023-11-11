<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
            // Diğer policy'ler burada listelenebilir.
        \App\Models\Product::class => \App\Policies\ProductPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('access-filament', function ($user) {
            return $user->hasRole('admin'); // hasRole metodu User modelinde tanımlı olmaz ise işe yaramayacaktır.
        });

        $this->registerPolicies();
    }

}
