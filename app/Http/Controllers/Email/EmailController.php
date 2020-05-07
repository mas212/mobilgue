<?php

namespace App\Http\Controllers\Email;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function invoiceEmail($data){
    	//$data['name']           = $username;
        //$data['email']          = $email;
        //echo "sending...";
        Mail::send('Emails.invoiceEmail', $data, function ($mail) use ($data)
            {
                $mail->to($data['email'], $data['name']);
                $mail->subject("Titip Jual Mobil Di Hero jaya car");
                $mail->from('cs@herojayacar.com', 'Hero Jaya Car');
                $mail->bcc('nyambek2000@gmail.com ', 'Hero Jaya Car');
            });

        if (Mail::failures()) {
           echo "Failed sending email";
        }
    }
}
