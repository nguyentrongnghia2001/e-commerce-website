<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SuspiciousIpAlert extends Mailable
{
    use Queueable, SerializesModels;

    public $ip;

    public function __construct($ip)
    {
        $this->ip = $ip;
    }

    public function build()
    {
        return $this->subject('Suspicious IP Alert')
                    ->view('emails.suspicious_ip_alert')
                    ->with(['ip' => $this->ip]);
    }
}

