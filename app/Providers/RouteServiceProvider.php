<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $namespaceAdmin = 'App\Http\Controllers\Admin';
    protected $namespaceCustomer = 'App\Http\Controllers\Customer';
    protected $namespaceShopAdmin = 'App\Http\Controllers\ShopAdmin';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminRoutes();

        $this->mapCustomerRoutes();

        $this->mapShopAdminRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));

    }
    protected function mapAdminRoutes()
    {
        Route::middleware('web')
            

             ->namespace($this->namespaceAdmin)
             ->group(base_path('routes/admin.php'));

    }
    protected function mapCustomerRoutes()
    {
        Route::middleware('web')
           

             ->namespace($this->namespaceCustomer)
             ->group(base_path('routes/customer.php'));

    }
    protected function mapShopAdminRoutes()
    {
        Route::middleware('web')
     
             ->namespace($this->namespaceShopAdmin)
             ->group(base_path('routes/shopadmin.php'));
    }
    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
