<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()    
    {    
        //  if(config('app.env') === 'production') {
        //     \URL::forceScheme('https');            
        // }
        define('EMAIL_FONT', 'Verdana');
        define('SITE_URL', url('/'));
        define('SECONDARY_COLOR', '#294a8e');
        define('SITE_LOGO', url('assets/images/favicon.png'));
        define('FROM_MAIL', 'support@waioz.com');
        define('CONTACT_MAIL', 'admin@disai.com');
        define('CONTACT_NAME', 'Admin');
        define('SITE_NAME', 'disai');
        define('SITE_MAINTENANCE', 'NO');
        define('GOOGLE_API_KEY','AIzaSyARz0Z9JKu8JpdLF2RwoXc704UKLmsxx1I');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
