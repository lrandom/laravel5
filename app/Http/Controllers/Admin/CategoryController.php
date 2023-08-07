<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
        $list = Category::paginate(10);
        return view('admin.category.index', compact('list'));
    }

    public function create()
    {
        // TODO: Implement create() method.
        return view('admin.category.add');
    }

    public function store()
    {
        // TODO: Implement store() method.
        Category::create(
            request()->except('_token')
        );
        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $category =Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update($id)
    {
        // TODO: Implement update() method.
        $category = Category::find($id);
        $category->update(
            request()->except('_token')
        );
        return redirect()->route('admin.category.index');
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

}
