<?php

namespace App\Traits;

trait Models
{
    public function getModelClass($model)
    {
        $model = ucfirst($model);
        $modelClass = "App\\Models\\{$model}";
        return app($modelClass);
    }
}