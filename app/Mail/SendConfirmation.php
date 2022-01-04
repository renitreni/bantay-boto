<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $vote_id;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id, $name)
    {
        $this->vote_id = $id;
        $this->name    = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $hashed = encrypt($this->vote_id);

        return $this->from('do-not-reply@bongbongsaraph.com')
            ->subject('BANTAY BOTO ONLINE SURVEY')
            ->html('<p>Hi Hadji,</p>
            <p>This message is generated from&nbsp;<a href="//bonbonsaraph.com">bonbongsaraph.com</a> Online Survey.
            <br><br>Please click below link to count your vote:<br>
             '.route('confirm.vote', ['code' => $hashed]).'&nbsp;
            </p>
            <p>Thank you for joining,</p>'
            );
    }
}
