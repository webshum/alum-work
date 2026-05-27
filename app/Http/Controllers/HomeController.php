<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;

class HomeController extends Controller
{
    public function index() {
        $page = Page::where('slug', 'heim')->first();
        $categories = Category::get();

        return view('page.home', compact('page', 'categories'));
    }
}
