<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\News;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::getCategories();
        return view('categories')->with('categories', $categories);
    }

    public function show($id)
    {
        $categories = Categories::getCategoriesId($id);
        $news = News::getNewsCategoryId($id);
        if (is_null($categories)) {
            return view('404');
        }
        return view('categoriesOne')->with('categories', $categories)->with('news', $news);
    }
}
