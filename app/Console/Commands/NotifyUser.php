<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\NotifyUserNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use Mockery\Matcher\Not;

class NotifyUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command notifies the user to check our app.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (User::all() as $user) {
            Notification::route('mail' ,$user->email)->notify(new NotifyUserNotification($user));
        }
    }
}
