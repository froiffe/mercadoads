<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
    public function index()
    {
        return view('audiences')
            ->with('page', Page::where('name', 'Audiencias')->first());
    }
}
