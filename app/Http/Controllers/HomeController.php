<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;
use App\Models\Action;

class HomeController extends Controller
{
    public function index() {
        $page = Page::active()->where('slug', 'heim')->first();
        $actions = Action::active()->orderBy('sort')->get();
        $categories = Category::active()->get();

        return view('page.home', compact('page', 'categories', 'actions'));
    }
}
