<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CandidatureApprouvee extends Mailable
{
    use Queueable, SerializesModels;
    public $candidat;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($candidat)
    {
        $this->candidat = $candidat;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Candidature Approuvee',

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


    public function build()
    {
        return $this->view('emails.candidature-approuvee')
                    ->subject('Votre candidature a été approuvée')
                    ->from('konemouh1209@gmail.com');
    }
}
