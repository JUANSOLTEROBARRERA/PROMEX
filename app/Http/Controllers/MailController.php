<?php
//Este documento no esta siendo utilizado actualmente en el proyecto
//se mantiene para informacion del desarrollador
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class MailController extends Controller
{
	

    public function sendEmail()//Request $request
	{

		$details=[
			'title'=> 'PROMEX',
			'body'=> 'Tu incidente fue registrado correctamente en nuestra base de datos'
		];
		Mail::to(DenunciaController::$receptor)->send(new TestMail($details));
      ##         Mail::to($correo)->send(new TestMail($details,$correo));
		return "Mensaje de exito";
	}
}
