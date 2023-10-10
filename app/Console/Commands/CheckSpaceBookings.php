<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Space;
use Illuminate\Console\Command;
use App\Notifications\SpaceCheckoutReminder;
use Illuminate\Support\Facades\Notification;

class CheckSpaceBookings extends Command
{
    protected $signature = 'spaces:check-bookings';
    protected $description = 'Check space bookings and update is_booked column.';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();
        $fiveMinutesFromNow = $now->copy()->addMinutes(5);

        // Find spaces where time_out is 5 minutes from now
        $spacesToNotify = Space::where('is_booked', 1)
            ->where('time_out', $fiveMinutesFromNow)
            ->get();

        // Send notifications to users
        foreach ($spacesToNotify as $space) {
            // Assuming the user is associated with the space, you can send the notification like this:
            $user = $space->user;
            Notification::send($user, new SpaceCheckoutReminder);
        }

               // Update is_booked for all spaces where time_out has been reached
        Space::where('is_booked', 1)
            ->where('time_out', '<=', $now)
            ->update(['is_booked' => 0]);

        $this->info('Space status checked and updated.');
    }
    
}
