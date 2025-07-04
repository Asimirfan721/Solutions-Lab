<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
   // CaseStudyController.php

public function show($slug)
{
    // Check if the view file exists to avoid 404 errors
    if (!view()->exists("case-studies.$slug")) {
        abort(404); // Show 404 if the case study doesn't exist
    }

    return view("case-studies.$slug");
}

public function hrp()
{
    return view('case-studies.hrp'); // this is for 2nd project, it contains the Headche Relief porgramme project
}

}
