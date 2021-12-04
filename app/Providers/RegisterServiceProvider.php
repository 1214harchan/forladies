<?php

namespace App\Providers;
use Illuminate\Support\Facades\Validator;
use app\Http\Validators\CustomValidator;
use Illuminate\Support\ServiceProvider;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages){
            return new CustomValidator($translator, $data, $rules, $messages);
        });
    }
}
