<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::getNews();
        return view('news.index')->with('news', $news);
    }

    public function show($id)
    {
        $news = News::getNewsId($id);
        if (is_null($news)) {
            return view('404');
        }
        return view('news.newsOne')->with('news', $news);
    }
}
