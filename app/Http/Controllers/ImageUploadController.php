<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
public function uploadImage(Request $request)
{
    // Validate the request
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // max 2MB
    ]);

    // Store the image
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);

    // Optionally, save $imageName to the database

    return back()
        ->with('success','You have successfully uploaded the image.')
        ->with('image',$imageName);
}
}