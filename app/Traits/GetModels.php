<?php

namespace App\Traits;

trait GetModels
{
    public function getModelClass($model)
    {
        $model = ucfirst($model);
        $modelClass = "App\\Models\\{$model}";
        if (!class_exists($modelClass)) {
            throw new \Exception("$modelClass is not a valid class name");
        }
        return app($modelClass);
    }
}