<?php
namespace Durjaygp\ViewTracker\Traits;

use Durjaygp\ViewTracker\Models\View;

trait HasViews
{
    public function views()
    {
        return $this->morphMany(View::class, 'viewable');
    }

    public function viewsCount()
    {
        return $this->views()->count();
    }
}
