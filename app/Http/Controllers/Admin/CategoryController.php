<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categorys.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        // validate parent_id and must be different with id
//        TODO
        if ($request->parent_id)
            $request->validate([
                'parent_id' => ['required', 'numeric', 'exists:categories,id', 'different:id']
            ]);

        Category::create($request->all());

        alert('عملیات موفقیت آمیز بود','دسته بندی با موفقیت به لیست اضافه شد', 'success');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Category $category)
    {
        $categories = Category::where('parent_id', 0)->get();
        return view('admin.categories.index', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($request->parent_id)
            $request->validate([
                'parent_id' => ['required', 'numeric', 'exists:categories,id', 'different:id']
            ]);

        $category->update($request->all());

        alert('عملیات موفقیت آمیز بود','دسته بندی با موفقیت ویرایش شد', 'success');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        $category->delete();

        alert('عملیات موفقیت آمیز بود','دسته بندی با موفقیت حذف شد', 'success');
        return back();
    }
}
