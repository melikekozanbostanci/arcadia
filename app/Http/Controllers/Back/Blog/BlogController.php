<?php

namespace App\Http\Controllers\Back\Blog;

use App\Http\Controllers\Controller;
use App\Models\Back\Blog\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function bloglar()
    {
        $search = request()->get('search');
        $bloglar = Blog::where('aktif', 1)
            ->where('baslik', 'like', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('back.blog.bloglar', compact('bloglar'));
    }

    public function grapesjsBlog($limit)
    {
        $bloglar = Blog::where('aktif', 1)->orderBy('id', 'desc')->limit($limit)->get();
        return view('front.components.blog.blog-3', compact('bloglar'));
    }

    public function blogEkle()
    {
        return view('back.blog.blog-ekle');
    }

    public function blogDuzenle($uuid)
    {
        $uuid = $uuid;
        return view('back.blog.blog-duzenle', compact('uuid'));
    }

    public function blogSil($uuid)
    {
        $blog = Blog::where('uuid', $uuid)->firstOrFail();
        $blog->deleted_by = auth()->guard('admin')->user()->id;  // Soft delete için silen kişinin id'si
        $blog->save();
        $blog->delete();
        toastr()->success('Blog başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }
}
