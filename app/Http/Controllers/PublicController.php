<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Shop;

class PublicController extends Controller
{
    public function index()
    {
        $shops = Shop::with('user')->latest()->get();
        return view('public.post.index',compact('shops'));
    }

    public function show(Shop $shop)
    {
        return view('public.post.show',compact('shop'));
    }

    public function category(Category $category)
    {
        return view('public.category.show',compact('category'));
    }
}
