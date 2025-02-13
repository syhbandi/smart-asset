<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = DB::table('rag_applicant')->get();
        dd($applicants);
        phpinfo();
    }
}
