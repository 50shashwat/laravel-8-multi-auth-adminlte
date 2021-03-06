<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->from('mail@example.com', 'Mailtrap')
    //         ->subject('Mailtrap Confirmation')
    //         ->markdown('mails.resetPassword')
    //         ->with([
    //             'name' => 'New Mailtrap User',
    //             'link' => 'https://mailtrap.io/inboxes'
    //         ]);
    // }
    public function build()
    {
        return $this->view('mails.resetPassword');
    }
}
