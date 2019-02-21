<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class Forme extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $text;

    //public $title;
    public $name;
    public $email;
    public $tel;
    public $type;
    public $contact;
    public $msg;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$tel,$type,$contact,$message)
    {
      $this->title = sprintf('【SNAPPERS】お問い合わせが届きました。');
      $this->name = $name;
      $this->email = $email;
      $this->tel = $tel;
      $this->type = $type;
      $this->contact = $contact;
      $this->msg = $message;
  }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.forme')
                    ->subject($this->title);
    }
}