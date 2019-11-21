<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductAdded extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $product;
    public $categoria;
    public $msg;
    public $subject = "Mensaje recibido";
    public function __construct($Prueba, $Categoria)

    {
        $this->product = $Prueba;
        $this->categoria = $Categoria;
        $this->msg = (object) array('image' => '/path/to/file');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sendmails.productadded');
    }
}
