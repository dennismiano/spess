<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class confirm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	 public $ms;
	 public $name;
    public function __construct( string $mesg , string $name)
    {
        //
		$this->ms=$mesg;
		$this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('spess@sharubati.com')
		->view('emails.confirm.co')->with(["msg"=>$this->ms,"name"=>$this->name]);
    }
}
