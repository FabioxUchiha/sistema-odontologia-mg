<?php

namespace App\Providers;
use Spatie\Permission\Models\Permission;
use App\User;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void 
     */
    public function boot()
    {
        View::composer(['roles.fields'], function ($view) {
            $permissionItems = Permission::pluck('name','id')->toArray();
            $view->with('permissionItems', $permissionItems);
        });
        View::composer(['users.fields'], function ($view) {
            $userItems = User::pluck('name','name')->toArray();
            $view->with('userItems', $userItems);
        });
        //
    }
}