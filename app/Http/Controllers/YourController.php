<?php

namespace App\Http\Controllers;

use App\Models\YourModel;

use Illuminate\Http\Request;

class YourController extends Controller
{
        public function getData(Request $request)
    {
        // Your logic to fetch data goes here
        // For example, you can fetch data from a database
        //$data = 'hai ini string'; //YourModel::all(); // Replace YourModel with your actual model name
$data = YourModel::all(); 

        // Return the data as JSON response
        return response()->json($data);
    }
}
