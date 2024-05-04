<?php

namespace App\Providers;

use App\Models\HeaderFooterCodeManager;
use function dd;
use Illuminate\Support\ServiceProvider;

class HeaderFooterCodeManagerServiceProvider extends ServiceProvider {
    /**
     * Register services.
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap services.
     * @return void
     */
    public function boot() {
        $headerCode = HeaderFooterCodeManager::where('position', 1)->where('is_active', 1)->get();
        $footerCode = HeaderFooterCodeManager::where('position', 2)->where('is_active', 1)->get();
        view()->composer(['layouts.frontend.main'], function($view) use ($headerCode, $footerCode) {
            $view->with([
                'headerCode' => $headerCode,
                'footerCode' => $footerCode,
            ]);
        });
    }
}
