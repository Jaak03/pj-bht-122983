<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class GridController extends Controller
{
    public function index()
    {
        return Inertia::render('Grid');
    }
}
