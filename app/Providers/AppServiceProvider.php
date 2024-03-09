<?php

namespace App\Providers;

use App\Traits\Priority;
use App\Traits\Status;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use ReflectionClass;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('valid_priority', function ($attribute, $value, $parameters, $validator) {
            if ($value instanceof Priority) {
                $value = $value->value;
            }
        
            $reflection = new ReflectionClass(Priority::class);
            $constants = $reflection->getConstants();
        
            $values = [];
            foreach ($constants as $name => $value) {
                $values[] = $value;
            }
        
            return in_array($value, $values);
        });

        Validator::extend('valid_status', function ($attribute, $value, $parameters, $validator) {
            if ($value instanceof Status) {
                $value = $value->value;
            }
        
            $reflection = new ReflectionClass(Status::class);
            $constants = $reflection->getConstants();
        
            $values = [];
            foreach ($constants as $name => $value) {
                $values[] = $value;
            }
        
            return in_array($value, $values);
        });
    }
}
