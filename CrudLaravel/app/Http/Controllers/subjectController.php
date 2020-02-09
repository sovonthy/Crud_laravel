<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subjectController extends Controller
{
    public function showSubject(){
        $subjects = array(
            ['Java', 100],
            ['JavaScript', 90],
            ['PHP', 70],
            ['Bootstrap', 100],
            ['Laravel', 100],
        );
        return view('subject',compact('subjects'));
    }
}
