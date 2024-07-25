<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use App\Mail\ComplexEmail;
use Mail;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Example PDF Title',
            'content' => 'This is a sample PDF generated using DomPDF in Laravel.'
        ];

        // $pdf = PDF::loadView('pdf.example', $data);

        // Get the HTML content from a Blade view
        $html = View::make('pdf.example', $data)->render();

        // instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

//var_dump($dompdf);

//$dompdf->loadView('pdf.example', $data);



// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

        //return $dompdf->download('exampleFromLarafel ' . date("h:i:sa").' '. date("Y.m.d") . '.pdf');
    }

    public function generatePDF2()
    {
        $data = [
            'title' => 'Example PDF with Inline CSS',
            'content' => '<p style="font-size: 18px; color: #333; line-height: 1.6;">This is a sample PDF generated using DomPDF in Laravel. Inline CSS is used to style the text.</p>'
        ];

        // $pdf = PDF::loadView('pdf.example2', $data);

        // return $pdf->download('example2.pdf');

$html = View::make('pdf.example2', $data)->render();

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream('exampleFromLarafel ' . date("h:i:sa").' '. date("Y.m.d") . '.pdf');

       // Store data in session flash
        //session()->flash('dompdf', $dompdf);
        
        // Redirect to another controller
        //return redirect()->route('/sendemail2');

// Redirect with route parameters
//var_dump($dompdf);

        //return redirect()->route('sendemail2', ['dompdf' => 'string']);

        $details = [
            'recipient_name' => 'John Doe',
            'recipient_email' => 'john.doe@example.com',
            'message_content' => 'This is a complex email message.',
        ];

        $pdf=$dompdf->output();

                    Mail::to('shubuhshubuh@gmail.com')->send(new ComplexEmail($details,$pdf));
                return "Pdf email has been sent!";
    }

}
