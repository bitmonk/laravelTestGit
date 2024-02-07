<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $students = Student::all();
        // dd($students);

        return view('welcome', compact('students'));
    }

    function about()
    {
        return view('about');
    }

    function aboutDetails($data)
    {
        dd($data);
    }

    function contact()
    {
        return view('contact');
    }
}
