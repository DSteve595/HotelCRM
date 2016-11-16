<?php

namespace App\Jobs;

use SendGrid;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $to_email;
    protected $to_name;
    protected $subject;
    protected $body;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to_email, $to_name, $subject, $body)
    {
        $this->to_email = $to_email;
        $this->to_name = $to_name;
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $from = new SendGrid\Email(null, env('DEFAULT_FROM_EMAIL'));
        $to = new SendGrid\Email($this->to_name, $this->to_email);
        $content = new SendGrid\Content("text/html", $this->body);
        $mail = new SendGrid\Mail($from, $this->subject, $to, $content);
        $sg = new SendGrid(env('SENDGRID_API_KEY'));
        $response = $sg->client->mail()->send()->post($mail);
    }
}
