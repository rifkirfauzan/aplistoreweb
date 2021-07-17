<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        //Mencari berdasarakan user id
        $user_id = auth()->user()->id;
        //Mengambil data dari tabel Shops berdasarkan id
        $shops = Shop::where('user_id',$user_id)->get();
        return view('private.post.index',compact('shops'));
    }
    
    public function create()
    {
        return view('private.post.create');
    }
    
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title'=>'required',
            'category_id'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png',
            'description'=>'required',
        ]);
        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('thumbnail',$file_name);
        
        Shop::create([
            'user_id'=> auth()->user()->id,
            'title' => $request->title,
            'slug' => \Str::slug ($request->title),
            'category_id' => $request->category_id,
            'image' => $image,
            'description' => $request->description
        ]);
        
        session()->flash('message','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');
        return redirect()->route('post');
        
    }
    
    public function edit(Shop $shop)
    {
        $this->authorize('update',$shop);
        $categories = Category::all();
        return view('private.post.edit',compact('shop','categories'));
    }

    public function update (Shop $shop, Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'category_id'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png',
            'description'=>'required',
        ]);
        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('thumbnail',$file_name);
        
        $shop->update([
            'title' => $request->title,
            'slug' => \Str::slug ($request->title),
            'category_id' => $request->category_id,
            'image' => $image,
            'description' => $request->description
        ]);
        
        session()->flash('message','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');
        return redirect()->route('post');
    }
    
    public function destroy(Shop $shop)
    {
        $shop->delete();
        session()->flash('message','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');
        return redirect()->route('post');
    }

}

