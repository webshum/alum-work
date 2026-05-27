<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    public function index() {
        $page = Page::where('slug', 'heim')->first();

        return view('public.home', compact('page'));
    }
}
