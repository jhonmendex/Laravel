<?php

namespace pruebas\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'pruebas\Model' => 'pruebas\Policies\ModelPolicy',
        'pruebas\Customer' => 'pruebas\Policies\CustomerPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate); //esta es la fachada gate
        // $gate->define('read-project',function($user,$project){ //definir una habilidad para el usuario
        // return $user->id === $project->user_id;
        // });
    }
}
