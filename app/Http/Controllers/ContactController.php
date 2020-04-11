<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    
    public function contactUs()
    {
//        return view('front.pages.contact');
        $systemMessage = session()->pull('system_message');
        return view('front.contact.contact', [
            'system_message' => $systemMessage,
        ]);
    }
    
    public function sendMessage(Request $request) {
        $formData = $request->validate([
            'your_name' => 'required|string|min:2|max:255',
            'your_email' => ['required', 'email', 'max:255'],
            'your_message' => ['required', 'string', 'min:50', 'max:500'],
            'g-recaptcha-response' => 'recaptcha',
            ]);
        
        \Mail::to('darkosavic1997@gmail.com')->send(new ContactFormMail(
                
                $formData['your_email'],
                $formData['your_name'],
                $formData['your_message'],
                
                ));
        
        session()->flash('system_message', //kratkotrajan upis u sesiju, gubi se u narednom request-u
                'We have recieved your message, we will contact you soon!'
        );

        return redirect()->route('front.contact.contact');
    }
}
