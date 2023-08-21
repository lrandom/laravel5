<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    private $orderId = "";

    public function __construct($orderId)
    {
        //
        $this->orderId = $orderId;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'email.order',
            with: [
                'orderId' => $this->orderId,
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
        return [
            Attachment::fromStorage('images/jlAmXFnlbBNbiHpPciTiqNRLAQJLcASZyValXDfQ.jpg', 'file.jpg'),
            Attachment::fromPath("https://www.state.gov/wp-content/uploads/2023/04/shutterstock_1263201358-2280x1282.jpg", "anh.jpg")
        ];
    }
}
