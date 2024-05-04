<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Job extends Mailable {
    use Queueable, SerializesModels;

    public $statement;
    public $userName;

    /**
     * Create a new message instance.
     * @return void
     */
    public function __construct($statement, $userName) {
        $this->statement = $statement;
        $this->userName = $userName;
    }

    /**
     * Build the message.
     * @return $this
     */
    public function build() {
        return $this->subject('New Job Application')->view('email.job');
    }
}