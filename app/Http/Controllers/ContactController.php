<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'delivery_address' => 'required|string|max:500',
            'container_need' => 'required|string|max:255',
            'duration' => 'required|string|max:100',
            'notes' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Get validated data
        $data = $validator->validated();

        try {
            // Send email notification
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('info@rtmtrucking.com') // Change this to your actual email
                    ->subject('New Contact Form Submission - ' . $data['name'])
                    ->from($data['email'], $data['name']);
            });

            // Send confirmation email to customer
            Mail::send('emails.contact-confirmation', $data, function ($message) use ($data) {
                $message->to($data['email'])
                    ->subject('Thank you for contacting RTM Trucking')
                    ->from('noreply@rtmtrucking.com', 'RTM Trucking');
            });

            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }
}