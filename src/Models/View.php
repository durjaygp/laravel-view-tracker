<?php

namespace Durjaygp\ViewTracker\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = ['viewable_type', 'viewable_id'];

    public function viewable()
    {
        return $this->morphTo();
    }
}
