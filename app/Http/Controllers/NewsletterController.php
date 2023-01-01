<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function newsletterPost(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:newsletters|max:255'
        ]);

        $newsletter = new Newsletter;
        $newsletter->email = $request->input('email');
        $newsletter->ip_address = $request->ip();

        $newsletter->save();

        $request->session()->flash('success', 'Thank you for subscribing to our newsletter.');

        return back();
    }
}
