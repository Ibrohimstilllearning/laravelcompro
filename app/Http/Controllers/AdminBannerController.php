<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Banner',
            'banner' => Banner::get(),
            'content' => 'admin/banner/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Banner',
            'content' => 'admin/banner/add'
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
        'headline' => 'required',
        'desc' => 'required',
        //'urutan' => 'required',
        'gambar' => 'required',
       
       ]);
       $data['urutan'] = 0;
       if ($request->gambar) {
            $gambar = $request->file('gambar');
            $file_name = time().'-'. $gambar->getClientOriginalName();

            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage.$file_name;
       } else {
        $data['gambar'] = null;
       }

       Banner::create($data);
       Alert::success('Success Title', 'Success Menambah');
       return redirect('/admin/banner');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit Banner',
            'banner'  => Banner::find($id),//Buat nyari halaman atau variabel $id
            'content' => 'admin/banner/add'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     // dd($request->all());
     $banner = Banner::find($id);
     $data = $request -> validate([
        'headline' => 'required',
        'desc' => 'required',
        //'urutan' => 'required',
        //'gambar' => 'required',
       
       ]);
       $data['urutan'] = 0;

       if ($banner->gambar != null) {
            unlink($banner->gambar);
       }

       if ($request->gambar) {
            $gambar = $request->file('gambar');
            $file_name = time().'-'. $gambar->getClientOriginalName();

            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage.$file_name;
       } else {
        $data['gambar'] = $banner->gambar;
       }


          $banner->update($data);
          Alert::success('Success', 'Berhasil mengupdate data');
           return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        if ($banner->gambar != null) {
            unlink($banner->gambar);
       }
        Alert::success('Success', 'Berhasil Menghapus Data');
        $banner->delete();
        return redirect('/admin/banner');
    }
    
}


 
