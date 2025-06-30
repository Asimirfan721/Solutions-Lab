<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function show($slug)
{
    // Example static content; in real use-case, pull from DB using the slug
    $caseStudy = [
        'title' => 'EMR System for Mental Health Care',
        'overview' => 'The EMR system (Electronic Medical Record)...',
        'challenges' => 'Development of the EMR system was based on...',
        'image' => 'emr-case-study.png', // Save this in /public/images
    ];

    return view('case-studies.show', compact('caseStudy'));
}
public function hrp()
{
    return view('case-studies.hrp'); // this is for 2nd project, it contains the Headche Relief porgramme project
}

}
