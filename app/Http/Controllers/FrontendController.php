<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class FrontendController extends Controller
{
    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            Toast::title('Thank You!')
                ->message('Your message has been succesfully send.')
                ->info()
                ->centerBottom()
                ->backdrop()
                ->autoDismiss(5);
        }
        
        return view('contact');
    }
}
