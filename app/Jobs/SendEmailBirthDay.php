<?php

namespace App\Jobs;

use App\Mail\BirthdayMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailBirthDay implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        //
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        \Illuminate\Support\Facades\Mail::to("mmochicken92@gmail.com")
            ->send(new BirthdayMail($this->name, $this->age));
    }
}
