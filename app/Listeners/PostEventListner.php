<?php

namespace App\Listeners;

use App\Events\PostCreateEvent;
use App\Http\Controllers\FmNotificationController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class PostEventListner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostCreateEvent $event): void
    {
        $post =  $event->post;

        $notificationController =  new  FmNotificationController();

        $request = Request::create('','POST',['title'=>'New Article Published.','body' =>$post->title]);

        $notificationController->sendNotification( $request );

       // \Log::info(['Event catches. Post id ' . ( $post ? $post->id : ' NA '),$request,]);

    }
}
