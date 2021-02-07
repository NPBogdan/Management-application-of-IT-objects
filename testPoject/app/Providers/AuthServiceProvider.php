<?php

namespace App\Providers;

use App\Models\Tool;
use App\Models\User;
use App\Policies\ToolPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Tool::class => ToolPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        Gate::before(function(User $user){
//            if($user->id === 1){ //admin
//                return true;
//            }
//        });
    }
}
