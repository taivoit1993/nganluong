<?php

namespace QsoftVN\NganLuong;

use Illuminate\Support\ServiceProvider;

/**
 * ServiceProvider
 *
 * The service provider for the modules. After being registered
 * it will make sure that each of the modules are properly loaded
 * i.e. with their routes, views etc.
 *
 * @author Hoangdv <hoangdv1112@gmail.com>
 * @package QsoftVN\NganLuong
 */
class NganLuongServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /*$pkg_path = dirname(__DIR__);
        $views_path = $pkg_path . '/resources/views';
        $this->loadViewsFrom($views_path, 'NganLuong');
        $this->publishes([
            $views_path => base_path('resources/views/vendor/NganLuong')
        ]);*/
    }

    public function register()
    {
        $this->registerGFormBuilder();
        $this->app->alias('NLBankCharge', 'QsoftVN\NganLuong\Facades\NLBankCharge');
    }

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerGFormBuilder()
    {
        $this->app->singleton('NLBankCharge', function ($app) {

        });
    }
}