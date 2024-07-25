<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Process the form data (e.g., save to database, send email, etc.)
        // For demonstration purposes, we'll just return a success message

        return 'Form submitted successfully! Name: ' . $request->name . ', Email: ' . $request->email;
    }
}
