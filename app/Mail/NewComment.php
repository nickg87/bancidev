<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewComment extends Mailable
{
    use Queueable, SerializesModels;

    public $data; //or protected $ata;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.comments.new')
                ->from(['address' => 'test@test.com', 'name' => 'Test Name'])
                ->with('data', $this->data)
                ->subject('Someone added a new comment');
    }
}