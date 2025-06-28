
<?php
namespace Durjaygp\ViewTracker\Facades;

use Illuminate\Support\Facades\Facade;

class ViewTracker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'viewtracker';
    }
}
