<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('pages.contact_us');
    }

    public function sendmail(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();

            $name	 = filter_var($data["name"], FILTER_SANITIZE_STRING);
            $email	 = filter_var($data["email"], FILTER_SANITIZE_EMAIL);
            $phone	 = filter_var($data["phone"], FILTER_SANITIZE_STRING);
            $message = filter_var($data["message"], FILTER_SANITIZE_STRING);


            if (strlen($name) < 2) {
                return response('MF001', 200)->header('Content-Type', 'text/plain');
            }

            if (strlen($phone) < 6) {
                return response('MF001', 200)->header('Content-Type', 'text/plain');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return response('MF003', 200)->header('Content-Type', 'text/plain');
            }

            if (strlen($message) < 3) {
                return response('MF001', 200)->header('Content-Type', 'text/plain');
            }


            Mail::send('emails.contact', $data, function ($mail) use ($name) {
                $mail->from('hola@juegosantabeatriz.pe', 'JUEGOS SANTA BEATRIZ');
                $mail->to('vardeveloper@gmail.com');
                $mail->subject('Contacto - ' . $name);
            });

            return response('MF000', 200)->header('Content-Type', 'text/plain');
        }

        return response('MF255', 200)->header('Content-Type', 'text/plain');
    }
}
