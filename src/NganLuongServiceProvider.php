<?php

namespace QsoftVN\NganLuong;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

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

        // Publish config files
        $this->publishes([
            __DIR__ . '/config/nganluong.php' => config_path('nganluong.php'),
        ]);
    }

    public function register()
    {
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('NLBankCharge', 'QsoftVN\NganLuong\Facades\NLBankCharge');
        });

        $this->app->bind('BankCharge', BankCharge::class);
    }
}