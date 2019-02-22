<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
      $students = config('students');
      return view('students.index', compact('students'));
    }

    public function show($slug)
    {
      $student = [];

      foreach (config('students') as $availablestudent)
      {
        if ($availablestudent['slug'] == $slug) {
          $student = $availablestudent;
        }
      }

      if (empty($student)) {
        return abort(404);
      }

      return view('students.show', compact('student'));
    }
}
