<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class MailController extends Controller
{
    //
    public function sendEmail()
	{
		$details=[
			'title'=> 'PROMEX',
			'body'=> 'Tu incidente fue registrado correctamente en nuestra base de datos'
		];
     
		Mail::to("adrianbenavidesib@gmail.com")->send(new TestMail($details));
      ##         Mail::to($correo)->send(new TestMail($details,$correo));
		return "Correo ENVIADO exitosamente!!";
	}
}
