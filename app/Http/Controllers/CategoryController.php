<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
//        return Category::query()->with('posts')->all();
        return Category::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|Application|View
    {
        return view('categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request): Category
    {
        $data = $request->validated();

        $image = $data ['poster'];
        $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move(
            storage_path() . '/app/public/categories/posters',
            $imageName
        );

        $category = new Category();

        $category->name = $data['name'];
        $category->poster = $imageName;

        $category->save();

        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): Category
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): ?bool
    {
        return $category->delete();
    }
}
