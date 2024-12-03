<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminServicesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen services',
            'services' =>Services::get(),
            'content' => 'admin/services/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah services',
            'content' => 'admin/services/add'
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
        'icon' => 'required',
        'desc' => 'required'

       ]);

    Services::create($data);
       Alert::success('Success Title', 'Success Menambah');
       return redirect('/admin/services');
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
            'title' => 'Edit services',
            'services'  =>Services::find($id),//Buat nyari halaman atau variabel $id
            'content' => 'admin/services/add'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $services =Services::find($id);
        
      $data = $request -> validate([
           'title' => 'required',
        'icon' => 'required',
        'desc' => 'required'
            
           ]);

          

          $services->update($data);
          
          Alert::success('Success', 'Berhasil mengupdate data');
           return redirect('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = Services::find($id);
        Alert::success('Success', 'Berhasil Menghapus Data');
        $services->delete();
        return redirect('/admin/services');
    }
}
