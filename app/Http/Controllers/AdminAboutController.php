<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen About',
            'about' => About::first(),
            'content' => 'admin/about/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    
    public function update(UpdateAboutRequest $request)
    {
        // dd($request->all());
     $about = About::first();
     $data = $request -> validate([
        'name' => 'required',
        'desc' => 'required',
       // 'cover' => 'required',

       
       ]);

       if ($about->cover != null) {
            unlink($about->cover);
       }

       if ($request->cover) {
            $cover = $request->file('cover');
            $file_name = time().'-'. $cover->getClientOriginalName();

            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
       } else {
        $data['cover'] = $about->cover;
       }


          $about->update($data);
          Alert::success('Success', 'Berhasil mengupdate data');
           return redirect('/admin/about');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
