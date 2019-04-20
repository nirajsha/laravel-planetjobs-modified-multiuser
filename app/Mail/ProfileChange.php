<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProfileChange extends Mailable
{
    use Queueable, SerializesModels;
    public $change_profile;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $change_profile)
    {
        $this->change_profile = $change_profile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.change_profile');
    }
}
