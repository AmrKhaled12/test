<?php

namespace App\Listeners;

use App\Events\VideoViewer;
use App\Models\View;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
class IncreseViews
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(VideoViewer $event)
    {
        $this->update_view($event->view);
    }

    function update_view($viewer){
        $viewer->views=$viewer->views + 1;
        $viewer->save();
    }


}
