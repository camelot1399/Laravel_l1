<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    private string $nameProject;

    public function __construct() {
        $this->nameProject = 'Новостной сайт';
    }

    public function index()
    {
        return view('about', ['nameProject' => $this->nameProject]);
    }
}
