<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics  = Topic::all();
        return view('general_admin.topics.index', compact('topics'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('general_admin.topics.create', compact('categories'));
    }

    public function store(Request $request)
    {


        //   dd($request->all());
        Topic::create(request()->validate([
            'title' => ['required', 'min:3'],
        ]));

        return redirect('/admin/topics');
    }

    public function edit($id)
    {
        $topic = Topic::find($id);
        $categories = Category::all();
        return view('general_admin.topics.edit', compact('topic', 'categories'));
    }

    public function update(Topic $Topic)
    {
        $Topic->update(request()->validate([
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'unique:categories', 'min:3'],
            'category_id' => [''],
            'description' => [''],
            'text' => ['']
        ]));

        $Topic->save();

        return redirect('/admin/topics');
    }

    public function destroy($id)
    {
        $Topic = Topic::find($id);
        $Topic->delete();
        return redirect('/admin/topics');
    }
}
