<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookTourMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $resume;
    public $coverLetter;

    public function __construct($data, $resume = null, $coverLetter = null)
    {
        $this->data = $data;
        $this->resume = $resume;
        $this->coverLetter = $coverLetter;
    }

    public function build()
    {
        $email = $this->from(env('MAIL_FROM_ADDRESS'))
                      ->subject($this->data['subject'])
                      ->view($this->data['template'])
                      ->with('data', $this->data);
        
        if ($this->resume) {
            $email->attach($this->resume->getRealPath(), [
                'as' => $this->resume->getClientOriginalName(),
                'mime' => $this->resume->getMimeType()
            ]);
        }

        if ($this->coverLetter) {
            $email->attach($this->coverLetter->getRealPath(), [
                'as' => $this->coverLetter->getClientOriginalName(),
                'mime' => $this->coverLetter->getMimeType()
            ]);
        }

        return $email;
    }
}
