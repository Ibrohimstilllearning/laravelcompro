<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Blog',
            'blog' => Blog::with('kategori')->get(),
            'content' => 'admin/blog/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Blog',
            'kategori' => Kategori::get(),
            'content' => 'admin/blog/add'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());
       $data = $request -> validate([
        'title' => 'required',
        'kategori_id' => 'required',
        'body' => 'required||min:100',
        'cover' => 'required',
       
       ]);
       
       if ($request->cover) {
            $cover = $request->file('cover');
            $file_name = time().'-'. $cover->getClientOriginalName();

            $storage = 'uploads/blogs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
       } else {
        $data['cover'] = null;
       }

       Blog::create($data);
       Alert::success('Success Title', 'Success Menambah');
       return redirect('/admin/posts/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $data = [
            'title' => 'Edit Blog',
            'blog'  => Blog::find($id),//Buat nyari halaman atau variabel $id
            'content' => 'admin/blog/show'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit Blog',
            'blog'  => Blog::find($id),//Buat nyari halaman atau variabel $id
            'kategori'=> Kategori::get(),
            'content' => 'admin/blog/add'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     // dd($request->all());
     $blog = Blog::find($id);
     $data = $request -> validate([
        'title' => 'required',
        'kategori_id' => 'required',
        'body' => 'required',
        //'cover' => 'required',
       ]);
       

       if ($blog->cover != null) {
            unlink($blog->cover);
       }

       if ($request->cover) {
            $cover = $request->file('cover');
            $file_name = time().'-'. $cover->getClientOriginalName();

            $storage = 'uploads/blogs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
       } else {
        $data['cover'] = $blog->cover;
       }


          $blog->update($data);
          Alert::success('Success', 'Berhasil mengupdate data');
           return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        if ($blog->cover != null) {
            unlink($blog->cover);
       }
        Alert::success('Success', 'Berhasil Menghapus Data');
        $blog->delete();
        return redirect('/admin/posts/blog');
    }
    
}


 
