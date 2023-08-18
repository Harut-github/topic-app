<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('general_admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('general_admin.categories.create');
    }

    public function store()
    {
        Category::create(request()->validate([
            'title' => ['required', 'min:3'],
        ]));

        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        return view('general_admin.categories.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $category->update(request()->validate([
            'title' => ['required', 'min:3'],
        ]));

        return redirect('/admin/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/admin/categories');
    }
}
