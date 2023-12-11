<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        $successMessage = session('message.success');

        return view('categories.index')
            ->with('categories', $categories)
            ->with('successMessage', $successMessage);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $category = Category::create($request->all());

        return to_route('categories.index')
            ->with('message.success', "Category '{$category->name}' created");
    }

    public function edit(Category $category){
        return view('categories.edit')
            ->with('category', $category);
    }

    public function update(Category $category, Request $request){
        $category->update($request->all());

        return to_route('categories.index')
            ->with('message.success', "Category '{$category->name}' updated");
    }
}
