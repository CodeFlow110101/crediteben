<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */



    protected $first_name;
    protected $last_name;
    protected $phone_no;
    protected $email;
    protected $company_name;
    protected $job_title;
    protected $inquiry;
    protected $userMessage;

    public function __construct($first_name, $last_name, $phone_no, $email, $company_name, $job_title, $inquiry, $userMessage)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone_no = $phone_no;
        $this->email = $email;
        $this->company_name = $company_name;
        $this->job_title = $job_title;
        $this->inquiry = $inquiry;
        $this->userMessage = $userMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact-form',
            with: [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'phone_no' => $this->phone_no,
                'email' => $this->email,
                'company_name' => $this->company_name,
                'job_title' => $this->job_title,
                'inquiry' => $this->inquiry,
                'userMessage' => $this->userMessage,
            ]
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
}
