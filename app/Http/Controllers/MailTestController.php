<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class MailTestController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'to' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'message' => $request->message,
        ];

        try {
            Mail::send([], [], function ($message) use ($request, $data) {
                $message->to($request->to)
                        ->subject($request->subject)
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->html($data['message']);
            });

            return response()->json(['message' => 'Email sent successfully!'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to send email.', 'error' => $e->getMessage()], 500);
        }
    }
}
