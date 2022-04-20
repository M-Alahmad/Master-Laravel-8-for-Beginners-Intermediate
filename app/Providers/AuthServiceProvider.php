<?php

namespace App\Providers;

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
        'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\BlogPost' => 'App\Policies\BlogPostPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//         Gate::denies('update-post', function($user,$post){
// return $user->id == $post->$user_id;
//         });

//         Gate::denies('delete-post', function($user,$post){
//             return $user->id == $post->$user_id;
//                     });
//         Gate::before(function($user,$ability){
//             if($user->is_admin){
//                 return true;
//             }
//         });            
    }
}