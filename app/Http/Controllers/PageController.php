<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function dashboard()
    {
        return view('dashboard', [
            "page" => 'home'
        ]);
    }

    public function projects()
    {
        return view("projects", [
            "page" => "projects"
        ]);
    }

    public function skills()
    {
        return view("skills", [
            "page" => "skills"
        ]);
    }
}