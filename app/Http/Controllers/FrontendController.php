<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\Facades\Toast;

class FrontendController extends Controller
{
    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $formData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            try {
                Mail::to(env('MAIL_USERNAME'))->send(new Contact($formData));
                Toast::title('Thank You!')
                    ->message('I will reply to Your message ASAP.')
                    ->success()
                    ->rightBottom()
                    ->backdrop()
                    ->autoDismiss(5);
            } 
            catch (\Exception $e) {
                Toast::title('Error!')
                    ->message('Some error occured and server fail to send Your message.')
                    ->danger()
                    ->centerBottom()
                    ->backdrop()
                    ->autoDismiss(5);
            }
        }
        
        return view('contact');
    }

    public function resume()
    {
        return Storage::download('cv_pawel_platek.pdf');
    }
}
