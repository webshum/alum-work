<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;
use App\Models\Action;
use App\Models\Faq;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        $page = Page::active()->where('slug', 'heim')->first();
        $actions = Action::active()->orderBy('sort')->get();
        $categories = Category::active()->get();
        $faqs = Faq::active()->get();
        $references = Product::active()->recommended()->get();

        return view('page.home', compact('page', 'categories', 'actions', 'faqs', 'references'));
    }
}
