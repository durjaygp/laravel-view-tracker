<?php

namespace Durjaygp\ViewTracker;

use Durjaygp\ViewTracker\Models\View;

class ViewTracker
{
    public function log($model)
    {
        View::create([
            'viewable_type' => get_class($model),
            'viewable_id' => $model->id,
        ]);
    }

    public function count($model)
    {
        return View::where('viewable_type', get_class($model))
                   ->where('viewable_id', $model->id)
                   ->count();
    }
}
