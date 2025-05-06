<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class MailController extends Controller
{

    public function send(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Données pour l'email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        try {
            // Envoi de l'email
            Mail::send([], [], function ($message) use ($data) {
                $message->to('idealcpa2021@gmail.com')
                    ->subject('Nouveau message de contact')
                    ->html("
                         <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;'>
                <h2 style='text-align: center; color: #333; margin-bottom: 20px;'>Nouveau message de contact</h2>
                <p style='margin: 0 0 15px;'><strong>Nom :</strong> <span style='color: #555;'>{$data['name']}</span></p>
                <p style='margin: 0 0 15px;'><strong>Email :</strong> <span style='color: #555;'>{$data['email']}</span></p>
                <p style='margin: 0 0 15px;'><strong>Message :</strong></p>
                <div style='background-color: #f9f9f9; padding: 15px; border-radius: 5px; color: #555;'>
                    <p style='margin: 0;'>{$data['message']}</p>
                </div>

            </div>
                    ");
            });

            // Retour avec un message de succès
            return redirect('/')->with('success', 'Votre message a été envoyé avec succès.');
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi de l\'e-mail : ' . $e->getMessage());
            // En cas d'erreur, retournez un message d'échec
            return back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre message.');
        }
    }
}
