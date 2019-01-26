<?php
/**
 * attached variable to the master view
 */
namespace SMS\Composers;

use Illuminate\View\View;

class MasterComposer
{
    /**
     * compose the view with related variable
     */

    public function compose(View $view)
    {
        $view->with('idc', 'ba244065b89e3cf6ea0034d0abf74f870d2c769f');
    }

}