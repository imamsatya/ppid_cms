<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\Profil\VisiMisi;
use App\Policies\Profil\VisimisiPolicy;

use App\Models\Profil\ProfilSingkat;
use App\Policies\Profil\ProfilSingkatPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        VisiMisi::class => VisiMisiPolicy::class,
        ProfilSingkat::class => ProfilSingkatPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
