<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function show($slug)
{
    // Example static content; in real use-case, pull from DB using the slug
    //static content for the EMR system case study
    $caseStudy = [
        'title' => 'EMR System for Mental Health Care',
        'overview' => 'The EMR system (Electronic Medical Record)...',
        'challenges' => 'Development of the EMR system was based on a number of complex challenges that needed technical proficiency and innovative, creative thinking. This involved the need to come up with a flexible framework through which the Medical Health Centers would create custom survey and module forms to suit their needs. There was also a requirement to incorporate various functionalities into one system in a manner that it could be scaled for any number of MHCs. Ensuring security of sensitive data of patients and MHC was another important aspect. ',
        'image' => 'hrp.jpg', // Save this in /public/images
        'image' => 'solutions.jpg', // Save this in /public/images
    ];

    return view('case-studies.show', compact('caseStudy'));
}
public function hrp()
{
    return view('case-studies.hrp'); // this is for 2nd project, it contains the Headche Relief porgramme project
}

}
