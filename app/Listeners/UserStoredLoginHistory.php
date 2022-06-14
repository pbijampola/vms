<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Events\LoginHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserStoredLoginHistory
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
    public function handle(LoginHistory $event)
    {
        $current_timestamp=Carbon::now()->toDateTimeString();
        $userinfo->$event->user;

        $saveHistory=DB::table('login_history')->insert([
            'name'=>$userinfo->name,
            'email'=>$userinfo->email,
            'created_at'=>$current_timestamp,
            'updated_at'=>$current_timestamp,
        ]);
        return $saveHistory;
    }
}
