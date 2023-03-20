<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::with('videos')->get();
    }

    public function show(Category $category)
    {
        return $category->load('videos');
    }
}
