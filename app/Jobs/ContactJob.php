<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;


class ContactJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $fromFullnameUser;
    protected $fromEmailUser;
    protected $fromSubjectUser;
    protected $fromMessageUser;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($fromFullnameUser,$fromEmailUser,$fromSubjectUser,$fromMessageUser)
    {
        $this->fromFullnameUser = $fromFullnameUser;
        $this->fromEmailUser = $fromEmailUser;
        $this->fromSubjectUser = $fromSubjectUser;
        $this->fromMessageUser = $fromMessageUser;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Notification::route('mail',config('app.email'))
        ->notify(new ContactNotification(
            $this->fromFullnameUser,
            $this->fromEmailUser,
            $this->fromSubjectUser,
            $this->fromMessageUser));
    }
}
