<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Action;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::active()->get();

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category) {
        $actions = Action::active()->orderBy('sort')->get();

        return view('categories.show', compact('category', 'actions'));
    }
}
