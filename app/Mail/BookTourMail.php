<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookTourMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $email = $this->from(env('MAIL_FROM_ADDRESS'))->subject($this->data['subject'])->view($this->data['template'])->with('data', $this->data);
        if (isset($this->data['attach_resume'])) {
            $email->attach($this->data['attach_resume']->getRealPath(), [
                'as' => $this->data['attach_resume']->getClientOriginalName(),
                'mime' => $this->data['attach_resume']->getMimeType()
            ]);
        }
        if (isset($this->data['cover_letter'])) {
            $email->attach($this->data['cover_letter']->getRealPath(), [
                'as' => $this->data['cover_letter']->getClientOriginalName(),
                'mime' => $this->data['cover_letter']->getMimeType()
            ]);
        }
        return $email;
    }
}
